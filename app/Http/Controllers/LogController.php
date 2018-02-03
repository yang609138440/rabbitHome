<?php
namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LogController {

	public function index() {
		return view('login');
	}

	public function check(Request $request)
    {
    	$name = $request->input('name');
    	$pwd = $request->input('pwd');
    	$user = User::where('name','=',$name)->where('password','=',$pwd)->first();
    	if(empty($user)){
    		dd("密码错误，登陆失败");
    	}else{
    		// dd("登陆成功！用户名：{$user['name']},密码：{$user['password']}....");
    		return redirect('/welcome/index');
    	}
    }

}