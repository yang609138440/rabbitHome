<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Container\Container;
class WelcomeController {

	public function index(){
		return view('welcome');
	}

}