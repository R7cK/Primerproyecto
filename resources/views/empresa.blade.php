@extends('layouts.app')
@section('titulopagona','Empresa E-Commerce')
@push('css')
    <style>
        .fondo{
            background: #302886
        }
        .img-responsive{
            width: 100%;
            height: 100%;
        }
    </style>
@endpush

@section('titulo')
    Bienvenido a la página de EC
@endsection

@section('subtitulo')
    Explorando las oportunidades con Laravel 12
@endsection

@section('link1','Active')
@section('titulo1')
    <h1>About Me</h1>
@endsection
@section("descripcion_about")
    {{ $descripcion_about }}
@endsection
@section("Autor")
    {{ $nombre }}
@endsection
@section("actividad",$actividad)
@section("texto_ejemplo")
    {{ $texto_ejemplo }}
@endsection

@section("contenido_listado")
    <h2>Listado de Usuarios Registrados</h2>
    <ul>
        @if(isset($listadousuarios))
        <table id='tablausuarios' class="table
        table-striped table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Calle</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
           @foreach($listadousuarios as $usuario)
                    <tr>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>{{$usuario->telefono}}</td>
                        <td>{{$usuario->calle}}</td>
                        <td><button class='btn btn-primary' onclick="carga_modal({{$usuario->id}}, 
                        '{{$usuario->name}}', '{{$usuario->calle}}')" data-id="{{$usuario->id}}" 
                        data-nombre="{{$usuario->name}}" data-calle="{{$usuario->calle}}" 
                        data-toggle="modal" data-target="#myModal"><span class='fa fa-pencil'></span></button></td>
                    </tr>
                @endforeach
        </tbody>
    </table>    
    @else
        <p>La variable del listado de usuarios no está
            definida
        </p>
    @endif
    </ul>
@endsection




@section('content')
<div class="container my-5 text-center">
    <x-search-location />

    <div class="mt-5">
        <h3 class="fw-bold">Nuestros pilares en Mérida</h3>
        <div class="row mt-4">
            <div class="col-md-4">
                <i class="fas fa-leaf text-success fa-2x mb-2"></i>
                <h5>Logística Verde</h5>
                <p class="small text-muted">Entregas en bicicleta reduciendo la huella de carbono.</p>
            </div>
            </div>
    </div>
</div>
@endsection