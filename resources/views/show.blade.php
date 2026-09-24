@extends('layouts.main')

@section('contenido')
<div class="container">
    <div class="row mt-5">
        <div class="col-5">
            <h1>Mostrar registro</h1>
            <p>
                <table class="table table-bordered text-center">
                 <thead>
                <tr>
                    <td>Matricula:</td>
                    <td>{{ $item->matricula }}</td>
                </tr>
                </thead>
                <tr>
                    <td>Nombre:</td>
                    <td>{{ $item->nombre }}</td>
                </tr>
                </table>             
            </p>
            <a href="{{ route('index') }}" class="btn btn-info">Regresar</a>
        </div>
    </div>
</div>
@endsection