<?php
namespace Middlewares;

use Routes\Rest;

class AuthMid extends BaseMid implements Middleware
{
    function run(){
        if (!isset($_SESSION["usuario"])) {
            $rest=new Rest();
            $rest->redirect("login", "index");
        }
    }
}