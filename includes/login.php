<?php
if(isset($_POST['login'])){
	$DB->query("SELECT id,Email,Clave,nivel from cuentas WHERE Email = '".$DB->make_value_safe($_POST['email'])."'", 1);
	if($DB->get_num_records(1) == 1){
		$field = $DB->get_field_data(1);
		if($field['Clave'] == md5($_POST['password']."systemMS")){
			$_SESSION["idCuenta"] = $field['id']; /// / Este es el numero sagrado. : D
			$_SESSION["nivel"] = $field['nivel']; // S�, //necesitamos esta prueba si usted es un moderador de //administraci�n, o un usuario normal ...
	
$_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s");


			if($_SESSION["registraface"]=="no"){
				
$DB->query("SELECT id from redessociales where idcuenta=".$_SESSION["idCuenta"], 1);
		if($DB->get_num_records(1) == 0){
				$DB->query("insert into redessociales(id,idcuenta,Suser,Stimezone,Snombre,Semail,Sfechanac,Slugar,Ssexo,Stipo,Estado) values (".$_SESSION["facebooklogin"].",".$_SESSION['idCuenta'].",'".$_SESSION["faceusername"]."','".$_SESSION["facetimezone"]."','".$_SESSION["facename"]."','".$_SESSION["faceemail"]."','".$_SESSION["facefechanac"]."','".$_SESSION["facelugar"]."','".$_SESSION["facesexo"]."','facebook',1)", 1);
					$_SESSION["registraface"]="si";
				echo "
			<script language='JavaScript' type='text/javascript'> 
			alert('Ha registrado su cuenta de facebook con su cuenta')
			var pagina='?'
			function redireccionar() 
			{
			location.href=pagina
			} 
			redireccionar();
			
			</script>";	
			exit;
		}else{
			echo "
			<script language='JavaScript' type='text/javascript'> 
			alert('No se puede unir su cuenta de facebook con esta cuenta , porque ya ha sido unido anteriormente con otra cuenta')
			var pagina='?'
			function redireccionar() 
			{
			location.href=pagina
			} 
			redireccionar();
			
			</script>";	
			exit;
		}			

				
			}





header ("Location: ".$preurl."index.php");
		} else {
					echo "<script language='JavaScript'> alert('La Clave ingresada no es la correcta , intentelo denuevo! '); </script>";

			
		}
	} else {
		echo "<script language='JavaScript'> alert('Lo sentimos, el nombre de usuario ".$DB->make_value_safe($_POST['email'])." no existe!! '); </script>";
		
		
	}
}
?>
