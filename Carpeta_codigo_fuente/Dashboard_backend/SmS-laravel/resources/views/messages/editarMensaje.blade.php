@extends('adminlte::page')
@section('title', 'Mensajes')

@section('content_header')
    <div class="row contenedor_titulo_principal">
        <div class="titulo_principal">
            <h1 class="">Mensajes</h1>
            <hr style="width:100%;">
        </div>

    </div>
@stop

@section('content')
<div class="contend_messages">
    <div class="texto_centrado_grid">
        <h3 class=" text-purple">Editar Mensaje</h3>
        <hr style="width:100%;">
    </div>
    <div class="container_card_messages">
        <div class="card_mensaje">
            <form action="/admin/modificarMensaje/{{ $mensaje->id }}/edit" method="POST" enctype="multipart/form-data" class="form_messages">
                @csrf
                @method('PUT')
                <div class="">
                    <div class="">
                        <label for="fecha" class="label_messages">fecha:</label><br>
                        <input class="input_messages" type="date" name="fecha" value="{{$mensaje->fecha}}">
                    </div>
                    <div class="">
                        <label for="estado" class="label_messages">Estado:</label><br>
                        <select name="estado" class="input_messages"  id="">
                            <option value="x">Seleccione...</option>
                            <option value="{{ $mensaje->estado }}" disabled selected>{{ $mensaje->estado }}
                            </option>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="">
                    <label for="mensaje" class="label_messages">Mensaje:</label><br>
                    <textarea class="input_messages" value="{{$mensaje->mensaje}}" name="mensaje" id="mensaje" cols="30" rows="6">{{$mensaje->mensaje}}</textarea>
                </div>
                <div class="button_messages">
                    <button type="submit" class="btn btn-outline-success ">Editar Mensaje</button>
                </div><br>
            </form>
        </div>
    </div>
</div>
    
    
    
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link href="{{ asset('css/mensajes.css') }}" rel="stylesheet">
    @stop

    @section('js')
        <script>
            console.log('Hi!');
        </script>
        
        {{-- @if (session('mensaje') == 'ok')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Se registro con exito el mensaje',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif


    @if (session('mensaje') == 'no')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'No se pudo registrar el mensaje',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif --}}
    @stop
