<?php 

    class ServicosController {

        public function __construct() {}

        public function index() {
            header("Location: ./view/servicos/Mostrar_tudo.php");
        }

        public function create() {
            header("Location: ./view/servicos/Novo.php");
        }

        public function show($id) {
            header("Location: ./view/servicos/Mostrar_registro.php");
        }

        public function edit($id) {
            header("Location: ./view/servicos/Editar.php");
        }
    }

?>