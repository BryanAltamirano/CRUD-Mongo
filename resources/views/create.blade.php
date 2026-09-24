@extends('layouts.main')

@section('contenido')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h1>Crear un nuevo registro</h1>
                <form action="{{ route('store') }}" method="post">
                    @csrf
                    @method("POST")
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                    <label for="matricula">Matricula</label>
                    <input type="text" class="form-control" name="matricula" id="matricula">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>   
@endsection
