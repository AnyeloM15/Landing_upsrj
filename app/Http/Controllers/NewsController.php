<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class NewsController extends Controller
{
    use AuthorizesRequests;
    
    public function index()
    {
        $news = News::all();
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

            News::create([
                'title' => $request->title,
                'content' => $request->content,
                'author' => auth()->user()->name,
                'status' => 'en revisión',
                'image' => $request->file('image') ? $request->file('image')->store('images/news', 'public') : null,
            ]);

            return redirect()->route('news.index')->with('success', 'Noticia creada y en revisión');
        }



    public function edit(News $news)
    {

        // Verifica si el usuario está autenticado y tiene el rol 'admin'
        if (auth()->user()->role->name !== 'admin') {
            abort(403, 'This action is unauthorized.');
        }

        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // Asigna 1 si el checkbox está marcado, de lo contrario asigna 0
        $active = $request->has('active') ? 1 : 0;

        // Actualiza los campos de la noticia
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->author = $request->input('author');
        $news->status = $request->input('status');
        $news->active = $active;

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
        // Obtiene la noticia según su ID
        $news = News::findOrFail($id);

        // Retorna la vista de detalle de la noticia
        return view('news.show', compact('news'));
    }


    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Noticia eliminada exitosamente');
    }
}
