<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

/* php artisan make:controller Api/V1/PostController --api --model=Post crea el controlador con los metodos de la api y lo relaciona con el modelo Post */

class PostController extends Controller
{
    public function index(){
        return view('index',[
            'posts'=>Post::latest()->paginate()
        ]);
    }
}
