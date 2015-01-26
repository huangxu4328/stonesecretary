<?php

namespace App\Controllers\Admin;

use Auth, BaseController, Form, Input, Redirect, Sentry, View;

class AuthController extends BaseController {

	/**
	 * 显示登录页面
	 * @return View
	 */
	public function getLogin()
	{
		Form::macro('inputEmail',function(){
			return '<input type="text" class="text-input" name="email"/>';
		});
		Form::macro('inputPwd', function(){
			return '<input type="password" class="text-input" name="password" />';
		});
//		Form::macro('inputSub', function(){
//			return '<input type="submit" class="button"/>';
//		});
		return View::make('admin.auth.login');
	}

	/**
	 * POST 登录验证
	 * @return Redirect
	 */
	public function postLogin()
	{
		$credentials = array(
			'email'    => Input::get('email'),
			'password' => Input::get('password')
		);

		try
		{
			$user = Sentry::authenticate($credentials, false);

			if ($user)
			{
				return Redirect::route('admin.category.index');
			}
		}
		catch(\Exception $e)
		{
			return Redirect::route('admin.login')->withErrors(array('login' => $e->getMessage()));
		}
	}

	/**
	 * 注销
	 * @return Redirect
	 */
	public function getLogout()
	{
		Sentry::logout();

		return Redirect::route('admin.login');
	}

	public function test(){
//		var_dump($_POST);
		echo phpinfo();
	}

}