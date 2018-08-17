<?php

namespace App\Listeners;

use Mail;
use App\Events\MessageWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNotificationToTheOwner
{   

    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {
        var_dump('Notificar al dueño');
        $message = $event->message;
        Mail::send('emails.contact',['msg' => $message],function($m) use ($message){            
            //To: (email destino, nombre destino)            
            $m->from($message->email, $message->nombre)
            ->to('jhurtado@correo.com', 'Juan P Hurtado')
            ->subject('Tu mensaje fue recibido');
        });
    }
}
