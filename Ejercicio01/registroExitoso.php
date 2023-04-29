<!DOCTYPE html>
<html>
<head>
	<title>Mostrar Datos</title>
</head>
<style>
	body {
    font-family: Arial, sans-serif;
    font-size: 16px;
}

	h2 {
    color: #4CAF50;
}

	p {
    margin-bottom: 10px;
}

	strong {
    font-weight: bold;
}

.container {
    border: 1px solid #ccc;
    padding: 20px;
    max-width: 500px;
    margin: 0 auto;
}
</style>
<body>
<div class="container">
        <h2>Datos del usuario registrado</h2>
        <?php
            $nombre = $_POST["nombre"];
            $email = $_POST["email"];

            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Correo electrónico:</strong> $email</p>";
        ?>
    </div>
</body>
</html>