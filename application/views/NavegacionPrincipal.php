<body>
  <!-- PRIMER NAVEGADOR DONDE SE ENCUENTRA EL CAMPO DE TEXTO BUSCAR -->
  <nav class="nav1 navbar navbar-expand-sm bg-dark navbar-dark" >
    <!-- Brand/logo -->
      <a id="logoR" class="container navbar-brand"  href="<?php echo base_url();?>Inicio">
        <img id="logoimg" src="<?php echo base_url();?>/asset/img/Logo.PNG" alt="logo" style="width:200px;">
      </a>
      <form id="FormBuscar" class=" container form-inline" action="">
        <input  id="Buscar" class=" container form-control mr-sm-2" type="text" placeholder="Busca prodcutos, marcas y más....." >
        <button id="btnBuscar" class="btn btn-success" type="submit">Buscar</button>
      </form>
      <!-- Links -->
      <ul id="subNav1" class="navbar-nav" >

        <li class="container nav-item" style="margin-left: -10%;">

            <a id="navLogin" class="text-center nav-link" href="#inciarSesion"data-toggle="modal">Iniciar sesión  <span class="icon-user"></span></a>

            <div id="inciarSesion" class="modal fade">
                <div class="modal-dialog">
                  <div id="container-login2" class="modal-content" >
                    <div  class="header-form">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                        <h4 class="modal-title" id="titulo-login2">INICIAR SESIÓN</h4>

                        <img id="imagen-login2" src="<?php echo base_url();?>/asset/img/usuario.png" alt="">
                    </div>
                    <div class="login-box-body ">
                      <?php if($this->session->flashdata('error')):?>
                      <div class="alert alert-danger" style="margin: auto;">
                        <p class="text-center form-control-danger"><?php echo $this->session->flashdata('error')?></p>
                      </div>
                    <?php endif; ?>
                    <form action="<?php echo base_url();?>loginCliente/iniciarSesionCliente" method='post'>

                      <div class="modal-body ">
                        <div class="row  body-login">
                          <div class="col">
                              <input type="text" class="form-control espacio input-login2" placeholder="Usuario" name="txtnombre" id="txtnombre">
                              <input type="password" class="form-control espacio input-login2" placeholder="password" name="txtpass" id="txtpass">
                          </div>
                        </div>  
                      </div>
                      <div class="botones-login">
                        <button  onclick=" "  type="submit" class="btn"id="iniciar-login2" >Ingresar</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>


        </li>
        <li class="container nav-item" style="margin-left: -5%">
            <a id="carrito" class=" nav-link" href="<?php echo base_url();?>Inicio/carrito">Carrito de compras<span class="icon-cart"></span></a>
        </li>
      </ul>
  </nav>