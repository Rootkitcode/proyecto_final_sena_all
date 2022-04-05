@extends('adminlte::page')
@section('title', 'Respuesta Ticket')

@section('content_header')
    <div class="row contenedor_titulo_principal">
        <div class="titulo_principal">
            <h1 class="">Tickets</h1>
            <hr style="width:100%;">
        </div>

    </div>
@stop

@section('content')
<div class="contend_respuestaTicket">
    
    <div class="listar_messages">
        <div class="texto_centrado_grid">
            <h3 class="">Ticket</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="respuesta_ticket" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Token</th>
                            <th>Asunto</th>
                            <th>Mensaje</th>
                            <th>Username</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    @foreach($ticket as $ticket)
                    <tbody>
                        <tr>
                            <td>{{$ticket->token}}</td>
                            <td>{{$ticket->asunto}}</td>
                            <td>{{$ticket->mensaje}}</td>
                            <td>{{$ticket->name}}</td>
                            <td>{{$ticket->correo_from}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="texto_centrado_grid">
        <h3 class=" text-purple">Crear Respuesta Ticket</h3>
        <hr style="width:100%;">
    </div>
    <div class="container_card_messages">
        <div class="card_ticket">
            <form action="/admin/crearRespuestaTicket" method="POST" enctype="multipart/form-data" class="form_messages">
                @csrf
            
                <div class="">
                    <div class="">
                        <label for="fecha" class="label_messages">Correo a enviar:</label><br>
                        <input class="input_messages" type="email" name="correo_to" value="{{old('correo_to')}}">
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
                <input type="text" name='token' readonly style="display:none" value="{{$ticket->token}}">
                <input type="text" name='id_user' readonly style="display:none" value="{{$ticket->id_user}}">
                @endforeach
                <div class="button_messages">
                    <button type="submit" class="btn btn-outline-success ">Enviar Respuesta</button>
                </div><br>
            </form>
        </div>
    </div>
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
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"
integrity="sha512-mBSqtiBr4vcvTb6BCuIAgVx4uF3EVlVvJ2j+Z9USL0VwgL9liZ638rTANn5m1br7iupcjjg/LIl5cCYcNae7Yg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
        $(document).ready(function() {
            $('#respuesta_ticket').DataTable({
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
                }s
            });
            

        });
</script>
@stop