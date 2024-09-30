<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Aplicación de Fotos</title>
</head>
<body>
    
    <h1>Galeria de fotos</h1>
    <h1>ISAAC NEWTON </h1>
    <div class="container">
        <div class="welcome">
            <img src="img/isaacnewton.jpg" alt="Isaac Newton">
            <button class="btn" onclick="showLogin()">Ingresar</button>
        </div>

        <div class="login" style="display:none;">
            <h2>Login</h2>
            <input type="text" placeholder="Usuario">
            <input type="password" placeholder="Contraseña">
            <button class="btn" onclick="showUpload()">Ingresar</button>
        </div>

        <div class="upload" style="display:none;">
            <h2>Sube tu foto</h2>
            <input type="file">
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="Grado">
            <input type="text" placeholder="Sección">
            <input type="date">
            <textarea placeholder="Descripción"></textarea>
            <button class="btn">Subir foto</button>

            <div class="photo-preview">
                <img src="img/WA.jpg" alt="Foto Subida" style="display:none;">
                <div class="icons">
                    <button>👍 Like</button>
                    <button>💬 Comentario</button>
                    <button>🗑️ Borrar</button>                                                                                                             
                </div>
            </div>

            <button class="btn" onclick="logout()">Salir</button>
        </div>
    </div>

    <script src="scrp/jr.js"></script>
</body>
</html>
                             
