<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messages;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MensajesController extends Controller
{
    public function index(){
        $mensajes = DB::select('SELECT u.name, c.*  FROM users u, messages c WHERE u.id = c.id_user');
        return view('messages.mensajes',compact('mensajes'));
    }
    public function agregarMensaje(Request $request){
        $mensajesNew = new Messages();
        $fechaActual = date('Y-m-d H:i:s');
        $user = auth()->user()->id;
        try{
            $mensajesNew->id;
            $mensajesNew->mensaje = $request->get('mensaje');
            $mensajesNew->estado = $request->get('estado');
            $mensajesNew->fecha = $request->get('fecha');
            $mensajesNew->id_user=$user;
            $mensajesNew->created_at = $fechaActual;
            $mensajesNew->updated_at = $fechaActual;
            $mensajesNew->save();
            
        return redirect('/admin/messages')->with('mensaje','ok');
    } catch (\Throwable $th) {
        return redirect('/admin/messages')->with('mensaje','no');
    }
    }
    public function editarMensaje($id){
        $mensaje = Messages::find($id);
        return view('messages.editarMensaje',compact('mensaje'));
    }
    public function edit(Request $request, $id){
        $mensaje = Messages::find($id);
        // $mensajesNew = new Messages();
        $fechaActual = date('Y-m-d H:i:s');
        try{
            $mensaje->id;
            if($request->get('mensaje')===null){
                $mensaje->mensaje;
            }else{
                $mensaje->mensaje = $request->get('mensaje');
            }
            if($request->get('estado')===null){
                $mensaje->estado;
            }else{
                $mensaje->estado = $request->get('estado');
            }
            if($request->get('fecha')===null){
                $mensaje->fecha;
            }else{
                $mensaje->fecha = $request->get('fecha');
            }
            $mensaje->updated_at = $fechaActual;
            
            $mensaje->save();
            return redirect('/admin/messages')->with('edit','ok');
        }catch (\Throwable $th) {
            return redirect('/admin/messages')->with('edit','no');
        }
    }
    public function delete($id){
        try{
            $mensaje = Messages::find($id);
            $mensaje->delete();
            return redirect('/admin/messages')->with('delete','ok');
        }catch (\Throwable $th) {
            return redirect('/admin/messages')->with('delete','no');
        }
    }
}
