<?php namespace App\Controllers;


use App\Models\Article;
use App\Models\User;

class HomeController
{
   public function index()
   {
       var_dump(User::all());
    /*   $user = new User();
       $article = new Article();
         print_r($article->selectAll());
       print_r($user->selectAll());
       print_r($user->findUser(1));*/

   }

}