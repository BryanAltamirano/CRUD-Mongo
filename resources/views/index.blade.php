@extends('layouts.main')-
@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h1>CRUD MongoDB xd</h1>
            <a href="{{ route('create') }}" class="btn btn-info">Crear nuevo</a>
            <hr>

            <table class="table table-bordered text-center">

                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $i)
                    <tr>
                        <td>{{ $i->matricula }}</td>
                        <td>{{ $i->nombre }}</td>
                        <td>
                            <a href="{{ route('show', $i->_id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('edit', $i->_id) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('destroy', $i->_id) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection