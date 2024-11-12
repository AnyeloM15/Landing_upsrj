<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all(); // En el dashboard mostramos todas las noticias
        return view('news.index', compact('news'));
    }
    
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $news = new News();
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->author = $request->input('author');
        $news->status = 0; // Establecer estatus por defecto a "en revisión" (0)

        // Guardar la imagen si existe
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/news'), $imageName);
            $news->image = 'images/news/' . $imageName;
        }

        $news->save();

        return redirect()->route('news.index')->with('success', 'Noticia creada exitosamente');
    }

    public function updateStatus(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->status = $request->status;
        $news->save();

        return redirect()->route('news.index')->with('success', 'Estatus de la noticia actualizado exitosamente');
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->author = $request->input('author');
        
        // Si hay una nueva imagen, guarda el archivo en la carpeta especificada
        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($news->image && file_exists(public_path($news->image))) {
                unlink(public_path($news->image));
            }

            // Guarda la nueva imagen en \public\images\news
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('images/news'), $imageName);

            // Actualiza la ruta en la base de datos
            $news->image = 'images/news/' . $imageName;
        }

        $news->save();

        return redirect()->route('news.index')->with('success', 'Noticia actualizada exitosamente');
    }

    public function show($id)
    {
        // Solo mostrar noticias aprobadas en la vista pública
        $news = News::where('id', $id)->where('status', 1)->firstOrFail();
        return view('news.show', compact('news'));
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Noticia eliminada exitosamente');
    }
}
