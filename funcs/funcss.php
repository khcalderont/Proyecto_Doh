<?php 

	function isNull($txtnome, $txtnomce,$txtpape,$txtsape,$txttele,$txtdep,$txtciud,$txtdirec,$txtcodp,$fileced,$filecamc,$emaile,$txtpass1,$txtpass2,$activo,$tipusu,$pais)
	{
		if(strlen(trim($txtnome)) < 1 || strlen(trim($txtnomce)) < 1 || strlen(trim($txttele)) < 1 || strlen(trim($txtpape)) < 1 || strlen(trim($txtsape)) < 1 || strlen(trim($txttele)) < 1 ||
		   strlen(trim($txtdep)) < 1 || strlen(trim($txtciud)) < 1 || strlen(trim($txtdirec)) < 1 || strlen(trim($txtcodp)) < 1 || strlen(trim($fileced)) < 1 || strlen(trim($filecamc)) < 1 || 
		   strlen(trim($emaile)) < 1 || strlen(trim($txtpass1)) < 1 || strlen(trim($txtpass2)) < 1 || strlen(trim($tipusu)) < 1 || strlen(trim($pais)) < 1)
		{
			return true;
		} else
		{
			return false;
		}
	}

	function isEmail($emaile)
	{
		if(filter_var($emaile, FILTER_VALIDATE_EMAIL))
		{
			return true;
		} else
		{
			return false;
		}
	}

	function ValidarPassword($txtpass1, $txtpass2)
	{
		if(strcmp($txtpass1, $txtpass2) !==0)
		{
			return false;
		} else
		{
			return true;
		}
	}
/*
	function EmpresaExiste($txtnome)
	{
		global $base;
		
		$sqlb = "SELECT id_empresa FROM reg_empresa WHERE nombreEmp = ?";
		$resultado=$base->prepare($sqlb);
 		$resultado->execute(array($txtnome));
  		$contador=$resultado->rowCount();

		
		
		if ($contador > 0 ){
			return true;
			} else {
			return false;
		}
	}
*/
	function emailExiste($emaile)
	{
		global $base;
		
		$sqlb = "SELECT id_empresa FROM reg_empresa WHERE correoEmp = ? ";
		$resultado=$base->prepare($sqlb);
 		$resultado->execute(array($emaile));
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
	
	function hashPassword($txtpass1) 
	{
		$hash = password_hash($txtpass1, PASSWORD_DEFAULT);
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

	function registraEmpresa($txtnome, $txtnomce,$txtpape,$txtsape,$txttele,$txtdep,$txtciud,$txtdirec,$txtcodp,$fileced,$filecamc,$emaile,$pass_hash,$activo,$tipusu,$pais){
		
		global $base;


		$sql="INSERT INTO reg_empresa (`id_empresa`, `nombreEmp`, `nombre_contactoEmp`, `priApellido_contactoEmp`, `segApellido_contactoEmp`, `telefonoEmp`, `departamentoEmp`, `ciudadEmp`, 
		`direccionEmp`, `codigo_postalEmp`, `documento_cedulaEmp`, `documento_camara_comercioEmp`, `correoEmp`, `claveEmp`, `activacion_cuentaEmp`, `fk_tipoUsuarioEmp`, `fk_nacionalidadEmp`)

			VALUES ('', :txtnome, :txtnomce, :txtpape, :txtsape, :txttele, :txtdep, :txtciud, :txtdirec, :txtcodp, :fileced, :filecamc, :emaile, :pass_hash, :activo, :tipusu, :pais)";

	$resultado=$base->prepare($sql);

	$resultado->execute(array(":txtnome"=>$txtnome, ":txtnomce"=>$txtnomce,":txtpape"=>$txtpape, ":txtsape"=>$txtsape, ":txttele"=>$txttele, ":txtdep"=>$txtdep,":txtciud"=>$txtciud, 
	":txtdirec"=>$txtdirec, ":txtcodp"=>$txtcodp, ":fileced"=>$fileced,":filecamc"=>$filecamc, ":emaile"=>$emaile, ":pass_hash"=>$pass_hash, ":activo"=>$activo, ":tipusu"=>$tipusu, 
	":pais"=>$pais));
		?>
  			<script language="javascript">window.alert("Registro Relalizado con éxito");window.location='Login.php'</script>

<?php

	}



 ?>