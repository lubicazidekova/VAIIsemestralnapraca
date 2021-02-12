<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PagesController extends Controller
{
    public function tips(){
        return view('tips');
    }

    public function podujatia(){

    }

    public function about(){
         return 'About page';

    }
    public function articles(){
        }

    public function discussion(){
        return 'Discussion page';
    }

}
