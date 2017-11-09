<?php namespace App\Controllers;

use Core\Controller;

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

        return "Slug : {$slug} , id : {$id}";
    }
}