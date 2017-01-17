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
      $posts = Post::paginate(5);
      foreach ($posts as $post) {
        $post->body = $this->shortenText($post->body,30);
      }
     return view('pages.index',[
       'posts'  => $posts
     ]);
    }

    public function getPostIndex($post_id)
    {
      $post = Post::find($post_id);
      if(!$post){
        return redirect()->route('pages.index')->with(['fail' => 'Post Not Found']);
      }
      return view('pages.post',['post' => $post]);
    }
   public function getCreatePost(){
     return view('admin.blog.create_post');
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

        return redirect()->route('contact')->
        with('success' , 'Your Message Is sent');
      }


      private function shortenText($text, $words_count){
        if(str_word_count($text,0) > $words_count){
          $words = str_word_count($text,2);
          $pos = array_keys($words);
          $text = substr($text,0,$pos[$words_count]) . "...";
        }
        return $text;
      }


}
