@extends('adminlte::page')
@section('title', 'Token')

@section('content_header')
<div class="contenedor_titulo_principal">
        <div class="titulo_principal">
            <h1 class="">Tokens</h1>
            <hr style="width:100%;">
        </div>
    </div>
@stop

@section('content')
<div class="contend_token">
@can('admin.content')
<div class="texto_centrado_grid">
        <h3 class=" text-purple">Generar Tokens</h3>
        <hr style="width:100%;">
    </div>
    <div class="container_card_messages">
        
        @if($condicionProduccion===null)
        <div class="card_token">
            <h4 class=" text-purple">Produccion</h4>
            <form action="/admin/agregarTokenProduccion" method="POST" enctype="multipart/form-data" class="form_messages">
                @csrf
            
                <div class="contend-input-token">
                <label for="token" class="label_messages">Generar Token:</label><br>
                    <div class="">
                        <input id="input_token_produccion" class="input_token"  type="text" name="token">
                        <div id="btn_generar_token_produccion" class="btn btn-success button_generar">Generar</div>
                    </div>
                    
                </div>
                <div class="button_messages">
                    <button type="submit" class="btn btn-outline-success ">Guardar Token</button>
                </div><br>
            </form>
        </div>
        @else
        @endif
        @if($condicionSandbox===null)
        <div class="card_token">
            <h4 class=" text-purple">Sandbox</h4>
            <form action="/admin/agregarTokenSandbox" method="POST" enctype="multipart/form-data" class="form_messages">
                @csrf
            
                <div class="contend-input-token">
                    <label for="token" class="label_messages">Generar Token:</label><br>
                    <div class="">
                        <input id="input_token_sandbox" class="input_token"  type="text" name="token">
                        <div id="btn_generar_token_sandbox" class="btn btn-success button_generar">Generar</div>
                    </div>
                    
                </div>
                <div class="button_messages">
                    <button type="submit" class="btn btn-outline-success">Guardar Token</button>
                </div><br>
            </form>
        </div>
        @else
        @endif
    </div>
    <div class="listar_messages">
        <div class="texto_centrado_grid">
            <h3 class="">Listado Tokens</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="token_admin_table" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Token</th>
                            <th>Estado</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tokens as $token)
                    @if($token->id_user === auth()->user()->id)
                        <tr>
                            
                            <td>{{$token->id}}</td>
                            <td>{{$token->token}}</td>
                            <td>{{$token->estado}}</td>
                            <td>{{$token->name}}</td>
                            
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
            <h3 class="">Listado Tokens Empresas</h3>
            <hr style="width:100%;">
        </div>
        <div class="row table_messages">
            <div class="col-md-12">
                <table id="token_super_admin_table" class="display table table-striped table-bordered shadow-lg mt4 !important" style="width:100%">
                    <thead style="background-color:#881ab8; color:white;">
                        <tr>
                            <th>Id</th>
                            <th>Token</th>
                            <th>Estado</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tokens as $token)
                        <tr>
                            
                            <td>{{$token->id}}</td>
                            <td>{{$token->token}}</td>
                            <td>{{$token->estado}}</td>
                            <td>{{$token->name}}</td>
                            
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
        <link href="{{ asset('css/token.css') }}" rel="stylesheet">
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
        <script src="{{asset('js/token.js')}}"></script>
        <script>
        $(document).ready(function() {
            $('#token_admin_table').DataTable({
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
            $('#token_super_admin_table').DataTable({
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
        @if (session('tokenProduccion') == 'ok')
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Se registro con exito el Token de Produccion',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif


        @if (session('tokenProduccion') == 'no')
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'No se pudo registrar el Token de Produccion',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
        @if (session('tokenSanbox') == 'ok')
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Se registro con exito el Token de Sanbox',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif


        @if (session('tokenSanbox') == 'no')
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'No se pudo registrar el Token de Sanbox',
                    showConfirmButton: false,
                    timer: 1500
                });
            </script>
        @endif
@stop