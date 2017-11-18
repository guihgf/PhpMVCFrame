<?php
    namespace Controllers;
        use Repositories\UsuarioRepository;
        use Routes\Rest;


    class UsuarioController extends Rest {
        function __construct(){

			$this->middleware("auth")->only('encerrar_sessao');
        }

		/**
		 * @GET
		 */
		function index(){
            $repo=new UsuarioRepository();
            var_dump($repo->listar());
        }

    }



    
        
