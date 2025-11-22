<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <TITle>
            Lista de Usuarios
        </TITle>        
    </head>
    <body>
        <h1> Usuarios Registrasdos</h1>
        <table border="1">
            <tr><th>ID</th><th>Nombre</th><th>Correo</th></tr>
            <?php while($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?= $fila['id'] ?></td>
                    <td><?= $fila['nombre'] ?></td>
                    <td><?= $fila['correo'] ?></td>
                </tr>
            <?php endwhile; ?>            
        </table>        
    </body>
</html>