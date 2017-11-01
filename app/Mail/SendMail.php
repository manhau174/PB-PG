<?php

namespace App\Mail;

use App\Post;
use App\PbPg;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $pbpg, $post;
    public function __construct(PbPg $pbpg, Post $post)
    {
        //
        $this->pbpg = $pbpg;
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        return $this->view('mail')
                ->with([
                    'post' => $this->post,
                    
                ]);
    }
    // public function SendMail($mail, $link) {
    //     Mail::send('mail', array( 'link'=> $link), function($message){
    //         $message->to($mail, 'Thông báo')->subject('Thông báo');
    //     });
    //     Session::flash('flash_message', 'Send message successfully!');
    // }
}
