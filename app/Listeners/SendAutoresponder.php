<?php

namespace App\Listeners;

use Mail;
use App\Events\MessageWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAutoresponder
{
    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {
        var_dump('Enviar autorespondedor');
        $message = $event->message;
        Mail::send('emails.contact',['msg' => $message],function($m) use ($message){            
            //To: (email destino, nombre destino)            
            $m->to($message->email, $message->nombre)->subject('Tu mensaje fue recibido');
        });
    }
}
