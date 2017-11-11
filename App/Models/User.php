<?php namespace App\Models;

use Core\Model;
use PDO;

class User extends Model
{

    protected $table = 'users';

 /*   protected $tableName = 'users';

    public function findUser($id){

        $stmt = $this->pdo->prepare("select * from {$this->tableName} where id=:id");
        $stmt->bindParam("id",$id,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ );
    }*/

}