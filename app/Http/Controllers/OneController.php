<?php
namespace App\Http\Controllers;

class OneController extends Controller
{
    public function __invoke(){
        return '单行为控制器！';
    }
}
