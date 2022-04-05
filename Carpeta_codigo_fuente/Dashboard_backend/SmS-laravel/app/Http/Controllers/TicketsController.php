<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use App\Models\RespuestaTickets;
use Illuminate\Support\Str;
use App\Mail\TicketsMail;
use App\Mail\TicketsEditMail;
use App\Mail\RespuestaTicketMail;
use App\Mail\RespuestaTicketEditMail;
use Illuminate\Support\Facades\Mail;
use DB;
class TicketsController extends Controller
{
    public function index(){
        $respuestaTicket = DB::select('SELECT u.name, c.*  FROM users u, respuesta_ticket c WHERE u.id = c.id_user');
        $respuestaTicketAdmin = DB::select('SELECT u.name,r.token, c.*  FROM users u, respuesta_ticket c, ticket r WHERE u.id = c.id_user and c.token = r.token');
        $tickets = DB::select('SELECT u.name, c.*  FROM users u, ticket c WHERE u.id = c.id_user');
        return view('tickets.tickets',compact('tickets','respuestaTicket','respuestaTicketAdmin'));
    }
    public function crearTicket(Request $request){
        $correo = new TicketsMail($request->all());
        $tickets = new Tickets();
        $fechaActual = date('Y-m-d H:i:s');
        $user = auth()->user()->id;
        try{
            $tickets->id;
            $tickets->correo_from = $request->get('correo_from');
            $tickets->asunto = $request->get('asunto');
            $tickets->mensaje = $request->get('mensaje');
            $tickets->token = $request->get('token');
            $tickets->estado = 'No Leido';
            $tickets->created_at = $fechaActual;
            $tickets->updated_at = $fechaActual;
            $tickets->id_user = $user;
            $tickets->save();
            Mail::to('diazcerverasantiago@gmail.com')->send($correo);
            return redirect('/admin/tickets')->with('ticketEnviado','ok');
        }catch (\Throwable $th) {
            return redirect('/admin/tickets')->with('ticketEnviado','no');
        }
        
    }
    public function editTicket($token){
        $ticket = DB::select('SELECT *  FROM ticket  WHERE token = ?',[$token]);
        return view('tickets.editarTicket',compact('ticket'));
    }
    public function edit(Request $request, $id){
        $ticket = Tickets::find($id);
        $correo = new TicketsEditMail($request->all());
        $fechaActual = date('Y-m-d H:i:s');
        try{
            $ticket->id;
            if($request->get('correo_from')===null){
                $ticket->correo_from;
            }else{
                $ticket->correo_from = $request->get('correo_from');
            }
            if($request->get('asunto')===null){
                $ticket->asunto;
            }else{
                $ticket->asunto = $request->get('asunto');
            }
            if($request->get('mensaje')===null){
                $ticket->mensaje;
            }else{
                $ticket->mensaje = $request->get('mensaje');
            }
            $ticket->updated_at = $fechaActual;
            
            $ticket->save();
            Mail::to('diazcerverasantiago@gmail.com')->send($correo);
            return redirect('/admin/tickets')->with('edit','ok');
        }catch (\Throwable $th) {
            return redirect('/admin/tickets')->with('edit','no');
        }
    }

    public function responderTicket($token){
        $ticket = DB::select('SELECT u.name, c.*  FROM users u, ticket c  WHERE u.id = c.id_user AND c.token = ?',[$token]);
        return view('tickets.respuesta.respuestaTicket',compact('ticket'));
    }
    public function crearRespuestaTicket(Request $request){
        $correo = new RespuestaTicketMail($request->all());
        $respuestaTicket = new RespuestaTickets();
        $fechaActual = date('Y-m-d H:i:s');
        $user = auth()->user()->id;
        $ticket = DB::table('ticket')->where('token', $request->get('token'))->update(['estado' => 'Leido']);
        try{
            $respuestaTicket->id;
            $respuestaTicket->correo_to = $request->get('correo_to');
            $respuestaTicket->asunto = $request->get('asunto');
            $respuestaTicket->mensaje = $request->get('mensaje');
            $respuestaTicket->token = $request->get('token');
            $respuestaTicket->estado = 'Enviado';
            $respuestaTicket->created_at = $fechaActual;
            $respuestaTicket->updated_at = $fechaActual;
            $respuestaTicket->id_user = $request->get('id_user');
            $respuestaTicket->save();
            Mail::to($request->get('correo_to'))->send($correo);
            return redirect('/admin/tickets')->with('respuestaEnviado','ok');
        }catch (\Throwable $th) {
            dd($th);
            return redirect('/admin/tickets')->with('respuestaEnviado','no');
        }
    }
    public function editRespuestaTicket($id){
        $respuestaTicket = RespuestaTickets::find($id);
        return view('tickets.respuesta.respuestaTicketEdit',compact('respuestaTicket'));
    }
    public function editRespuesta(Request $request, $id){
        $respuestaTicket = RespuestaTickets::find($id);
        $correo = new RespuestaTicketEditMail($request->all());
        $fechaActual = date('Y-m-d H:i:s');
        try{
            $respuestaTicket->id;
            if($request->get('correo_from')===null){
                $respuestaTicket->correo_from;
            }else{
                $respuestaTicket->correo_from = $request->get('correo_from');
            }
            if($request->get('asunto')===null){
                $respuestaTicket->asunto;
            }else{
                $respuestaTicket->asunto = $request->get('asunto');
            }
            if($request->get('mensaje')===null){
                $respuestaTicket->mensaje;
            }else{
                $respuestaTicket->mensaje = $request->get('mensaje');
            }
            $respuestaTicket->updated_at = $fechaActual;
            
            $respuestaTicket->save();
            Mail::to('diazcerverasantiago@gmail.com')->send($correo);
            return redirect('/admin/tickets')->with('editRespuesta','ok');
        }catch (\Throwable $th) {
            return redirect('/admin/tickets')->with('editRespuesta','no');
        }
    }
}

