<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //variables
	

		public function contact(){
			$email = 'leighdinaya04@gmail.com';
			$contactNumber = ['09276137537', '0923293923', '09323234356'];
			return view('contact', compact('email', 'contactNumber'));
		}

		public function about(){
			$name = 'Leigh Dinaya';
			$address = 'Capitangan Abucay, Bataan';
			$age = 24;
			$school = 'Bataan Peninsula State University.';
			$isStudent = false;
			return view('about', compact('name', 'address', 'age','isStudent', 'school'));
		}
}
