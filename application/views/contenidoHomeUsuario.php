<div class="container container-fluid">
	
	 <div id="menuHome" class="nav-usuario">
   	<img id="img-menu-user" src="asset/img/usuario.png" alt="">
    <a href="<?php echo base_url();?>loginCliente/cerrarSesionCliente?>" class="list-group-item"> <span><b><?php echo $this->session->userdata('nombres')?></b></span></a>

    <a href="<?php echo base_url();?>Inicio/carrito " class="list-group-item"><span><b>Mis pedidos</b></span></a>
    <a href="<?php echo base_url();?>homeUsuario" class="list-group-item"><span><b>Información de la cuenta</b></span></a>
    <a href="<?php echo base_url();?>Inicio/carrito" class="list-group-item"><span><b>Mi carrito</b></span></a>
    <a href="<?php echo base_url();?>Inicio/carrito" class="list-group-item"> <span><b>Actualizar carrito</b></span></a>
    <a href="<?php echo base_url();?>Inicio/carrito" class="list-group-item"> <span><b>Eliminar articulos</b></span></a>
  </div>
  <div id="rpersonal" class="wrapper d-flex align-items-stretch conatiner" style="margin-left: 15%;">
  	<div id="datos-personales" class="p-4 p-md-5 pt-5">
    	<h3 id="tituloDatos" class=" text-right text-dark text-cente r">INFORMACIÓN DE LA CUENTA</h3>
    	<h4 class="sub-titulos-informacion text-primary  subtituloPersonal" style="padding-top: 3%;" ><b>Datos de la cuenta</b></h4>
    	<div class="personal">
    		<p class="float-left letra"><b>Usuario</b></p>
    		<p class="text-primary text-center letra"><b><?php echo $this->session->userdata('usuario')?></b></p>
    		<hr>
    		<p class="float-left correo letra"><b>Correo electronico     </b></p>
    		<p class="t text-primary text-center letra"><b><?php echo $this->session->userdata('correo')?></b></p><br>
    	</div>
    	<h4 class="sub-titulos-informacion text-primary subtituloPersonal "><b>Datos personales</b></h4><br>
    	<div class="personal">
    		<p class="float-left letra"><b>Nombre </b></p>
    		<p class="text-primary text-center letra"><b><?php echo $this->session->userdata('nombre')?></b></p>
    		<hr>
    		<p class="float-left letra"><b>Apellidos </b></p>
    		<p class="text-primary text-center letra letra"><b><?php echo $this->session->userdata('apellidos')?></b></p>
    		<hr>
    		<p class="float-left letra"><b>Telefono</b></p>
    		<p class="text-primary text-center letra"><b>7721063982</b></p>
    	</div>
    </div>
  </div>
</div>