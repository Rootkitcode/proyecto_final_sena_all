<?php
namespace App\Http\Controllers;
use App\Models\ClientesEmpresa;
use Illuminate\Http\Request;
use DB;

class ClientesController extends Controller
{
    public function index(){
        $clientes = DB::select('SELECT u.name, c.*  FROM users u, clientes_empresa c WHERE u.id = c.id_user',);
        return view('client.clientes', compact('clientes'));
    }
}

