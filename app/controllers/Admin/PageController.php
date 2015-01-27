<?php
/**
 * Created by PhpStorm.
 * User: weaponhsu
 * Date: 15-1-27
 * Time: 下午11:02
 */
namespace App\Controllers\Admin;

use Category;
use Auth, BaseController, View, Form, Input, Redirect, Sentry, Notification, URL;

class PageController extends AuthController{
    public function index($id){
        echo phpinfo();
        exit;
        echo 'PageController-index';

    }

    public function edit(){

    }

    public function add(){

    }

    public function delete(){

    }

    public function orderlist(){

    }
}