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
		
		$this->validate($request, [
			'usr_fname' => 'required',
			'usr_lname' => 'required',
			'usr_email' => 'bail|required|email',
			'usr_password' => 'bail|required|same:confirmpass',
			'confirm_pass' => 'bail|required|same:usr_password'
		]);
		
		$fname = $request->usr_fname;
		$lname = $request->usr_lname;
		$email = $request->usr_email;
		$pass = $request->usr_password;
		
		DB::insert('INSERT INTO user (USR_FNAME, USR_LNAME, USR_EMAIL, USR_PASSWORD) VALUES(?,?,?,?)', [$fname, $lname, $email, $pass]);
		
		// redirect to login
		return redirect()->route('login');
	}
	
	public function login(Request $request) {
		// redirect to home
		$email = $request->usr_email;
		// hash the password
		$pass = $request->usr_password;
		
		$user = DB::table('user')
					->where('USR_EMAIL', $email)
					->where('USR_PASSWORD', $pass)
					->get();

		if(!empty($user)) {
			return redirect()->route('home');
		}
		// session (?)
	}
}
