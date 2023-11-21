<?php
namespace LuckyRomka\LaravelAdmin\Controllers;

use App\Http\Controllers\Controller;
use LuckyRomka\LaravelAdmin\Models\LaravelAdminPost;

class LaravelAdminController extends Controller{
    public function index(){
        $posts = LaravelAdminPost::get();
        return view('lradmin::index');
    }
}
