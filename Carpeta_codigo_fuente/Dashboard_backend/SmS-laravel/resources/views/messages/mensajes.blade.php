@extends('adminlte::page')
@section('title', 'Mensajes')

@section('content_header')
    <div class="contenedor_titulo_principal">
        <div class="titulo_principal">
            <h1 class="">Mensajes</h1>
            <hr style="width:100%;">
        </div>
    </div>
@stop

@section('content')
<div class="contend_messages">
@can('admin.content')
    <div class="texto_centrado_grid">
        <h3 class=" text-purple">Crear Mensaje</h3>
        <hr style="width:100%;">
    </div>
    <div class="container_card_messages">
        <div class="card_mensaje">
            <form action="/admin/agregarMensaje" method="POST" enctype="multipart/form-data" class="form_messages">
                @csrf
            
                <div class="">
                    <div class="">
                        <label for="fecha" class="label_messages">fecha:</label><br>
                        <input class="input_messages" type="date" name="fecha">
                    </div>
                    <div class="">
                        <label for="estado" class="label_messages">Estado:</label><br>
                        <select name="estado" class="input_messages"  id="">
                            <option value="x">Seleccione...</option>
                            <option value="activo">Activo</option>
                            <option value="inactivo">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="">
                    <label for="mensaje" class="label_messages">Mensaje:</label><br>
                    <textarea class="input_messages" name="mensaje" id="mensaje" cols="30" rows="6"></textarea>
                    
                </div>
                {{-- <input type="text" value="{{auth()->user()->id}}"> --}}
                <div class="button_messages">
                    <button type="submit" class="btn btn-outline-success ">Registrar Mensaje</button>
                </div><br>
            </form>
        </div>
    </div>
    
    <div class="listar_messages">
        <div class="texto_centrado_grid">
            <h3 class="">Listar Mensajes</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="mensajes_admin_table" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Mensaje</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mensajes as $mensaje)
                        @if($mensaje->id_user === auth()->user()->id)
                            <tr>
                                <td>{{ $mensaje->id }}</td>
                                <td>{{ $mensaje->mensaje }}</td>
                                <td>{{ $mensaje->estado }}</td>
                                <td>{{ $mensaje->fecha }}</td>
                                <td class="td-messages-actions">
                                    <a href="/admin/editarMensaje/{{ $mensaje->id }}/edit" id="editar"
                                    class="btn btn-warning btn-edit-messages-table">Editar</a>
                                    <form method="POST" action="/admin/eliminarMensaje/{{ $mensaje->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit" id="eliminar">Eliminar</button>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endcan
@can('super.content')
    <div class="listar_messages">
        <div class="texto_centrado_grid">
            <h3 class="">Listar Mensajes</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="messages_table_super_admin" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Mensaje</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mensajes as $mensaje)
                            <tr>
                                <td>{{ $mensaje->id }}</td>
                                <td>{{ $mensaje->mensaje }}</td>
                                <td>{{ $mensaje->estado }}</td>
                                <td>{{ $mensaje->fecha }}</td>
                                <td>{{$mensaje->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endcan
    
    
    
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link href="{{ asset('css/mensajes.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="sweetalert2.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    @stop

    @section('js')
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"
        integrity="sha512-mBSqtiBr4vcvTb6BCuIAgVx4uF3EVlVvJ2j+Z9USL0VwgL9liZ638rTANn5m1br7iupcjjg/LIl5cCYcNae7Yg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

        
        @if (session('mensaje') == 'ok')
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
        @endif
        @if (session('edit') == 'ok')
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Se edito con exito el mensaje',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif


        @if (session('edit') == 'no')
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'No se pudo editar el mensaje',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
        @if (session('delete') == 'ok')
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Se elimino con exito el mensaje',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif

        @if (session('delete') == 'no')
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'No se pudo eliminar el mensaje',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
        <script>
            $(document).ready(function() {
                $('#messages_table_super_admin').DataTable({
                    responsive:true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "zeroRecords": "No hay registros - disculpa",
                    "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
                });
            });
            $(document).ready(function() {
                $('#mensajes_admin_table').DataTable({
                    responsive:true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por pagina",
                    "zeroRecords": "No hay registros - disculpa",
                    "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "search": "Buscar:",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
                });
            });
            
        </script>
    @stop