<?php
/**
 * Created by PhpStorm.
 * User: guihgf
 * Date: 11/04/2017
 * Time: 19:07
 */

namespace Repositories;


class UsuarioRepository extends  DB
{
    private $conn;

    function __construct()
    {
        $this->conn = $this->init();
    }

    function __destruct()
    {
        $this->conn = null;
    }

    function listar(){
        $sql=$this->conn->prepare("select * from usuarios");
        $sql->execute();
        return $sql->fetchAll(\PDO::FETCH_ASSOC);
    }
}