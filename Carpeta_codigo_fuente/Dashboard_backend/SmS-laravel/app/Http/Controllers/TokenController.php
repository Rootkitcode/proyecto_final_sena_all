<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\TokenApi;

class TokenController extends Controller
{
    public function index(){
        $user = auth()->user()->id;
        $condicionProduccion = DB::table('token_api')->where('id_user', '=', $user)->where('estado','=','Produccion')->first();
        $condicionSandbox = DB::table('token_api')->where('id_user', '=', $user)->where('estado','=','Sandbox')->first();
        $tokens = DB::select('SELECT u.name, c.*  FROM users u, token_api c WHERE u.id = c.id_user');
        return view('token.token',compact('tokens','condicionProduccion','condicionSandbox'));
    }
    public function agregarTokenProduccion(Request $request){
        $tokenApi = new TokenApi();
        $fechaActual = date('Y-m-d H:i:s');
        $user = auth()->user()->id;
        try{
            $tokenApi->id;
            $tokenApi->token = $request->get('token');
            $tokenApi->estado = 'Produccion';
            $tokenApi->id_user=$user;
            $tokenApi->created_at = $fechaActual;
            $tokenApi->updated_at = $fechaActual;
            $tokenApi->save();
            
        return redirect('/admin/token')->with('tokenProduccion','ok');
    } catch (\Throwable $th) {
        return redirect('/admin/token')->with('tokenProduccion','no');
    }
    }
    public function agregarTokenSandbox(Request $request){
        $tokenApi = new TokenApi();
        $fechaActual = date('Y-m-d H:i:s');
        $user = auth()->user()->id;
        try{
            $tokenApi->id;
            $tokenApi->token = $request->get('token');
            $tokenApi->estado = 'Sandbox';
            $tokenApi->id_user=$user;
            $tokenApi->created_at = $fechaActual;
            $tokenApi->updated_at = $fechaActual;
            $tokenApi->save();
            
        return redirect('/admin/token')->with('tokenSanbox','ok');
    } catch (\Throwable $th) {
        return redirect('/admin/token')->with('tokenSanbox','no');
    }
    }
}
