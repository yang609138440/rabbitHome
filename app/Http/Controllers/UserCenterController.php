<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Container\Container;
class UserCenterController {

	public function index(){
		return view('userCenter');
	}

}