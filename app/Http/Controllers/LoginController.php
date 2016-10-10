<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    //
	public function index() {
		return view('login');
	}
	
	public function register() {
		return view('register');
	}
	
	public function createuser(Request $request) {
		// insert to db
		
		$fname = $request->usr_fname;
		$lname = $request->usr_lname;
		$email = $request->usr_email;
		$pass = $request->usr_password;
		
		DB::insert('INSERT INTO user (USR_FNAME, USR_LNAME, USR_EMAIL, USR_PASSWORD) VALUES(?,?,?,?)', [$fname, $lname, $email, $pass]);
		
		// redirect to login
		return redirect()->route('login');
	}
	
	public function login() {
		// redirect to home
		// session (?)
	}
}
