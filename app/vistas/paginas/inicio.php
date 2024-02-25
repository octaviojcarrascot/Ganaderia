<?php require_once RUTA_APP.'/vistas/inc/hearder.php'; ?>
<br>

<table class="table">
  <thead class="table-dark">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Opsiones</th>
        
    </tr>
  </thead>
  <tbody>
    <?php foreach($datos['usuarios'] as $usuario):?>
    <tr>
        <td><?php echo $usuario->id_usuario; ?></td>
        <td><?php echo $usuario->nombreusuario;?></td>
        <td><?php echo $usuario->apellidousuario; ?></td>
        <td><?php echo $usuario->usuario; ?></td>
        <td><a href = "<?php echo RUTA_URL; ?>paginas/editar/<?php echo $usuario->id_usuario; ?>">editar</a></td>
        <td><a href = "<?php echo RUTA_URL; ?>paginas/eliminar/<?php echo $usuario->id_usuario; ?>">Eliminar</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<?php require_once RUTA_APP.'/vistas/inc/footer.php';?>
