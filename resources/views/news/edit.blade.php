@extends('layouts.app')

@section('content')
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Editar Noticia
    </div>
</header>

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Editar Noticia</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $news->title) }}" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenido</label>
                    <textarea name="content" id="content" class="form-control" rows="4" required>{{ old('content', $news->content) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Autor</label>
                    <input type="text" name="author" id="author" class="form-control" value="{{ old('author', $news->author) }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @if($news->image)
                        <img src="{{ asset($news->image) }}" alt="Imagen de la noticia" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Estatus</label>
                    <select name="status" id="status" class="form-control">
                        <option value="En Revisión" {{ old('status', $news->status) == 'En Revisión' ? 'selected' : '' }}>En Revisión</option>
                        <option value="Activo" {{ old('status', $news->status) == 'Activo' ? 'selected' : '' }}>Activo</option>
                        <option value="Rechazado" {{ old('status', $news->status) == 'Rechazado' ? 'selected' : '' }}>Rechazado</option>
                        <option value="Dado de Baja" {{ old('status', $news->status) == 'Dado de Baja' ? 'selected' : '' }}>Dado de Baja</option>
                    </select>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="active" id="active" class="form-check-input" {{ old('active', $news->active) ? 'checked' : '' }}>
                    <label for="active" class="form-check-label">Activo</label>
                </div>



                <button type="submit" class="btn btn-primary">Actualizar Noticia</button>
            </form>
        </div>
    </div>
</div>
@endsection
