                 	<?php include ("conexion.php"); session_start(); ?>
                 	
                 	<?php


               if(isset($_GET['send'])) {
		
						  sleep(2);
				   
				   
				   foreach ($_POST["array"] as $vals) {
 	
        echo $vals['Id'] . "\n";
	    echo $vals['Estatus'] . "\n";

                                                  }
				  
						  $no_recep = 15 ;					
						  $sql_send2= mysql_query(" INSERT INTO `DetalleGposCompletados`  (`no-recep`)  VALUES ('".$no_recep."') ");   
						  
						  if($sql_send2) {
						  	
                          echo '<br> El registro ha sido DetalleGposCompletados';

                                            }
						  
						  
						  		    //////////////////////////////////////////////////////////////////////////////////
							  
						if ($_POST["entrega"]==0) {
							
							$fecha_hr_ent = "NULL"; 
							$horaentrega = "NULL";
							
						} else {
							
							$fecha_hr_ent = "NOW()"; 
							$horaentrega = "NOW()";
						}
						
						
						echo "recibooo". $_GET["recibir"] ; 
                        
							   $sql_send= mysql_query(" INSERT INTO `Recepcion_Documentos` (`no-recep`,`fecha-hora-recep`,`quien-recibe`,`concepto`,`origen-doc`,`numero-ori-docto`,`entregado-a`,`fecha-hora-entrega`,`observ-recep`,`observ-entrega`) 
						   
						   VALUES ('".$no_recep."',NOW(),'".$_POST["recibir"]."','".$_POST["concepto"]."','".$_POST["origen_doc"]."','".$_POST["numero-ori-docto"]."','".$_POST["entrega"]."','".$fecha_hr_ent."','".$_POST["obs_recepcion"]."','".$_POST["obs_entrega"]."' ) ");   
						   
						  if($sql_send) {

                           echo '<br> El registro ha sido guardado get doc';
							  
                                            }

						}

                       ?>
