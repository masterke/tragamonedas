<?php 
$ruta="../";
require_once($ruta."includes/conexion.php");


if(empty($_SESSION["facebooklogin"])){

 echo  "location.href='facebook/examples/facebookconnect.php';";
 exit;
}



switch ($_POST['Metodo']) {
	case 'ListarDiario':

echo "$('#Ranking').html('TOP 10');";

    echo "$('#Ranking').append('<tr><td align=\'center\' valign=\'middle\'><h2>Usuario&nbsp;&nbsp;</h2></td><td align=\'center\' valign=\'middle\'><h2>&nbsp;&nbsp;Puntaje</h2></td><td align=\'center\' valign=\'middle\'><h2>&nbsp;&nbsp;Combo</h2></td></tr>');";
$DB->query("SELECT * FROM pokecrush_ranking where Fecha=CURDATE() order by MaxPoint Desc limit 10", 1);
  while($item = $DB->get_field_data(1) ){
  echo "$('#Ranking').append('<tr><td align=\'center\' valign=\'middle\'> <a href=\'https://www.facebook.com/".$item['idFB']."\' target=\'_blank\'><img src=\'https://graph.facebook.com/".$item['idFB']."/picture?type=large\' width=\'50\' height=\'50\' /></a></td><td align=\'center\' valign=\'middle\'><h2>".$item['MaxPoint']."</h2></td><td align=\'center\' valign=\'middle\'><h2>".$item['MaxCombo']."x(".$item['MaxDif'].")</h2></td></tr>');";
  }
	       
        break;
          case 'ListarGanadores':
echo "$('#RankingAyer').html('');";
    echo "$('#RankingAyer').append('<tr><td align=\'center\' valign=\'middle\'><h2>Usuario&nbsp;&nbsp;</h2></td><td align=\'center\' valign=\'middle\'><h2>&nbsp;&nbsp;Puntaje</h2></td><td align=\'center\' valign=\'middle\'><h2>&nbsp;&nbsp;Combo</h2></td></tr>');";
$DB->query("SELECT * FROM pokecrush_ranking where Fecha=date_sub(CURDATE(), INTERVAL 1 DAY) order by MaxPoint Desc limit 10", 1);
  while($item = $DB->get_field_data(1) ){
  echo "$('#RankingAyer').append('<tr><td align=\'center\' valign=\'middle\'> <a href=\'https://www.facebook.com/".$item['idFB']."\' target=\'_blank\'><img src=\'https://graph.facebook.com/".$item['idFB']."/picture?type=large\' width=\'50\' height=\'50\' /></a></td><td align=\'center\' valign=\'middle\'><h2>".$item['MaxPoint']."</h2></td><td align=\'center\' valign=\'middle\'><h2>".$item['MaxCombo']."x(".$item['MaxDif'].")</h2></td></tr>');";
  }
         
        break;
	case 'desc':
  
  $DB->query("SELECT idFB FROM pokecrush_ranking where Fecha=CURDATE() and idFB=".$_SESSION["facebooklogin"], 0);  
         if($DB->get_num_records(0)==1){
                if($_POST['Key']=="Combo"){
                  $DB->query("update pokecrush_ranking set MaxCombo=".$_POST['Value']." where MaxCombo<".$_POST['Value']." and Fecha=CURDATE() and idFB=".$_SESSION["facebooklogin"], 0); 
                }else{
                  if(!empty($_SESSION["Score"])){
                     if(($_POST['Value']-$_SESSION["Score"])>0){
                    $DifScore=$_POST['Value']-$_SESSION["Score"];
                    $DB->query("update pokecrush_ranking set MaxDif=$DifScore where MaxDif<$DifScore and Fecha=CURDATE() and idFB=".$_SESSION["facebooklogin"], 0); 
                    }
                  }
                 
                  $_SESSION["Score"]=$_POST['Value'];
                  
                   $DB->query("update pokecrush_ranking set MaxPoint=".$_POST['Value']." where MaxPoint<".$_POST['Value']." and Fecha=CURDATE() and idFB=".$_SESSION["facebooklogin"], 0); 

                   
                }
              
         }else{
            $DB->query("insert into pokecrush_ranking(idFB,MaxPoint,MaxCombo,Fecha) values (".$_SESSION["facebooklogin"].",".$_POST['Value'].",0,CURDATE())", 0); 
         }
  break;
}
	
	

	
	
	
?>