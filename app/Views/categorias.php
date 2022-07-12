<?= $this->include('templates/header');?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tabla categorias</h1>
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
<div></div>
      
  </div>
</div>

     
        <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm display" id="dataTable" width="100%" cellspacing="0"">       
        <h4 class="p-3 bg-secondary bg-gradient fw-bold text-center"> Categorias</h4>
        <tr>
          <th>ID</th>
          <th>NOMBRE</th>
          <th>ESTADO</th>

        </tr>
        
          <tr>
          <th></th>
          <th></th>
          <th></th>

          <td>
          <a href="<?php echo base_url('/editar_producto')?>" type="button" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
          </td>
          <td>
            <a href="" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a>
          </td>
        </tr>

        
      </table>
                                    </tbody>

</footer>
</div>
</div>

<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script>
    $('#modal-confirma').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });

    $(document).ready(function() {
        if (!$.fn.DataTable.isDataTable('#dataTable')) {
            $('#dataTable').DataTable({
                "language": {
                    "url": "/assets/DatatablesSpanish.json"
                },
                "order": []
            });
        }

        $("body").tooltip({
            selector: '[rel=tooltip]'
        });
    });
</script>


<?= $this->include('templates/footer');?>
