                 	<?php include ("conexion.php"); session_start(); ?>
                 	
                 	<?php					
                    if(isset($_GET['send_add_empl'])) {

						   sleep(2);
							
						   $sql_add_empl= mysql_query(" INSERT INTO `Empledos_Afhonda` (`nombre-empl`,`puesto-empl`) VALUES ('".$_POST["nombre_empl"]."','".$_POST["puesto_empl"]."') ");

						?>
						
                            <select name="concepto">    
                            <option value="" selected>--Nombre del personal--</option>	   
                            <?php
                            $sql= mysql_query("SELECT * FROM `empledos_afhonda` ORDER BY `nombre-empl` ASC " ,$con); 
                            while($row = mysql_fetch_array($sql)){
                            ?>                
                            <option id="clave-empl" value="<?=$row['nombre-empl']?>"><?=$row['nombre-empl']?></option>
                            <?php } ?>    	
                                     
                                     </select>
                                            <a href="#" id="btn-add-empl"   class="btn btn-danger" ><i class="icon-folder-close"></i> Agregar nuevo concepto</a>
  
						<?php  } ?>
						
						
					<?php					
                    if(isset($_GET['send_add_concep'])) {

						   sleep(2);
							
						   $sql_add_empl= mysql_query(" INSERT INTO `Conceptos` (`no-conceptos`) VALUES ('".$_POST["no_conceptos"]."') ");

						?>
						
                                        <select name="concepto">
                                        	<option value="" selected>--Lista de documetación--</option>
                            <?php
                            $sql= mysql_query("SELECT * FROM `Conceptos` ORDER BY `no-conceptos` ASC " ,$con); 
                            while($row = mysql_fetch_array($sql)){
                            ?>                
                            <option id="clave-empl" value="<?=$row['no-conceptos']?>"><?=$row['no-conceptos']?></option>
                            <?php } ?>    	
                                        </select>
                                            <a href="#" id="btn-add-concep"   class="btn btn-danger" ><i class="icon-folder-close"></i> Agregar nuevo concepto</a>

						<?php  } ?>
						

                     	<?php

                          if(isset($_GET['send'])) {
		
						  sleep(2);
				  
						  $no_recep = 1 ;					
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
						
                        
							   $sql_send= mysql_query(" INSERT INTO `Recepcion_Documentos` (`fecha-hora-recep`,`quien-recibe`,`concepto`,`origen-doc`,`numero-ori-docto`,`entregado-a`,`fecha-hora-entrega`,`observ-recep`,`observ-entrega`) 
						   
						   VALUES (NOW(),'".$_POST["recibir"]."','".$_POST["concepto"]."','".$_POST["origen_doc"]."','".$_POST["numero-ori-docto"]."','".$_POST["entrega"]."','".$fecha_hr_ent."','".$_POST["obs_recepcion"]."','".$_POST["obs_entrega"]."' ) ");   
						   
						  if($sql_send) {

                           echo '<br> El registro ha sido guardado get doc';
							  
                                            }

						}

                        ?>
                        
                        <?php
                          if(isset($_GET['gps_dcos'])) {
                        ?>
                        
                           <form id="form_get_doc_s" class="form-horizontal contentForm" method="post">
                           	
                                     <!-- ==================== BORDERED TABLE HEADLINE ==================== -->
                        <div class="containerHeadline">
                            <i class="icon-table"></i><h2>Bordered Table</h2>
                            <div class="controlButton pull-right"><i class="icon-remove removeElement"></i></div>
                            <div class="controlButton pull-right"><i class="icon-caret-down minimizeElement"></i></div>
                        </div>
                        <!-- ==================== END OF BORDERED TABLE HEADLINE ==================== -->

                        <!-- ==================== BORDERED TABLE FLOATING BOX ==================== -->
                        <div class="floatingBox table">
                            <div class="container-fluid">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th>Fecha</th>
                                      <th>No.recep</th>
                                      <th>Documentos</th>
                                      <th>Estatus</th>
                                      <th class="w80"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  	
                                    <tr>
                                      <td>1</td>
                                      <td>Mark</td>
                                      <td>Otto</td>
                                      <td>@mdo</td>
                                      <td class="actions"><span class="label green"><i class="icon-pencil edit"></i></span><span class="label red"><i class="icon-trash delete"></i></span></td>
                                    </tr>

                                  </tbody>
                                </table>  
                            </div>
                        </div>
                        <!-- ==================== END OF BORDERED TABLE FLOATING BOX ==================== --> 
                        
                                               <div class="container-fluid">
                                <!-- ==================== TABLESORTER TABLE ==================== -->
                                <table class="tablesorter centerFirstLast" id="membersTable">
                                    <thead>
                                    <tr>
                                        <th class="info"></th>
                                        <th data-placeholder="search in usernames...">Documentos</th>
                                        <th data-placeholder="search in dates...">Fecha</th>
                                  
                                        <th id="obs_banned"  data-placeholder="search in statuses...">Observaciones</th>
                                          <th data-placeholder="search in statuses...">Status</th>
                                      
                                        
                                    </tr>
                                    </thead>
                                    <tbody>    
                                    	
                                    	<script type="text/javascript"> 
                                    	                               var arreglo_status =[];  </script>                 
<?php

 $_SESSION['id_gp_doc'] = $_GET['gps_dcos'];

 $sql= mysql_query("SELECT * FROM `Grupo_Documentos` WHERE id_gp_doc=".$_GET['gps_dcos']."  " ,$con); 
 while($row = mysql_fetch_array($sql)){

 $doc =$row["documentos"];

 $lista= explode(",",$doc);
 
 for($i=0; $i<count($lista); $i++)
 {
 		   
 $fg=$lista[$i]  ;


$sql2="select * from `Get_File`  where id_Get_File='".$fg."'  ";
$res=mysql_query($sql2,$con);
while ($rows=@mysql_fetch_array($res))
{

?>

                                    <tr>
                                    	<td><span class="label cyan"><i class="icon-info-sign info"></i></span></td>
                                        <td><a href="#" class="username"><?=$rows['nombre']?></a></td>
                                        <td><a href="#" class="registrationDate">01/06/2012</a></td>
                                      
                                        <td id="obs_banned_td"><textarea name="obs_recepcion" class="span10"></textarea></td>
                                        
                                        
                                        <td><input type="hidden" name="no_gps[]" value="<?= $rows['id_Get_File'] ?>">
                                        	<span id="status_file_<?php echo $i ; ?>" class="label inactive">
                                        		<span class="label label-pressed">2</span> 
                                        		<a href="#" class="memberStatus">Sin recibir </a></span></td>
                                    </tr>
                                    
                                    
                                            <script type="text/javascript">
$(document).ready(function(){

   $(window.top).find("#btn-send");
    
        $( "#btn-send" ).click(function(e) {

   	     e.preventDefault();
   	 
   	        if($('#status_file_<?php echo $i; ?>').hasClass('active')) {
   	        	
                        var estatus = "active";

                       arreglo_status.push({ Id : <?php echo $rows['id_Get_File']; ?>, Estatus : estatus });
                       
   //alert('Este link tiene la clase "active".<?php echo $i.$rows['id_Get_File']; ?>');
   
   return;
  }
  
  
     	        if($('#status_file_<?php echo $i; ?>').hasClass('banned')) {
   	        	
                       var estatus = "banned";

                       arreglo_status.push({ Id : <?php echo $rows['id_Get_File']; ?>, Estatus : estatus });
                       
  // alert('Este link tiene la clase "active".<?php echo $i.$rows['id_Get_File']; ?>');
   
   return;
  }
  
        if($('#status_file_<?php echo $i; ?>').hasClass('pending')) {
   	        	
                       var estatus = "pending";

                       arreglo_status.push({ Id : <?php echo $rows['id_Get_File']; ?>, Estatus : estatus });
                       
   //alert('Este link tiene la clase "active".<?php echo $i.$rows['id_Get_File']; ?>');
   
   return;
  }
  
  
  	        if($('#status_file_<?php echo $i; ?>').hasClass('inactive')) {
                       // devuelve TRUE si el nodo A tiene la clase "miClase"
                       
                      var estatus = "inactive";

                      arreglo_status.push({ Id : <?php echo $rows['id_Get_File']; ?>, Estatus : estatus });

  alert('Este link tiene la clase "inactive".<?php echo $i.$rows['id_Get_File'];  ?>');
   return;
  }
   	 
     window.arreglo_s = arreglo_status;
     
     
      console.log(window.arreglo_s);
     
        });
   
});
</script>
                                    
                            <?php        } } }?>        
                                    </tbody>
                                </table>
                                <!-- ==================== END OF TABLESORTER TABLE ==================== -->
  
                            </div>
                            
                         
                                   <div class="control-group">
                                    	 <div class="controls">
                                         <button id="btn-send" class="btn btn-large btn-danger" type="button">Capturar</button>
                                         </div>
                                    </div>
                                    
                                    </form>
                                    
                                    
                                 
                            
                            <?php } ?>
                            
                            
          

                            
                                            <script>
        // add parser through the tablesorter addParser method
        $.tablesorter.addParser({
            id: 'checkbox',
            is: function(s) {
                return false;
            },
            format: function(s, table, cell, cellIndex) {
                var $t = $(table), $c = $(cell), c,

                // resort the table after the checkbox status has changed
                resort = false;

                if (!$t.hasClass('hasCheckbox')) {
                    $t
                    .addClass('hasCheckbox')
                    // make checkbox in header set all others
                    .find('thead th:eq(' + cellIndex + ') input[type=checkbox]')
                    .bind('change', function(){
                        c = this.checked;
                        $t.find('tbody tr:visible td:nth-child(' + (cellIndex + 1) + ') input').each(function(){
                          this.checked = c;
                          $(this).trigger('change');
                        });
                    })
                    .bind('mouseup', function(){
                        return false;
                    });
                    $t.find('tbody tr').each(function(){
                        $(this).find('td:eq(' + cellIndex + ')').find('input[type=checkbox]').bind('change', function(){
                            $t.trigger('updateCell', [$(this).closest('td')[0], resort]);
                        });
                    });
                }
                // return 1 for true, 2 for false, so true sorts before false
                c = ($c.find('input[type=checkbox]')[0].checked) ? 1 : 2;
                $c.closest('tr')[ c === 1 ? 'addClass' : 'removeClass' ]('checked');
                return c;
            },
            type: 'numeric'
        });

        $(function() {
            $('#tablesorterDemo').tablesorter({
                sortList: [[1,0]],
                widgets: ['zebra', 'stickyHeaders'],
                headers: {
                    0: {
                        sorter: 'checkbox'
                    },
                }
            });

            /*=============================================================================================
                 ============================== LOAD TABLESORTER PAGER SETTINGS ===============================
                 =============================================================================================*/

                /*=============================================================================================
                 ======================================= LOAD TABLESORTER =====================================
                 =============================================================================================*/

                $("#membersTable").tablesorter({

                    headers: {
                        0: { sorter: false, filter: false },
                        1: { sorter: 'text' },
                        2: { sorter: 'shortDate' },
                        3: { sorter: 'text' },
                        4: { sorter: 'text' },
                        5: { sorter: false, filter: false }
                    },

                    dateFormat: 'uk',

                    // sort on the first column and third column in ascending order
                    sortList: [[1,0]],

                    // hidden filter input/selects will resize the columns, so try to minimize the change
                    widthFixed : true,

                    // initialize zebra striping and filter widgets
                    widgets: ["zebra", "filter"],

                    widgetOptions : {

                        // If there are child rows in the table (rows with class name from "cssChildRow" option)
                        // and this option is true and a match is found anywhere in the child row, then it will make that row
                        // visible; default is false
                        filter_childRows : false,

                        // if true, a filter will be added to the top of each table column;
                        // disabled by using -> headers: { 1: { filter: false } } OR add class="filter-false"
                        // if you set this to false, make sure you perform a search using the second method below
                        filter_columnFilters : true,

                        // css class applied to the table row containing the filters & the inputs within that row
                        filter_cssFilter : 'tablesorter-filter',

                        // add custom filter functions using this option
                        // see the filter widget custom demo for more specifics on how to use this option
                        filter_functions : null,

                        // if true, filters are collapsed initially, but can be revealed by hovering over the grey bar immediately
                        // below the header row. Additionally, tabbing through the document will open the filter row when an input gets focus
                        filter_hideFilters : true,

                        // Set this option to false to make the searches case sensitive
                        filter_ignoreCase : true,

                        // Delay in milliseconds before the filter widget starts searching; This option prevents searching for
                        // every character while typing and should make searching large tables faster.
                        filter_searchDelay : 300,

                        // Set this option to true to use the filter to find text from the start of the column
                        // So typing in "a" will find "albert" but not "frank", both have a's; default is false
                        filter_startsWith : false,

                        // Filter using parsed content for ALL columns
                        // be careful on using this on date columns as the date is parsed and stored as time in seconds
                        filter_useParsedData : false

                    }

                })

                /*=============================================================================================
                 ================================== LOAD PAGER TO TABLESORTER =================================
                 =============================================================================================*/

                /*=============================================================================================
                 ================================ SEARCH FUNCTION FOR WHOLE TABLE =============================
                 =============================================================================================*/

                // Write on keyup event of keyword input element
                $("#memberSearch").keyup(function(){
                    // When value of the input is not blank
                    if( $(this).val() != "")
                    {
                        // Show only matching TR, hide rest of them
                        $("#membersTable tbody>tr").hide();
                        $("#membersTable td:contains-ci('" + $(this).val() + "')").parent("tr").show();
                    }
                    else
                    {
                        // When there is no input or clean again, show everything back
                        $("#membersTable tbody>tr").show();
                    }
                });

                /*=============================================================================================
                 ======================== ADD ROLLER GRIP TO TABLESORTER HIDEME ROW ===========================
                 =============================================================================================*/

                $('.tablesorter-filter-row td:first').append('<div class="tableFilterRoller"></div>');

                /*=============================================================================================
                 ======================= ADD MOREOPTIONS ICON TO HIDDEN ROW WITH FILTERS ======================
                 =============================================================================================*/

                $('.tablesorter-filter-row td').not(':first').not(':last').append('<i class="icon-play-circle moreOptions pull-right"></i>');

                /*=============================================================================================
                 ================================ TABLE ROW INFO / EDIT / DELETE ICON ACTIONS =================
                 =============================================================================================*/


                var showMemberIcon = $('i.info').parent(),
                    editMemberIcon = $('i.edit').parent(),
                    deleteMemberIcon = $('i.delete').parent();

                $(showMemberIcon).tooltip({
                    title: 'View member profile'
                });

                $(editMemberIcon).tooltip({
                    title: 'Edit member profile'
                });

                $(deleteMemberIcon).tooltip({
                    title: 'Delete member'
                });

                $('i.info, i.edit, i.delete').parent().hover(function () {
                    $(this).children().stop().animate({
                        opacity: 1
                    }, 200);
                }, function() {
                    $(this).children().stop().animate({
                        opacity: .7
                    }, 200);
                });

                /*=============================================================================================
                 ===================================== SET FIELDS EDITABLE ====================================
                 =============================================================================================*/

                $('#membersTable a.username').editable({
                    type: 'text',
                    name: 'username',
                    url: '/post',
                    title: 'Enter username',
                    placement: 'right'
                });

                $('#membersTable a.registrationDate').editable({
                    type: 'date',
                    viewformat: 'dd/mm/yyyy',
                    name: 'registrationDate',
                    url: '/post',
                    title: 'Enter date of registration'
                });

                $('#membersTable a.memberGroup').editable({
                    type: 'select',
                    source: [{value: 1, text: 'admin'}, {value: 2, text: 'editor'}, {value: 3, text: 'author'}, {value: 4, text: 'user'}, {value: 5, text: 'second technician'}],
                    name: 'memberGroup',
                    url: '/post',
                    title: 'Choose a role'
                }).click(function(){
                    $(this).next().find('select').multiselect();
                });

                $('#membersTable a.memberStatus').editable({
                    type: 'select',
                    source: [{value: 'active', text: 'Aceptado'}, {value: 'inactive', text: 'Sin recibir'}, {value: 'banned', text: 'rechazado'}, {value: 'pending', text: 'En revisión '}],
                    name: 'memberStatus',
                    url: '/post',
                    title: 'Eligea un estatus',
                    success: function (){
                        var label = $(this).parent() // define variable for link parent
                        selectVal = $(this).next().find('select').val(); // define variable for selected value

                        $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                    }
                }).click(function(){
                    $(this).next().find('select').multiselect();
                });
        });
        </script>
        
        
        <script type="text/javascript">
$(document).ready(function(){

   
     $( "#btn-send" ).click(function(e) {
        	
         	
   	 e.preventDefault();
   	 
   	  $(window.top).find('#form_get_doc');
   	 
   	 console.log( arreglo_status );

   	 
   //  $('#div-send').html('<div class="load"><p class="text-loader">Insertando nuevo documento</p><img src="img/loading.GIF"/></div>');
    var dataString = $('#form_get_doc').serialize() + '&array='+window.arreglo_s ;
     $('#membersTable').html('<div class="load"><p class="text-loader">Insertando nuevo documento</p><img src="img/loading.GIF"/></div>');
    // alert('Datos serializados: '+dataString);

        $.ajax({
                 
            type: "POST",
            url: "get_doc_send.php?send=1",
            data: {array:arreglo_status} ,
          
            success: function(data) { $('#membersTable').fadeIn(1000).html(data) }   
                     
              });
        });
        
        
        $( "#btn-send2" ).click(function(e) {
        	
            e.preventDefault();
        	
        	
        	 alert('hola culeros ');
        });  
        
             $( "#btn-send" ).click(function(e) {
        	
            e.preventDefault();
        	
        	
        	 alert('hola culeros ');
        });  
        
$("#btn-add-empl").click(function() {
$(window.top).find('#div-add-empl');
$('#div-add-empl').toggle("slow") ;
});

$("#btn-add-concep").click(function() {
$(window.top).find('#div-add-concep');
$('#div-add-concep').toggle("slow") ;
});

$("#btn-add-ent").click(function() {
$(window.top).find('#div-add-ent');
$('#div-add-ent').toggle("slow") ;
});
   
});
</script>


   
