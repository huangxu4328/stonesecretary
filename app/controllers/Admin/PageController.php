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
        $categoryRes = Category::where('user_id', '=', '1')->where('parent', '=', '0', 'or')->orderBy('id','asc')->get();
        foreach($categoryRes as $val){
            var_dump($val->id);
        }
        $category = $this->leftMenu($categoryRes);
        return View::make('admin.pages.index')
            ->with('category', $category['category'])
            ->with('subCategory', $category['subCategory']);
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