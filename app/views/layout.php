<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <header>
        <h1>El Blog de German</h1>
        <nav>
            <ul>
                <li><a href="/home">Inicio</a></li>
                <li><a href="/inicio">Mi Perfil</a></li>
                <li><a href="/lenguaje">Mi Lenguaje Favorito</a></li>
                <li><a href="/contactar">Contactar</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php include $content; ?>
    </main>

    <footer>
        <p>&copy; 2024 El Blog de German</p>
    </footer>
</body>
</html>