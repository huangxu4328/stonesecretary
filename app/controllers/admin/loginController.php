<?php

namespace app\controller\admin;
use Auth, BaseController, Form, Input, Redirect, Sentry, View;

class loginController extends BaseController {

	public function getLogin(){
		return View::make('admin.auth.login');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /admin/login/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}