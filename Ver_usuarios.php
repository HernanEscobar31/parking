<?php 
 include "dbconnect.php";
 include "Encabezado_b.php";
 session_start();
 
 

 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Parking Inteligente
</title>
<link rel="stylesheet" href="estilo_menu.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
<nav>

<style>
 
  </style>
<input type="checkbox" id="check">
<label for="check" class="checkbtn">
<i class="fas fa-bars"></i>
</label>
<a href="#" class="enlace">

</a>
<ul>
<li><a style="font-size: 15px"  href="inicio_adm.php">Inicio</a></li>
<li><a style="font-size: 15px" class="active" href="Ver_usuarios.php">Clientes</a></li>
<li><a style="font-size: 15px" href="Entradas.php">Entradas</a></li>
<li><a style="font-size: 15px" href="Salidas.php">Salidas</a></li>
<li><a style="font-size: 15px" href="Espacios.php">Espacios</a></li>
<li><a style="font-size: 15px" href="FormularioAgregar.php">Registrar usuario</a></li>
<li><a style="font-size: 15px " href="#">HOLA <?php echo $_SESSION['usuario_u']?></a>
					<ul>
						
						<li><a style="font-size: 15px"href="cerrar_sesion.php">Cerrar Sesion</a></li>
						
					</ul>
				</li>



</ul>
</nav>
<p>
</p>
<style>

</style>
</body>
</html>
 
  <p>
  <p>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Puesto</th>
      <th scope="col">Rol de usuario</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Fotografia</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
 


<?php 


$imprime_tabla= "SELECT * FROM usuarios";
$resultado_impresion= mysqli_query($miConexion, $imprime_tabla);
 
while($fila = mysqli_fetch_array($resultado_impresion)){
  
  echo "<tr>"
  ."<td>".$fila['id_u']."</td>"
  ."<td>" .$fila['nombre_u']."</td>"
  ."<td>".$fila['apellido_u']."</td>"
  ."<td>".$fila['domicilio_u']."</td>"
  ."<td>".$fila['puesto_u']."</td>"
  ."<td>".$fila['rol_u']."</td>"
  ."<td>".$fila['usuario_u']."</td>"
  ."<td>".$fila['password_u']."</td>"
  ."<td><img src=".$fila['foto_u']." width=100 heigth=120></td>"

."<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop".$fila['id_u']."'>
  Eliminar
</button>

<!-- Modal -->
<div class='modal fade' id='staticBackdrop".$fila['id_u']."' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='staticBackdropLabel'>Eliminar registro</h5>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
       ¿Desea realmente eliminar este registro?
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>No eliminar</button>
        <a class='btn btn-primary' href='Eliminar.php?id=".$fila['id_u']."' role='button' >Si, eliminar registro</a>
      </div>
    </div>
  </div>
</div><a href='Modificar.php?id=".$fila['id_u']."'>Modificar</a></p></td></tr>";
}
mysqli_close($miConexion);

?>
</tbody>
 </table>

<?php

include "pie_b.php";
 
?>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



