<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/11
 * Time: 19:58
 */

namespace App\Controllers;


use Blankphp\Request\Request;

class PagesController extends Controller
{
    public function index(){
        echo "123";
    }

    public function indx(){
        echo "a1sda5w1";
    }

    public function get(){
        echo "a1sda5w1";
    }

    public function getone($id){
        echo "a1sda5w".$id;
    }

}