<?php namespace App\Controllers\Admin;

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
        return "Episode Page";
    }
}