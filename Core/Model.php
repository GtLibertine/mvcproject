<?php namespace Core;
use \Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
/*    protected $pdo;
    protected $tableName = null;

        public function __construct()
        {
            $this->pdo = $this->make();
            $this->checkTable();

        }

    protected function make(){
        try {
            return new \PDO("mysql:host=localhost;dbname=mvcproject" , "root" , "");
        } catch (\PDOException $e) {
            throw $e;
        }
    }

    public function selectAll(){

       if(is_null($this->tableName)){
           throw new \Exception("TableName Not Exist");
       }


        $stmt = $this->pdo->prepare("SELECT * FROM {$this->tableName}");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    protected function checkTable()
    {
        $stmt = $this->pdo->prepare("SHOW TABLES LIKE '{$this->tableName}'");
        $stmt->execute();
        if($stmt->fetch() == false)
            throw new \Exception("{$this->tableName} table not exists");
    }*/


}