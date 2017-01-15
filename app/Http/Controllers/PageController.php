<?php

namespace App\Http\Controllers;

class PageController extends Controller {

     public function getHome() {
       return view('pages/welcome');
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
