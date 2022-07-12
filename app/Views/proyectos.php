<?= $this->include('templates/header');?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tabla proyectos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html"></a></li>
                            <li class="breadcrumb-item active"></li>
                        </ol>

            
<div
  id="sidenav-3"
  data-mdb-close-on-esc="false"
  class="sidenav"
  data-mdb-hidden="false"
  data-mdb-position="absolute"
  data-mdb-focus-trap="false"
  data-mdb-scroll-container="#scroll-container"
  role="navigation"
>

  <div class="text-center">
    <h3 class="py-4"><i class="fa-solid fa-screwdriver-wrench"></i></h3>
    <hr class="m-0" />
  </div>
  <div class="text-center" style="min-height: 3rem;">
    <hr class="mt-0 mb-2" />
    
    <div class="card card-body table-responsive ">  
      <div class="text-center">
      <a href="<?php echo base_url('/agregar_proyecto'); ?>" type="button" class="btn btn-success">Crear Proyecto</a></div>
    </div>        
  </div>
</div>
	<br><br>
	<table class="table table-bordered">
		<thead>
			<tr>
        <th>ID_POYECTO</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>

			</tr>
		</thead>
		<tbody>

			<tr>
				<td> </td>
				<td> </td>
				<td> </td>

				<td><a class="btn btn-info" href=""><i class="fas fa-pencil-alt"></i></a></td>
        <td><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
			</tr>

		</tbody>
	</table>

</div>
          </table>
        </div>
      </div>
    </div>
</div>
</div>

<?php 
if(isset($GET['enviar'])){
    $buscar = $_GET['buscar'];

    $consulta = $con->query("SELECT * FROM tabla_inventario WHERE Código LIKE '%$buscar");

    while ($row = $consulta->fetch_array()){
        echo $row['Código'].'<br>';
    }
}
?>

<?= $this->include('templates/footer');?>