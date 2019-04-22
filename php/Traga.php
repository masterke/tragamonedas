<?php 
$ruta="../";
require_once($ruta."includes/conexion.php");


if(empty($_SESSION["facebooklogin"])){
$_SESSION["facebooklogin"]=1;
 //echo  "location.href='facebook/examples/facebookconnect.php';";
 //exit;
}
if(empty($_SESSION["Credito"]))
$_SESSION["Credito"] =100;

function FRandom($anima)
{
 



   switch (rand(1,100)) {
      case 1: 
        if($anima){
          echo "SBar();";
          if($_SESSION["Bar"]>0){
             FRandom(false);
          FRandom(false);
           FRandom(false);
            FRandom(false);
             FRandom(false);
              FRandom(false);
          }
         
        }else
        echo " setTimeout ('Bar(true)', 18000);";
        if($_SESSION["Bar"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Bar"]*100;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
      break;
      case 2: 
      
        if($anima){
          echo "SBar2();";
          if($_SESSION["Bar"]>0){
             FRandom(false);
             FRandom(false);
              FRandom(false);
          }
         
        }else
        echo " setTimeout ('Bar2(true)', 18000);";
        if($_SESSION["Bar"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Bar"]*75;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
      break;
      case 3: 
      case 4:
      case 5:
      case 6:
      if($anima)
      echo "Ssiete();";
      else
      echo " setTimeout ('siete(true)', 18000);";
      if($_SESSION["Siete"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Siete"]*50;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
      break;
      case 7:
      case 8:
      case 9:
      case 10:
      if($anima)
       echo "SNewTwo();";
       else
       echo " setTimeout ('NewTwo(true)', 18000);";

        if($_SESSION["NewTwo"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["NewTwo"]*30;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
      break;
      case 11:
      case 12:
      case 13:
      case 14:
      case 15:
       if($anima)
       echo "SNew();";
       else
       echo " setTimeout ('New(true)', 18000);";
       if($_SESSION["New"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["New"]*20;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
      break;
      case 16:
      case 17:
      case 18:
        if($anima)
        echo "SPika1();";
        else
        echo " setTimeout ('Pika1(true)', 18000);";
        if($_SESSION["Pika"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Pika"]*15;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 19:
      case 20:
      case 21:
       if($anima)
        echo "SPika2();";
        else
        echo " setTimeout ('Pika2(ttrue)', 18000);";
         if($_SESSION["Pika"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Pika"]*15;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 22:
      case 23:
      case 24:
      case 25:
        if($anima)
        echo "SChar1();";
        else
       echo " setTimeout ('Char1(true)', 18000);";
       if($_SESSION["Char"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Char"]*13;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 26:
      case 27:
      case 28:
      case 29:
      if($anima)
        echo "SChar2();";
        else
         echo " setTimeout ('Char2(true)', 18000);";
         if($_SESSION["Char"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Char"]*13;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 30:
      case 31:
      case 32:
      case 33:
      case 34:
      if($anima)
      echo "SSqua1();";
      else
      echo " setTimeout ('Squa1(true)', 18000);";
      if($_SESSION["Squa"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Squa"]*10;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 35:
      case 36:
      case 37:
      case 38:
      case 39:
       if($anima)
        echo "SSqua2();";
        else
        echo " setTimeout ('Squa2(true)', 18000);";

        if($_SESSION["Squa"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Squa"]*10;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 40:
      case 41:
      case 42:
      case 43:
      case 44:
      if($anima)
       echo "SBul1();";
       else
        echo " setTimeout ('Bul1(true)', 18000);";
        if($_SESSION["Bul"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Bul"]*5;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 45:
      case 46:
      case 47:
      case 48:
      case 49:
      if($anima)
      echo "SBul2();";
      else
      echo " setTimeout ('Bul2(true)', 18000);";
      if($_SESSION["Bul"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Bul"]*5;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 50:
      case 51:
      case 52:
      case 53:
      case 54:
      if($anima)
      echo "SBul3();";
      else
      echo " setTimeout ('Bul3(true)', 18000);";
      if($_SESSION["Bul"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Bul"]*5;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 55:
      case 56:
      case 57:
      case 58:
      case 59:
      if($anima)
        echo "SBul4();";
        else
        echo " setTimeout ('Bul4(true)', 18000);";
        if($_SESSION["Bul"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Bul"]*5;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 60:
      case 61:
      case 62:
      case 63:
      case 64:
      if($anima)
      echo "SPsyD1();";
      else
      echo " setTimeout ('PsyD1(true)', 18000);";

      if($_SESSION["Psy"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Psy"]*2;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 65:
      case 66:
      case 67:
      case 68:
      case 69:
      if($anima)
       echo "SPsyD2();";
       else
        echo " setTimeout ('PsyD2(true)', 18000);";

        if($_SESSION["Psy"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Psy"]*2;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 70:
      case 71:
      case 72:
      case 73:
      case 74:
      if($anima)
       echo "SPsyD3();";
       else
       echo " setTimeout ('PsyD3(true)', 18000);";

       if($_SESSION["Psy"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Psy"]*2;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 75:
      case 76:
      case 77:
      case 78:
      case 79:
      if($anima)
       echo "SPsyD4();";
       else
       echo " setTimeout ('PsyD4(true)', 18000);";

       if($_SESSION["Psy"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Psy"]*2;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 80:
      case 81:
      case 82:
      case 83:
      case 84:
      if($anima)
       echo "SPsyD5();";
       else
       echo " setTimeout ('PsyD5(true)', 18000);";

       if($_SESSION["Psy"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Psy"]*2;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 85:
      case 86:
      case 87:
      case 88:
      case 89:
      if($anima)
       echo "SPsyD6();";
       else
       echo " setTimeout ('PsyD6(true)', 18000);";

       if($_SESSION["Psy"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Psy"]*2;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }
        break;
      case 90:
      case 91:
      case 92:
      case 93:
      case 94:
      if($anima)
         echo "SPsyD7();";
         else
          echo " setTimeout ('PsyD7(true)', 18000);";

          if($_SESSION["Psy"]>0){
            $_SESSION["Ganaste"]=$_SESSION["Ganaste"]+$_SESSION["Psy"]*2;
            echo " setTimeout ('$(\'#Ganaste\').html(".$_SESSION["Ganaste"].");', 18000);";
          }

        break;
      case 95:
      case 96:
      case 97:
      case 98:
      if($anima){
        echo "SUltraBall();";
        FRandom(false);
          FRandom(false);
          FRandom(false);
      }else
       echo "UltraBall(true);";
        break;
      case 99:
      case 100:
      if($anima){
       
        echo "SMasterBall();";
         FRandom(false);
          FRandom(false);
           FRandom(false);
            FRandom(false);
             FRandom(false);
             FRandom(false);
      }else
         echo "MasterBall(true);";


          

        break;
         
      
     
    }
   
}


switch ($_POST['Metodo']) {
	case 'Jugar':

if($_SESSION["Psy"]==0 && $_SESSION["Bul"]==0 && $_SESSION["Squa"]==0 && $_SESSION["Char"]==0 && $_SESSION["Pika"]==0 && $_SESSION["New"]==0 && $_SESSION["NewTwo"]==0 && $_SESSION["Siete"]==0 && $_SESSION["Bar"]==0 ){
  echo "alert('Debes Apostar antes de jugar');";
  exit;
}
  FRandom(true);
  echo "$('#jugar').hide();";
  echo " setTimeout ('$(\'#jugar\').show();', 18000);";

          


  $_SESSION["Psy"]=0;
  $_SESSION["Bul"]=0;
  $_SESSION["Squa"]=0;

  $_SESSION["Char"]=0;
  $_SESSION["Pika"]=0;
  $_SESSION["New"]=0;

  $_SESSION["NewTwo"]=0;
  $_SESSION["Siete"]=0;
  $_SESSION["Bar"]=0;


   echo "$('#Manzana').html(".$_SESSION["Bul"].");";
    echo "$('#Uva').html(".$_SESSION["Psy"].");";
    echo "$('#Cereza').html(".$_SESSION["Squa"].");";
     echo "$('#Campana').html(".$_SESSION["Char"].");";
    echo "$('#Tuna').html(".$_SESSION["Pika"].");";
    echo "$('#Zandia').html(".$_SESSION["New"].");";
     echo "$('#Estrella').html(".$_SESSION["NewTwo"].");";
    echo "$('#Siete').html(".$_SESSION["Siete"].");";
    echo "$('#BarP').html(".$_SESSION["Bar"].");";
   $DB->query("UPDATE cuentas set Credito=".$_SESSION["Credito"]." where  idFB=".$_SESSION["facebooklogin"], 0); 
	break;
case 'Cobrar':

 $_SESSION["Credito"]=$_SESSION["Credito"]+$_SESSION["Ganaste"];
 $_SESSION["Ganaste"]=0;
 echo "$('#Credito').html(".$_SESSION["Credito"].");";
 echo "$('#Ganaste').html(".$_SESSION["Ganaste"].");";
 $DB->query("UPDATE cuentas set Credito=".$_SESSION["Credito"]." where  idFB=".$_SESSION["facebooklogin"], 0); 
  break;
  case 'ObtenerDatos':
 $DB->query("SELECT Credito FROM cuentas where  idFB=".$_SESSION["facebooklogin"], 0);  
         if($DB->get_num_records(0)==0){
 $DB->query("insert into  cuentas(idFB,FechaCreacion) values (".$_SESSION["facebooklogin"].",NOW())", 0);  
        }else{
          $item = $DB->get_field_data(0);
          $_SESSION["Credito"]=$item['Credito'];
           echo "$('#Credito').html(".$_SESSION["Credito"].");";
        }
 echo "$('#Ganaste').html(".$_SESSION["Ganaste"].");";

 
  break;
  case 'setPsy':

  if($_SESSION["Psy"]<9){
    if($_SESSION["Credito"]>0){
      $_SESSION["Credito"]-=1;
      $_SESSION["Psy"]+=1;
    echo "$('#Uva').html(".$_SESSION["Psy"].");";
    echo "$('#Credito').html(".$_SESSION["Credito"].");";
      }
    }
    
  
  
  break;

  case 'setBul':

  if($_SESSION["Bul"]<9){
    if($_SESSION["Credito"]>0){
      $_SESSION["Credito"]-=1;
      $_SESSION["Bul"]+=1;
    echo "$('#Manzana').html(".$_SESSION["Bul"].");";
    echo "$('#Credito').html(".$_SESSION["Credito"].");";
      }
    }
    
  
  
  break;

  case 'setSqua':

  if($_SESSION["Squa"]<9){
    if($_SESSION["Credito"]>0){
      $_SESSION["Credito"]-=1;
      $_SESSION["Squa"]+=1;
    echo "$('#Cereza').html(".$_SESSION["Squa"].");";
    echo "$('#Credito').html(".$_SESSION["Credito"].");";
      }
    }
    
  
  
  break;
  case 'setChar':

  if($_SESSION["Char"]<9){
    if($_SESSION["Credito"]>0){
      $_SESSION["Credito"]-=1;
      $_SESSION["Char"]+=1;
    echo "$('#Campana').html(".$_SESSION["Char"].");";
    echo "$('#Credito').html(".$_SESSION["Credito"].");";
      }
    }

  break;
   case 'setPika':

  if($_SESSION["Pika"]<9){
    if($_SESSION["Credito"]>0){
      $_SESSION["Credito"]-=1;
      $_SESSION["Pika"]+=1;
    echo "$('#Tuna').html(".$_SESSION["Pika"].");";
    echo "$('#Credito').html(".$_SESSION["Credito"].");";
      }
    }

  break;
  case 'setNew':

  if($_SESSION["New"]<9){
    if($_SESSION["Credito"]>0){
      $_SESSION["Credito"]-=1;
      $_SESSION["New"]+=1;
    echo "$('#Zandia').html(".$_SESSION["New"].");";
    echo "$('#Credito').html(".$_SESSION["Credito"].");";
      }
    }

  break;

   case 'setNewTwo':

  if($_SESSION["NewTwo"]<9){
    if($_SESSION["Credito"]>0){
      $_SESSION["Credito"]-=1;
      $_SESSION["NewTwo"]+=1;
    echo "$('#Estrella').html(".$_SESSION["NewTwo"].");";
    echo "$('#Credito').html(".$_SESSION["Credito"].");";
      }
    }

  break;
   case 'setSiete':

  if($_SESSION["Siete"]<9){
    if($_SESSION["Credito"]>0){
      $_SESSION["Credito"]-=1;
      $_SESSION["Siete"]+=1;
    echo "$('#Siete').html(".$_SESSION["Siete"].");";
    echo "$('#Credito').html(".$_SESSION["Credito"].");";
      }
    }

  break;

  case 'setBar':

  if($_SESSION["Bar"]<9){
    if($_SESSION["Credito"]>0){
      $_SESSION["Credito"]-=1;
      $_SESSION["Bar"]+=1;
    echo "$('#BarP').html(".$_SESSION["Bar"].");";
    echo "$('#Credito').html(".$_SESSION["Credito"].");";
      }
    }

  break;
	
	
}
	
	

	
	
	
?>