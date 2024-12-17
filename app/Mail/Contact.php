<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
           public $name;
           public $email;
           public $phone;
          
            

    public function __construct($name,$email,$phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
  
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        // return $this->view('view.name');

         return $this->view('mail.information', ['name' => $this->name, 'email' => $this->email ,  
            'phone' => $this->phone  ]);
    }
}
