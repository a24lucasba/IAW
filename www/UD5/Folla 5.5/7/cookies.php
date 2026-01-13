<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Todo sobre las Cookies</title>
    <?php
        if(!empty($_COOKIE['modo'])){
            $modo = $_COOKIE['modo'];
        }else{
            $modo = 'light';
        }
        echo "<link rel='stylesheet' href='$modo.css' id='theme-link'>"
    ?>
</head>
<body>
    <header>
        <h1>🍪 Las Cookies en la Web</h1>
        <form method='get' action='cambio.php'>
            <input type='submit' name='dark' value='Dark mode'>
            <input type='submit' name='light' value='Light mode'>
        </form>
    </header>

    <main>
        <section class='intro'>
            <h2>¿Qué son las cookies?</h2>
            <p>Las cookies son pequeños archivos de texto que los sitios web guardan en tu navegador. Permiten que los sitios recuerden información sobre tu visita, como tus preferencias o datos de sesión.</p>
        </section>

        <section class='tipos'>
            <h2>Tipos de cookies</h2>
            <div class='card'>
                <h3>Cookies de sesión</h3>
                <p>Se eliminan cuando cierras el navegador. Se usan para mantener tu sesión activa mientras navegas.</p>
            </div>
            <div class='card'>
                <h3>Cookies persistentes</h3>
                <p>Permanecen en tu dispositivo durante un tiempo determinado. Guardan preferencias como el idioma o el tema.</p>
            </div>
            <div class='card'>
                <h3>Cookies de terceros</h3>
                <p>Creadas por dominios externos. Normalmente se usan para publicidad y análisis.</p>
            </div>
        </section>

        <section class='funciones'>
            <h2>¿Para qué se utilizan?</h2>
            <ul>
                <li>Mantener sesiones de usuario iniciadas</li>
                <li>Recordar preferencias y configuraciones</li>
                <li>Personalizar contenido y anuncios</li>
                <li>Analizar el tráfico y comportamiento del usuario</li>
                <li>Mejorar la seguridad del sitio web</li>
            </ul>
        </section>

        <section class='privacidad'>
            <h2>Privacidad y seguridad</h2>
            <p>Las cookies no son virus ni programas maliciosos. Sin embargo, es importante:</p>
            <ul>
                <li>Revisar las políticas de cookies de los sitios web</li>
                <li>Gestionar qué cookies aceptas</li>
                <li>Limpiar cookies periódicamente</li>
                <li>Usar navegación privada cuando sea necesario</li>
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Información sobre Cookies Web</p>
    </footer>
</body>
</html>
"
