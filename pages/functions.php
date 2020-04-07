<?php
function validate_login($email, $password){
  $resultado = $mysqli->query("SELECT * FROM `esportsuac_usuarios`  WHERE `usuarios_email` = '".$email."' AND `usuarios_password` = '".$password."' ");
  $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
  $cantidad = count($usuarios);
  return $cantidad;
}
 ?>
