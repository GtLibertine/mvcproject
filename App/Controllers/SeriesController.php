<?php namespace App\Controllers;

class SeriesController
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
      //  var_dump($_GET);return "Slug : {$slug} , id : {$id}";
    }
}