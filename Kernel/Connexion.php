<?php 

namespace kernel;
use \Config\Db;
class Connexion{
    private static $pdo;

    private function __construct(){
        return ;
    }

    public static function get(){
        $dns = "mysql:host=". Db::HOST .";dbname=".DB::NAME;
        $username = DB::USERNAME;
        $password = DB::PASSWORD;

        if(!isset(self::$pdo)){
            try {
                self::$pdo = new \PDO($dns,$username,$password);
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
                echo "connextion reussie";
            } catch (\PDOExeption $e) {
                echo "erreur de connextion :".$e.getMessage();
            }
        }
        return self::$pdo;
    }
}
