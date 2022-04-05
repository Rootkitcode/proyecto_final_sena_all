@extends('adminlte::page')
@section('title', 'Clientes')

@section('content_header')
    <div class="contenedor_titulo_principal">
        <div class="titulo_principal">
            <h1 class="">Clientes</h1>
            <hr style="width:100%;">
        </div>

    </div>
@stop

@section('content')
@can('admin.content')
    <div class="listar_messages">
        <div class="texto_centrado_grid">
            <h3 class="">Listar de Clientes</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="clientes_admin_table" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Nombre Completo</th>
                            <th>Numero Telefono</th>
                            <th>Pais</th>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Dirrecion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        @if($cliente->id_user === auth()->user()->id)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nombre}} {{$cliente->apellidos}}</td>
                                <td>{{$cliente->numero_telefono}}</td>
                                <td>{{$cliente->pais}}</td>
                                <td>{{$cliente->ciudad}}</td>
                                <td>{{$cliente->pais}}</td>
                                <td>{{$cliente->dirreccion}}</td>
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
            <h3 class="">Listar de Clientes Todas Empresas</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="clientes_super_admin_table" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Nombre Completo</th>
                            <th>Numero Telefono</th>
                            <th>Pais</th>
                            <th>Ciudad</th>
                            <th>Pais</th>
                            <th>Dirrecion</th>
                            <th>Nombre Empresa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nombre}} {{$cliente->apellidos}}</td>
                                <td>{{$cliente->numero_telefono}}</td>
                                <td>{{$cliente->pais}}</td>
                                <td>{{$cliente->ciudad}}</td>
                                <td>{{$cliente->pais}}</td>
                                <td>{{$cliente->dirreccion}}</td>
                                <td>{{$cliente->name}}</td>
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
                $('#clientes_super_admin_table').DataTable({
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
                $('#clientes_admin_table').DataTable({
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
    @stop