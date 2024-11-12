@extends('layouts.app')

@section('content')

<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        Noticias
    </div>
</header>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Noticias</h4>
        </div>
        <div class="card-body">

            @if(Auth::user()->role_id==1)
                <a href="{{ route('news.create') }}" class="btn btn-success mb-3">Nueva Noticia</a>
            @endif

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Título</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Estatus</th>
<<<<<<< HEAD
                        <th scope="col">Acciones</th>
=======
                        @if(Auth::user()->role_id==1)
                            <th scope="col">Acciones</th>
                        @endif
>>>>>>> 83c846f (STATUS ROLES)
                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->author }}</td>
<<<<<<< HEAD
                        <td>
                            <!-- Mostrar el estatus actual -->
                            @if($item->status == 0)
                                <span class="badge bg-warning">En Revisión</span>
                            @elseif($item->status == 1)
                                <span class="badge bg-success">Aprobado</span>
                            @else
                                <span class="badge bg-danger">Rechazado</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>

                            <!-- Botones para cambiar el estatus -->
                            <form action="{{ route('news.updateStatus', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" name="status" value="1" class="btn btn-sm btn-success">Aprobar</button>
                                <button type="submit" name="status" value="2" class="btn btn-sm btn-danger">Rechazar</button>
                            </form>
                        </td>
=======
                        <td>{{ $item->status }}</td>
                        @if(Auth::user()->role_id==1)
                            <td>
                                <a href="{{ route('news.edit', $item->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        @endif
>>>>>>> 83c846f (STATUS ROLES)
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
