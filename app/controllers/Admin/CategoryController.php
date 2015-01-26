<?php
/**
 * Created by PhpStorm.
 * User: weaponhsu
 * Date: 15-1-24
 * Time: 下午9:51
 */
    namespace App\Controllers\Admin;

    use Category;
    use Auth, BaseController, View, Form, Input, Redirect, Sentry, Notification, URL;

    class CategoryController extends BaseController {

        public function index(){
//            var_dump(Category::all());
//            exit;
            return View::make('admin.category.index')->with('category', Category::all());
        }

        public function test(){
            echo 'test';
//            return View::make('admin.pages.index')->with('category', Category::all());
        }
    }