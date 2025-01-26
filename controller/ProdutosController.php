<?php 

    class ProdutosController {

        public function __construct() {}

        public function index() {
            header("Location: ./view/produtos/Mostrar_tudo.php");
        }

        public function create() {
            header("Location: ./view/produtos/Novo.php");
        }

        public function show($id) {
            header("Location: ./view/produtos/Mostrar_registro.php");
        }

        public function edit($id) {
            header("Location: ./view/produtos/Editar.php");
        }
    }

?>