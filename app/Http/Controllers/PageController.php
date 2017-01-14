<?php

namespace App\Http\Controllers;

class PageController extends Controller {

     public function getHome() {
       return view('welcome');
     }
     public function getAbout() {
       return view('about');


     }
     public function getContact() {
       return view('contact');



     }

}
