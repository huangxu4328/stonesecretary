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

    class CategoryController extends AuthController {

        public function index(){
            $categoryRes = Category::where('user_id', '=', '1')->where('parent', '=', '0', 'or')->orderBy('id','asc')->get();
            $category = $this->leftMenu($categoryRes);

            return View::make('admin.category.index')->with('category', $category['category'])->with('subCategory', $category['subCategory']);
        }
    }