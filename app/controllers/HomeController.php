<?php

class HomeController {

    public function home() {
        $title = "Blog Personal - Pagina Principal";
        $content = "app/views/home.php";
        include 'app/views/layout.php';
    }

    public function inicio() {
        $title = "Mi Perfil";
        $content = "app/views/inicio.php";
        include 'app/views/layout.php';
    }

    public function lenguaje() {
        $title = "Mi Lenguaje Favorito";
        $content = "app/views/lenguaje.php";
        include 'app/views/layout.php';
    }

    public function contactar() {
        $title = "Contactar";
        $content = "app/views/contactar.php";
        $errors = [];
        $success = false;
        include 'app/views/layout.php';
    }

    public function contactarPost() {
        $errors = [];
        $success = false;

        $email = $_POST['email'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $dui = $_POST['dui'] ?? '';

        if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            $errors[] = 'El formato del correo electrónico no es valido';
        }

        // Formato teléfono El Salvador: ####-#### o +503 ####-####
        if (!preg_match('/^(\+503\s?)?\d{4}-?\d{4}$/', $telefono)) {
            $errors[] = 'El formato del telefono debe ser ####-#### o +503 ####-####';
        }

        if (!preg_match('/^\d{8}-\d{1}$/', $dui)) {
            $errors[] = 'El formato del DUI debe ser ########-#';
        }

        if (empty($errors)) {
            $success = true;
        }

        $title = "Contactar";
        $content = "app/views/contactar.php";
        include 'app/views/layout.php';
    }
}