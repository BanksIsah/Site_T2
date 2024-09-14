<?php
class BD{
    const dsn = "pgsql:dbname=Trab_N2;host=localhost"; //driver; banco; local
    const db_user = "postgres";
    const db_password = "postgres";


    public static function conectar(){
        try{
            $conexao = new PDO(BD::dsn, BD::db_user, BD::db_password, //Abrir conexão  
            [PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]); //Trata o erro como se fosse um erro do PHP

            return $conexao;
          }catch(Exception $e){
              echo'Deu erro: '.$e->getMessage();
              return null;
          }
    }
}