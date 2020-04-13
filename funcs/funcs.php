

<?php
	
	function isNull($nombre, $papellido, $sapellido, $tipo, $numerodoc, $pais, $indicativo, $departamento, $ciudad, $direccion, $telefono, $email, $pass1, $pass2){
		if(strlen(trim($nombre)) < 1 || strlen(trim($papellido)) < 1 || strlen(trim($sapellido)) < 1 || strlen(trim($tipo)) < 1 || strlen(trim($numerodoc)) < 1|| strlen(trim($pais)) < 1|| strlen(trim($indicativo)) < 1|| strlen(trim($departamento)) < 1|| strlen(trim($ciudad)) < 1|| strlen(trim($direccion)) < 1|| strlen(trim($telefono)) < 1|| strlen(trim($email)) < 1|| strlen(trim($pass1)) < 1|| strlen(trim($pass2)) < 1)
		{
			return true;
			} else {
			return false;
		}		
	}
	
	function isEmail($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)){
			return true;
			} else {
			return false;
		}
	}
	
	function validaPassword($pass1, $pass2)
	{
		if (strcmp($pass1, $pass2) !== 0){
			return false;
			} else {
			return true;
		}
	}
	
	
	function minMax($min, $max, $valor){
		if(strlen(trim($valor)) < $min)
		{
			return true;
		}
		else if(strlen(trim($valor)) > $max)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	


		
	function usuarioExiste($numerodoc)
	{
		global $base;
		
		$sqlb = "SELECT id_usuario FROM reg_usuario WHERE num_documentoUsu = ?";
		$resultado=$base->prepare($sqlb);
 		$resultado->execute(array($numerodoc));
  		$contador=$resultado->rowCount();

		
		
		if ($contador > 0 ){
			return true;
			} else {
			return false;
		}
	}

	function emailExiste($email)
	{
		global $base;
		
		$sqlb = "SELECT id_usuario FROM reg_usuario WHERE correoUsu = ? ";
		$resultado=$base->prepare($sqlb);
 		$resultado->execute(array($email));
  		$contador=$resultado->rowCount();
		
		
		if ($contador > 0){
			return true;
			} else {
			return false;
		}
	}



	
		
	function generateToken()
	{
		$gen = md5(uniqid(mt_rand(), false));	
		return $gen;
	}
	
	function hashPassword($pass1) 
	{
		$hash = password_hash($pass1, PASSWORD_DEFAULT);
		return $hash;
	}
	
	function resultBlock($errors){
		if(count($errors) > 0)
		{
			echo "<div id='error' class='alert alert-danger' role='alert'>
			<a href='#' onclick=\"showHide('error');\">[X]</a>
			<ul>";
			foreach($errors as $error)
			{
				echo "<li>".$error."</li>";
			}
			echo "</ul>";
			echo "</div>";
		}
	}
	
	function registraUsuario($nombre, $papellido, $sapellido, $telefono, $departamento, $ciudad, $direccion, $indicativo, $tipo, $numerodoc, $email, $pass_hash, $activo, $token, $tipo_usuario, $pais ){
		
		global $base;


		$sql="INSERT INTO `reg_usuario`(`id_usuario`, `nombreUsu`, `priApellidoUsu`, `segApellidoUsu`, `telefonoUsu`, `departamentoUsu`, `ciudadUsu`, `direccionUsu`, `codigo_postalUsu`, `tipo_documentoUsu`, `num_documentoUsu`, `correoUsu`, `claveUsu`, `activacion_cuentaUsu`, `tokenUsu`,  `fk_tipoUsuarioEmp`, `fk_nacionalidadEmp`)  VALUES ('', :nombre, :papellido, :sapellido, :telefono, :departamento, :ciudad, :direccion, :indicativo, :tipo, :numerodoc, :email, :pass_hash, :activo, :token, :tipo_usuario, :pais)";
    $resultado=$base->prepare($sql);
    $resultado->execute(array(":nombre"=>$nombre, ":papellido"=>$papellido,":sapellido"=>$sapellido, ":telefono"=>$telefono, ":departamento"=>$departamento, ":ciudad"=>$ciudad,":direccion"=>$direccion, ":indicativo"=>$indicativo, ":tipo"=>$tipo, ":numerodoc"=>$numerodoc,":email"=>$email, ":pass_hash"=>$pass_hash, ":activo"=>$activo,":token"=>$token,":tipo_usuario"=>$tipo_usuario, ":pais"=>$pais));
    
    		
		?>
  <script language="javascript">window.alert("Registro Relalizado con éxito");window.location='Login.php'</script>

<?php

	}
	

	
	function validaIdToken($id, $token){
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT activacion FROM usuarios WHERE id = ? AND token = ? LIMIT 1");
		$stmt->bind_param("is", $id, $token);
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;
		
		if($rows > 0) {
			$stmt->bind_result($activacion);
			$stmt->fetch();
			
			if($activacion == 1){
				$msg = "La cuenta ya se activo anteriormente.";
				} else {
				if(activarUsuario($id)){
					$msg = 'Cuenta activada.';
					} else {
					$msg = 'Error al Activar Cuenta';
				}
			}
			} else {
			$msg = 'No existe el registro para activar.';
		}
		return $msg;
	}
	
	function activarUsuario($id)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE usuarios SET activacion=1 WHERE id = ?");
		$stmt->bind_param('s', $id);
		$result = $stmt->execute();
		$stmt->close();
		return $result;
	}
	
	function isNullLogin($usuario, $password){
		if(strlen(trim($usuario)) < 1 || strlen(trim($password)) < 1)
		{
			return true;
		}
		else
		{
			return false;
		}		
	}
	
	function login($usuario, $password)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT id, id_tipo, password FROM usuarios WHERE usuario = ? || correo = ? LIMIT 1");
		$stmt->bind_param("ss", $usuario, $usuario);
		$stmt->execute();
		$stmt->store_result();
		$rows = $stmt->num_rows;
		
		if($rows > 0) {
			
			if(isActivo($usuario)){
				
				$stmt->bind_result($id, $id_tipo, $passwd);
				$stmt->fetch();
				
				$validaPassw = password_verify($password, $passwd);
				
				if($validaPassw){
					
					lastSession($id);
					$_SESSION['id_usuario'] = $id;
					$_SESSION['tipo_usuario'] = $id_tipo;
					
					header("location: welcome.php");
					} else {
					
					$errors = "La contrase&ntilde;a es incorrecta";
				}
				} else {
				$errors = 'El usuario no esta activo';
			}
			} else {
			$errors = "El nombre de usuario o correo electr&oacute;nico no existe";
		}
		return $errors;
	}
	
	function lastSession($id)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE usuarios SET last_session=NOW(), token_password='', password_request=1 WHERE id = ?");
		$stmt->bind_param('s', $id);
		$stmt->execute();
		$stmt->close();
	}
	
	function isActivo($usuario)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT activacion FROM usuarios WHERE usuario = ? || correo = ? LIMIT 1");
		$stmt->bind_param('ss', $usuario, $usuario);
		$stmt->execute();
		$stmt->bind_result($activacion);
		$stmt->fetch();
		
		if ($activacion == 1)
		{
			return true;
		}
		else
		{
			return false;	
		}
	}	
	
	function generaTokenPass($user_id)
	{
		global $mysqli;
		
		$token = generateToken();
		
		$stmt = $mysqli->prepare("UPDATE usuarios SET token_password=?, password_request=1 WHERE id = ?");
		$stmt->bind_param('ss', $token, $user_id);
		$stmt->execute();
		$stmt->close();
		
		return $token;
	}
	
	function getValor($campo, $campoWhere, $valor)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT $campo FROM usuarios WHERE $campoWhere = ? LIMIT 1");
		$stmt->bind_param('s', $valor);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0)
		{
			$stmt->bind_result($_campo);
			$stmt->fetch();
			return $_campo;
		}
		else
		{
			return null;	
		}
	}
	
	function getPasswordRequest($id)
	{
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT password_request FROM usuarios WHERE id = ?");
		$stmt->bind_param('i', $id);
		$stmt->execute();
		$stmt->bind_result($_id);
		$stmt->fetch();
		
		if ($_id == 1)
		{
			return true;
		}
		else
		{
			return null;	
		}
	}
	
	function verificaTokenPass($user_id, $token){
		
		global $mysqli;
		
		$stmt = $mysqli->prepare("SELECT activacion FROM usuarios WHERE id = ? AND token_password = ? AND password_request = 1 LIMIT 1");
		$stmt->bind_param('is', $user_id, $token);
		$stmt->execute();
		$stmt->store_result();
		$num = $stmt->num_rows;
		
		if ($num > 0)
		{
			$stmt->bind_result($activacion);
			$stmt->fetch();
			if($activacion == 1)
			{
				return true;
			}
			else 
			{
				return false;
			}
		}
		else
		{
			return false;	
		}
	}
	
	function cambiaPassword($password, $user_id, $token){
		
		global $mysqli;
		
		$stmt = $mysqli->prepare("UPDATE usuarios SET password = ?, token_password='', password_request=0 WHERE id = ? AND token_password = ?");
		$stmt->bind_param('sis', $password, $user_id, $token);
		
		if($stmt->execute()){
			return true;
			} else {
			return false;		
		}
	}		