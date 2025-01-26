<?php 

    class ComprasController {

        public function __construct() {}

        public function index() {
            header("Location: ./view/compras/Mostrar_tudo.php");
        }

        public function create() {
            header("Location: ./view/compras/Novo.php");
        }

        public function show($id) {
            header("Location: ./view/compras/Mostrar_registro.php");
        }

        public function edit($id) {
            header("Location: ./view/compras/Editar.php");
        }
    }

?>