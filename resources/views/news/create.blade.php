@extends('layouts.app')

@section('content')

<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Crear Noticia
    </div>
</header>

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Nueva Noticia</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenido</label>
                    <textarea name="content" id="content" class="form-control" rows="4" required>{{ old('content') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Autor</label>
                    <input type="text" value="{{Auth::user()->name}}" name="author" id="author" class="form-control" value="{{ old('author') }}">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Imagen</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" name="active" id="active" class="form-check-input" {{ old('active', true) ? 'checked' : '' }}>
                    <label for="active" class="form-check-label">Activo</label>
                </div>

                <button type="submit" class="btn btn-primary">Crear Noticia</button>
            </form>
        </div>
    </div>
</div>
@endsection
