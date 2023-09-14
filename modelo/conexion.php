<?php 


class Conexion{


    static public function conectar(){


        $link = new PDO("mysql:host=localhost;port=33066; dbname=adminltmvc1","root","");

        $link->exec("set names utf8mb4");

        return $link;

    }

    




}





?>