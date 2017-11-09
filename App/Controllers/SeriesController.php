<?php namespace App\Controllers;

use Core\Controller;
use Core\View;

class SeriesController extends Controller
{
    public function index()
    {
        return "Index Page";
    }

    public function serie($slug)
    {
        return "Seies Page";
    }

    public function episode($slug , $id)
    {
        return View::render("series/episode",[
            'slug' =>$slug,
            'id' => $id
        ]);

        //return "Slug : {$slug} , id : {$id}";
    }
}