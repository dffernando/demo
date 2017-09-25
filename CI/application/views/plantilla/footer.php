<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!--<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>/bootstrap/js/jquery.min.js"><\/script>')</script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    <script src="<?php echo base_url(); ?>/bootstrap/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
	    function MostrarValor(elemento){
    		var valor = document.getElementById("numero_buscar").value;
    		numero_buscar.value = "";
    		//alert(elemento)
    		$.ajax({
                method:"post",
                url: '<?php echo base_url(); ?>Clientes/ajax',
                data: {
                   	//'valor': $('#id_startTime').val(),
                    'valor': valor,
                },
                //beforeSend:function() {},
                success:function(data){
                	var json=JSON.parse(data);
                	var titulo=json.titulo;
                	document.getElementById("sub_titulo").innerHTML = titulo;
                	var html="";
                	for (u in json.listar){
                		html+="<tr>";
                		html+="<td>"+json.listar[u].PersonaComercio_cedulaRuc+"</td>";
                		html+="<td>"+json.listar[u].nombres+"</td>";
                		html+="<td>"+json.listar[u].apellidos+"</td>";
                		html+="<td>"+json.listar[u].email+"</td>";
                		html+="<td>"+json.listar[u].celular+"</td>";
                		html+="</tr>";
                		//console.log(json.listar[u].nombres);
                	}
                	document.getElementById("tbody_searchable").innerHTML = html;
                }
            });
		}
		jQuery(document).ready(function ($) {
	        //console.log('llegando');
	        $('#example tfoot th').each( function () {
	                var title = $('#example thead th').eq( $(this).index() ).text();
	                $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
	            } );

	            var table = $('#example').DataTable();
	            
	            // Apply the search
	            table.columns().eq( 0 ).each( function ( colIdx ) {
	                $( 'input', table.column( colIdx ).footer() ).on( 'keyup change', function () {
	                    table
	                        .column( colIdx )
	                        .search( this.value )
	                        .draw();
	                } );
	            } );      
	    });
	</script>
  </body>
</html>