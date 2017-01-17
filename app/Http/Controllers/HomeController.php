<?php

namespace blog\Http\Controllers;

use blog\Post;
use Mail;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getindex()
    {
      $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('pages.index',[
          'posts' => $posts
        ]);
    }

    public function getPostIndex($post_id)
    {
      return view('pages.post');
    }

    public function getContact()
    {
      return view('pages.contact');
    }

      public function postContact(Request $request) {
        $this->validate($request, [
          'email' => 'required|email',
          'subject' => 'min:3',
          'message' => 'min:10']);

        $data = array(
          'email' => $request->email,
          'subject' => $request->subject,
          'bodyMessage' => $request->message
          );

        Mail::send('pages.email', $data, function($message) use ($data){
          $message->from($data['email']);
          $message->to('test@test.com');
          $message->subject($data['subject']);
        });

        Session::flash('success', 'Your Email was Sent!');

        return redirect()->route('contact');
      }

}
