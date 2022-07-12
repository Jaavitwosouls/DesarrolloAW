<?= $this->include('templates/header');?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tabla + Productos</h1>
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

</div>
           
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">                                    
                    <div class="p-3 mb-2 bg-secondary bg-gradient fw-bold text-center">AGREGAR PRODUCTOS</div>
                    <form class="row g-3 needs-validation" action="<?php base_url('save') ?>" method="POST" novalidate>
                        <div class="col-md-8 position-relative">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="" placeholder="ingrese nombre del producto" id="" required>
                           
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>

                        <div class="col-md-3 position-relative">
                            <label for="Código" class="form-label">Código</label>
                            <input type="text" class="form-control" id="" name="Código"placeholder="ingrese el código del producto" id=""  required>
                          
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>  

                        <div class="col-md-8 position-relative">
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="" name="descripcion"placeholder="ingrese una descripción del producto" id=""  required>
                          
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>                                             
                        <div class="col-md-3 position-relative">
                            <label for="" class="form-label">Cantidad</label>
                            <input type="number" min="0" name="cantidad" class="form-control" placeholder="ingrese cantidad del producto" id="" required>

                            
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>                   
                        <div class="col-12">
                        <button class="btn btn-warning fw-bold " type="submit">Guardar</button>
                        <a href="<?php echo base_url('/bodega'); ?>" class="btn btn-danger float-end" type="submit">Cancelar</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>




    <?= $this->include('templates/footer');?>