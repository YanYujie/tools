<?php
/**
 * Created by PhpStorm.
 * User: Yujie
 * Date: 2018/7/5
 * Time: 11:58
 */
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UsersController extends BaseController{
    public function index(){
        echo "user-index";
    }
}