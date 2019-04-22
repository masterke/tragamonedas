<?php 
$alerta="";
require("funciones/isLogin.php");
require("funciones/isAdmin.php");
if($_SESSION["user_id"]!=1){
		$alerta= "<script language='JavaScript'> alert('Acceso No Autorizado! Solo ingresa el Programador del Sistema'); </script><script language='JavaScript' type='text/javascript'> 
var pagina='?'
function redireccionar() 
{
location.href=pagina
} 
redireccionar();

</script>";
	
}else{
			if ( ( !isset( $_SERVER["PHP_AUTH_USER"] )) ||
		 		(!isset($_SERVER["PHP_AUTH_PW"])) || 
		 		( $_SERVER["PHP_AUTH_USER"] != 'admin' ) || 
		 		( $_SERVER["PHP_AUTH_PW"] != 'admin' ) ) 
		 	{
		 	  header( 'WWW-Authenticate: Basic realm="ACCESO NO AUTORIZADO"' );	  
		 	  header( 'HTTP/1.0 401 Unauthorized' );
			echo "!!!! ACCESO NO AUTORIZADO !!!!";	  
		 	  exit;
		 	}
		 	else
		 	{
				if(isset($_POST['btnGuardar'])){
						$DB->query("update sistema set NombreSistema='".$_POST['txtNombreSistema']."', Version='".$_POST['txtVersion']."', DatosProveedor='".$_POST['txtDatosProveedor']."'", 1);
							$alerta= "<script language='JavaScript'> alert('Datos Guardados,Actualize Pagina Para Ver Cambios'); </script>";
									
						
						$nameimagen = "logo.png";
						$sizeclan = $_FILES['imagenweb']['size'];
						$tmpimagen = $_FILES['imagenweb']['tmp_name'];
						$extimagen = pathinfo($nameimagen);
					
						$urlnueva = "template/images/".$nameimagen;
		
						if(is_uploaded_file($tmpimagen)) {
			
								if($extimagen['extension']=="PNG" || $extimagen['extension']=="png")		{
									unlink($urlnueva);	
									copy($tmpimagen,$urlnueva);
							$alerta= "<script language='JavaScript'> alert('Se ha guardado correctamente los Datos y la Imagen'); </script>";
									} else {
	$alerta= "<script language='JavaScript'> alert('Error: Solo imagenes con formato (png), y su imagen es  ".$extimagen['extension']."'); </script>";
										
							
										}
												
													}
						
						
				
				}
		 		$NombreSistema=$settings['NombreSistema'];
				$Version=$settings['Version'];
				$DatosProveedor=$settings['DatosProveedor'];
				

			  
		 	}
}

	
$Parser->loadfile("template/cpanelform.html");
$Parser->assignvars(array('{alerta}','{NombreSistema}','{Version}','{DatosProveedor}'), array($alerta,$NombreSistema,$Version,$DatosProveedor));
$content = $Parser->output();
?>