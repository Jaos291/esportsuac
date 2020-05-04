<?php
/*function validate_login($email, $password){
  $resultado = $mysqli->query("SELECT * FROM `esportsuac_usuarios`  WHERE `usuarios_email` = '".$email."' AND `usuarios_password` = '".$password."' ");
  $usuarios = $resultado->fetch_all(MYSQLI_ASSOC);
  $cantidad = count($usuarios);
  return $cantidad;
}*/
class userClass
{
/* User Login */
public function userLogin($email,$password)
{
try{
$db = getDB();
$stmt = $db->prepare("SELECT usuarios_id FROM esportsuac_usuarios WHERE (usuarios_email=:email AND usuarios_password=:password)");
$password= sha1($password); //Password encryption
$stmt->bindParam("email", $email,PDO::PARAM_STR) ;
$stmt->bindParam("password", $password,PDO::PARAM_STR) ;
$stmt->execute();
$count=$stmt->rowCount();
$data=$stmt->fetch(PDO::FETCH_OBJ);
$db = null;
if($count == 1)
{
@$_SESSION['uid']=$data->uid; // Storing user session value
return true;
}
else
{
return false;
}
}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}

}

/* User Registration */
public function userRegistration($name,$apellido,$tipo_id,$id,$email,$password)
{
try{
$db = getDB();
$st = $db->prepare("SELECT usuarios_id FROM esportsuac_usuarios WHERE usuarios_email=:email");
$st->bindParam("email", $email,PDO::PARAM_STR);
$st->execute();
$count=$st->rowCount();
if($count<1)
{
$stmt = $db->prepare("INSERT INTO esportsuac_usuarios(usuarios_nombre,usuarios_apellidos,usuarios_tipo_id,usuarios_identificacion,usuarios_email,usuarios_password)
VALUES (:name,:apellido,:tipo_id,:id,:email,:hash_password)");
$stmt->bindParam("name", $name,PDO::PARAM_STR);
$hash_password= sha1($password); //Password encryption
$stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
$stmt->bindParam("apellido", $apellido,PDO::PARAM_STR);
$stmt->bindParam("tipo_id", $tipo_id,PDO::PARAM_STR);
$stmt->bindParam("id", $id,PDO::PARAM_STR);
$stmt->bindParam("email", $email,PDO::PARAM_STR);
$stmt->execute();
$uid=$db->lastInsertId(); // Last inserted row id
$db = null;
$_SESSION['uid']=$uid;
return true;
}
else
{
$db = null;
return false;
}

}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}
}
/* User Details */
}
 ?>
