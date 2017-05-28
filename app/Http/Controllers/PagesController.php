<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //variables
	

		public function contact(){
			$email = 'leighdinaya04@gmail.com';
			return view('contact', compact('email'));
		}

		public function about(){
			$name = 'Leigh Dinaya';
			$address = 'Capitangan Abucay, Bataan';
			$age = 24;
			return view('about', compact('name', 'address', 'age'));
		}
}
