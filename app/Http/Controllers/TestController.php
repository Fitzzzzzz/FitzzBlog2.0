<?php
/**
 * Created by PhpStorm.
 * User: Fitzz
 * Date: 2017/7/21
 * Time: 下午8:41
 */
namespace App\Http\Controllers;

class TestController extends Controller {
    public function sayHello($name) {
        return 'Hello laravel from controller ' . $name;
    }
    public function showView() {
        return view('test');
    }
}
