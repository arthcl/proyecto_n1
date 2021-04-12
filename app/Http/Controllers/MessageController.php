<?php

namespace App\Http\Controllers;


use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 

class MessageController extends Controller
{
    
	public function store()
	{

		//  SE VALIDAN LOS FORMULARIOS
		$message = request()->validate(
			[

				'name' => 'required',
				'email' => ['required', 'email'],
				'subject' => 'required',
				'content' => 'required|min:3'
			],

			[

				'name.required' => __('Your name is necesary')
			]
		);

		// ENVIAMOS EMAILS AL DESTINATARIO

		Mail::to("soporte@emg.cl")->queue(new MessageReceived($message));

		return back()->with('status', 'hemos recibido tu mensaje, muchas gracias');
		//redirect()
	}
}
