<?php 

    class ClientesController {

        public function __construct() {}

        public function index() {
            header("Location: ./view/clientes/Mostrar_tudo.php");
        }

        public function create() {
            header("Location: ./view/clientes/Novo.php");
        }

        public function show($id) {
            header("Location: ./view/clientes/Mostrar_registro.php");
        }

        public function edit($id) {
            header("Location: ./view/clientes/Editar.php");
        }
    }

?>