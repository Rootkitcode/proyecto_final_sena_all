@extends('adminlte::page')
@section('title', 'Editar Tickets')

@section('content_header')
    <div class="row contenedor_titulo_principal">
        <div class="titulo_principal">
            <h1 class=""> Tickets</h1>
            <hr style="width:100%;">
        </div>

    </div>
@stop

@section('content')
<div class="contend_messages">
    <div class="texto_centrado_grid">
        <h3 class=" text-purple">Editar Ticket</h3>
        <hr style="width:100%;">
    </div>
    <div class="container_card_messages">
        <div class="card_ticket">
            @foreach ($ticket as $ticket)
            <form action="/admin/modificarTicket/{{$ticket->id}}/edit" method="POST" enctype="multipart/form-data" class="form_messages">
                @csrf
                @method('PUT')
                <div class="">
                    <div class="">
                        <label for="fecha" class="label_messages">Correo:</label><br>
                        <input class="input_messages" type="email" name="correo_from" value="{{$ticket->correo_from}}">
                    </div>
                    <div class="">
                        <label for="fecha" class="label_messages">Asunto:</label><br>
                        <input class="input_messages" type="text" name="asunto" value="{{$ticket->asunto}}">
                    </div>
                </div>
                <div class="">
                    <label for="mensaje" class="label_messages">Mensaje:</label><br>
                    <textarea class="input_messages" name="mensaje" id="mensaje" value="{{$ticket->mensaje}}" cols="30" rows="6">{{$ticket->mensaje}}</textarea>
                    
                </div>
                <input type="text" name='token' readonly style="display:none;"  value="{{$ticket->token}}">
                @endforeach
                <div class="button_messages">
                    <button type="submit" class="btn btn-outline-success ">Registrar Ticket</button>
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
    @stop

@section('js')
<script>
    console.log('Hi!');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.0.18/sweetalert2.min.js"
integrity="sha512-mBSqtiBr4vcvTb6BCuIAgVx4uF3EVlVvJ2j+Z9USL0VwgL9liZ638rTANn5m1br7iupcjjg/LIl5cCYcNae7Yg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


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
@stop