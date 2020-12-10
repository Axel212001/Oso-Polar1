	<!--EL SEGUNDO NAVEGAADOR ES DONDE ESTAN TODAS LAS CATEGORIAS-->
	<nav  id="Nav2" class="navbar navbar-expand-sm navbar-light bg-dark">
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones">
      		<span class="navbar-toggler-icon"></span>
    	</button> 
    <!-- enlaces -->
    <div class="collapse navbar-collapse" id="opciones">   
      <ul id="subNav" class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url();?>Inicio/TV"><b>TV Y VIDEO</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 16px;" href="<?php echo base_url();?>Inicio/audio"><b>AUDIO</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  style="font-size: 16px;" href="<?php echo base_url();?>Inicio/cables"><b>CABLES</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="font-size: 16px;" href="<?php echo base_url();?>Inicio/energia"><b>ENERGIA</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"style="font-size: 16px;" href="<?php echo base_url();?>Inicio/seguridad"><b>SEGURIDAD</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="font-size: 16px;" href="<?php echo base_url();?>Inicio/sucursales"><b>SUCURSALES</b></a>
        </li>       
        <li class="nav-item">
          <a class="nav-link" style="font-size: 16px;" href="<?php echo base_url();?>Inicio/nosotros"><b>NOSOTROS</b></a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" style="font-size: 16px;" href="#crearCuenta" data-toggle="modal"><b>CREAR CUENTA</b></a>
          <div id="crearCuenta" class="modal fade">
                <div class="modal-dialog">
                  <div id="container-login" class="modal-content">
                     <form action="<?php echo base_url();?>Inicio/insertClientes" method='POST'>
                    <div class="header-form">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="titulo-login">REGISTRATE</h4>
                        <img id="imagen-login" src="<?php echo base_url();?>/asset/img/usuario.png" alt="">
                    </div>
                   
                    <div class="modal-body ">
                      <div class="row  body-login">
                          <div class="col">
                              <input type="text" class="form-control input-login" id="email" placeholder="Nombre(s)" name="txtnombre" id="txtnombre">
                              <input type="text" class="form-control espacio input-login" placeholder="Usuario" name="txtusuario" id="txtusuario">
                          </div>
                          <div class="col">
                              <input type="text" class="form-control input-login " placeholder="Apellidos" name="txtapellidos" id="txapellidos">
                              <input type="email" class="form-control espacio input-login" placeholder="Correo Electronico" name="txtemail" id="txtemail">
                          </div>
                             
                        </div>
                        <dir class="col">
                               <input type="password" class="form-control espacio input-login" placeholder="Contraseña" name="txtcontraseña" id="txtcontraseña" style="width: 100%;">
                             </dir>
                        
                    </div>
                  <div class="botones-login" style="margin-bottom:5%; margin-top: -2%;">
                      <button type="submit" class="btn" id="resgistrate-login">Registrate</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
        </li> 
        <li class="nav-item">
            <a id="navLogin"  style="font-size: 16px;"class="nav-link" href="#inciarSesionT"data-toggle="modal"><b>INICIAR SESIÓN EMPLEADO</b> </a>

            <div id="inciarSesionT" class="modal fade">
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
                    <form action="<?php echo base_url();?>login/iniciarSesion" method='post'>

                      <div class="modal-body ">
                        <div class="row  body-login">
                          <div class="col">
                              <input type="text" class="form-control espacio input-login2" placeholder="Usuario" name="txtnombreT" id="txtnombreT">
                              <input type="password" class="form-control espacio input-login2" placeholder="password" name="txtpassT" id="txtpassT">
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
      </ul>
    </div>
  </nav>