<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;
use App\Http\Controllers\Controllers;

class PageController extends Controller {

     public function getHome() {
       $post = Post::orderBy('created_at', 'desc')->limit(5)->get();
       return view('pages.welcome')->withPosts($post);
     }
     public function getAbout() {
       $first = 'Yishun';
       $last  = 'Xia';

       $fullname = $first . " " . $last;
       $email = 'yal0858@gmail.com';
       $data = [];
       $data['fullname'] = $fullname;
       $data['email'] = $email;
       return view('pages.about')->withData($data);


     }
     public function getContact() {
       return view('pages.contact');



     }

     public function postContact(Request $request) {
      $this->validate($request, [
        'email' => 'required|email',
        'subject' => 'required|min:3',
        'message' => 'required|min:10']);

        $data = array(
          'email' => $request -> email,
          'subject' => $request -> subject,
          'BodyMessage' => $request -> message
        );

        Mail::send('emails.contact', $data, function($message) use ($data)
      {
        $message -> from($data['email']);
        $message -> to('yal0858@qq.com');
        $message -> subject($data['subject']);
      });

         Session::flash('success', 'The contact e-mail was successfully Sent!');

         return redirect() ->route('home');


    }



}
