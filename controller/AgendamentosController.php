<?php 

    class AgendamentosController {

        public function __construct() {}

        public function index() {
            header("Location: ./view/agendamentos/Mostrar_tudo.php");
        }

        public function create() {
            header("Location: ./view/agendamentos/Novo.php");
        }

        public function show($id) {
            header("Location: ./view/agendamentos/Mostrar_registro.php");
        }

        public function edit($id) {
            header("Location: ./view/agendamentos/Editar.php");
        }
    }

?>