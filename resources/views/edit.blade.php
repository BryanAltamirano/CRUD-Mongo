@extends('layouts.main')

@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h1>Editar registro</h1>
            <form action="{{ route('update', $item->_id) }}" method="POST">
                @csrf
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" value="{{ $item->nombre }}" class="form-control">
                <label for="matricula">Matricula</label>
                <input type="text" name="matricula" id="matricula" value="{{ $item->matricula }}" class="form-control">
                <button class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection