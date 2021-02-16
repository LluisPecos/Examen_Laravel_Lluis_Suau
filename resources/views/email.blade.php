@extends('layout')

@section('head')

<!-- head -->
<title>Inicio</title>

@endsection

@section('content')

<div class="container rounded-lg" style="background: rgba(0, 0, 0, 0.8); padding: 20px;">
    <h2 class="text-white-50 mb-3">Envíame un correo</h2>
    <form action="{{ url('enviar-email') }}" method="get">
        <div class="form-group">
            <input name="titulo" class="form-control" type="text" placeholder="Título">
        </div>
        
        <div class="form-group">
            <textarea name="contenido" class="form-control" placeholder="Contenido" style="height: 150px;"></textarea>
        </div>
        
        <input class="btn btn-success" type="submit" value="Enviar">
    </form>
    
</div>

@endsection