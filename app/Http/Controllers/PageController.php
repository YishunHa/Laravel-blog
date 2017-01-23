<?php

namespace App\Http\Controllers;
use App\Post;

class PageController extends Controller {

     public function getHome() {
       $post = Post::orderBy('created_at', 'desc')->limit(5)->get();
       return view('pages/welcome')->withPosts($post);
     }
     public function getAbout() {
       return view('pages/about');


     }
     public function getContact() {
       $first = 'Yishun';
       $last  = 'Xia';

       $fullname = $first . " " . $last;
       $email = 'yal0858@gmail.com';
       $data = [];
       $data['fullname'] = $fullname;
       $data['email'] = $email;
       return view('pages/contact')->withData($data);



     }

}
