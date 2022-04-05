@extends('adminlte::page')
@section('title', 'Tickets')

@section('content_header')
    <div class=" contenedor_titulo_principal">
        <div class="titulo_principal">
            <h1 class="">Tickets</h1>
            <hr style="width:100%;">
        </div>

    </div>
@stop

@section('content')
<div class="contend_messages">
@can('admin.content')
    <div class="texto_centrado_grid">
        <h3 class=" text-purple">Crear Ticket</h3>
        <hr style="width:100%;">
    </div>
    <div class="container_card_messages">
        <div class="card_ticket">
            <form action="/admin/crearTicket" method="POST" enctype="multipart/form-data" class="form_messages">
                @csrf
            
                <div class="">
                    <div class="">
                        <label for="fecha" class="label_messages">Correo:</label><br>
                        <input class="input_messages" type="email" name="correo_from" value="{{old('correo_from')}}">
                    </div>
                    <div class="">
                        <label for="fecha" class="label_messages">Asunto:</label><br>
                        <input class="input_messages" type="text" name="asunto" value="{{old('asunto')}}">
                    </div>
                </div>
                <div class="">
                    <label for="mensaje" class="label_messages">Mensaje:</label><br>
                    <textarea class="input_messages" name="mensaje" id="mensaje" value="{{old('mensaje')}}" cols="30" rows="6"></textarea>
                    
                </div>
                <input type="text" name='token' readonly style="display:none" value="{{uniqid(Str::random(6))}}">
                <div class="button_messages">
                    <button type="submit" class="btn btn-outline-success ">Registrar Ticket</button>
                </div><br>
            </form>
        </div>
    </div>
    
    <div class="listar_messages">
        <div class="texto_centrado_grid">
            <h3 class="">Listar Tickets Enviados</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="tickets_enviados_admin" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Token</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Estado</th>
                            <th>Usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                        @if($ticket->id_user === auth()->user()->id)

                            <tr>
                                <td>{{ $ticket->id }}</td>
                                <td>{{ $ticket->token }}</td>
                                <td>{{ $ticket->asunto }}</td>
                                <td>{{ $ticket->mensaje }}</td>
                                <td>{{ $ticket->estado }}</td>
                                <td>{{ $ticket->name }}</td>
                                <td>
                                @if($ticket->estado === 'Leido')
                                
                                @else
                                <a href="/admin/editarTicket/{{ $ticket->token }}/edit" id="editar"
                                    class="btn btn-warning btn-edit-messages-table">Editar</a>
                                @endif
                                </td>
                            </tr>
                            @endif
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="listar_messages">
        <div class="texto_centrado_grid">
            <h3 class="">Listar Tickets Respuestas</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="tickets_respondidos_admin" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Token</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($respuestaTicketAdmin as $respuesta)
                        @if($respuesta->id_user === auth()->user()->id)
                            <tr> 
                                <td>{{ $respuesta->id }}</td>
                                <td>{{ $respuesta->token }}</td>
                                <td>{{ $respuesta->asunto }}</td>
                                <td>{{ $respuesta->mensaje }}</td>
                                <td>{{ $respuesta->name }}</td>
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
            <h3 class="">Listar Tickets Enviados</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="tickets_enviados_super_admin" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Estado</th>
                            <th>Token</th>
                            <th>Usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->id }}</td>
                                <td>{{ $ticket->asunto }}</td>
                                <td>{{ $ticket->mensaje }}</td>
                                <td>{{ $ticket->estado }}</td>
                                <td>{{ $ticket->token }}</td>
                                <td>{{ $ticket->name }}</td>
                                <td>
                                @if($ticket->estado === 'Leido')
                                @else
                                <a href="/admin/responderTicket/{{ $ticket->token }}" id="responder"
                                    class="btn btn-warning btn-edit-messages-table">Responder</a>
                                @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="listar_messages">
        <div class="texto_centrado_grid">
            <h3 class="">Listar Tickets Respuestas</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="tickets_respondidos_super_admin" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Token</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Usuario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($respuestaTicket as $respuesta)
                            <tr>
                                <td>{{ $respuesta->id }}</td>
                                <td>{{ $respuesta->token }}</td>
                                <td>{{ $respuesta->asunto }}</td>
                                <td>{{ $respuesta->mensaje }}</td>
                                <td>{{ $respuesta->name }}</td>
                                <td>
                                    <a href="/admin/editarRespuestaTicket/{{$respuesta->id}}/edit"
                                    class="btn btn-warning btn-edit-messages-table">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endcan
</div>
    
    
    
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        <link href="{{ asset('css/mensajes.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tickets.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="sweetalert2.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    @stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"
integrity="sha512-mBSqtiBr4vcvTb6BCuIAgVx4uF3EVlVvJ2j+Z9USL0VwgL9liZ638rTANn5m1br7iupcjjg/LIl5cCYcNae7Yg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>


<script>
        $(document).ready(function() {
            $('#tickets_enviados_super_admin').DataTable({
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
            $('#tickets_respondidos_super_admin').DataTable({
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
            $('#tickets_enviados_admin').DataTable({
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
            $('#tickets_respondidos_admin').DataTable({
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
@if (session('ticketEnviado') == 'ok')
<script>
    Swal.fire({
        icon: 'success',
        title: 'Se registro con exito el Ticket',
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif


@if (session('ticketEnviado') == 'no')
<script>
    Swal.fire({
        icon: 'error',
        title: 'No se pudo registrar el Ticket',
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif
@if (session('edit') == 'ok')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Se edito con exito el Ticket',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif


    @if (session('edit') == 'no')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'No se pudo editar el Ticket',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
    
    @if (session('respuestaEnviado') == 'ok')
<script>
    Swal.fire({
        icon: 'success',
        title: 'Se registro con exito la respuesta',
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif


@if (session('respuestaEnviado') == 'no')
<script>
    Swal.fire({
        icon: 'error',
        title: 'No se pudo registrar la respuesta',
        showConfirmButton: false,
        timer: 1500
    });
</script>
@endif
@if (session('editRespuesta') == 'ok')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Se edito con exito la respuesta',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif


    @if (session('editRespuesta') == 'no')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'No se pudo editar la respuesta',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@stop