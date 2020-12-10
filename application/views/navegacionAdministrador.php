<body>
	<!--EL SEGUNDO NAVEGAADOR ES DONDE ESTAN TODAS LAS CATEGORIAS-->
	<nav  id="Nav2" class="navbar navbar-expand-sm navbar-light bg-dark xd">
		<a class="navbar-brand" href="<?php echo base_url();?>homeAdministrador">
    		<img src="<?php echo base_url();?>/asset/img/Logo.PNG" alt="logo" style="width:200px;">
  		</a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#opciones">
      		<span class="navbar-toggler-icon"></span>
    	</button> 
    	<!-- enlaces -->
    	<div class="collapse navbar-collapse" id="opciones">   
      		<ul id="subNav" class="navbar-nav">
        		<li class="nav-item">
          			<a class="nav-link" href="<?php echo base_url();?>trabajadores/index"><b><img class="icon" src="<?php echo base_url();?>/asset/img/usuarios.png" alt="">Usuarios</b></a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link" href="<?php echo base_url();?>productos"><b><img  class="icon"src="<?php echo base_url();?>/asset/img/productos.png" alt=""> Productos</b></a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link" href="<?php echo base_url();?>ventas/index"><b><img class="icon" src="<?php echo base_url();?>/asset/img/ventas.png" alt=""> Ventas</b></a>
        		</li>
        		<li class="nav-item">
          			<a class="nav-link" href="<?php echo base_url();?>clientes"><b><img class="icon" src="<?php echo base_url();?>/asset/img/clientes.png" alt=""> Clientes</b></a>
        		</li> 
        		<li class="nav-item">
          			<a class="nav-link" href="<?php echo base_url();?>login/cerrarSesion " style="font-size: 15px;"><b> <img class="icon" src="<?php echo base_url();?>/asset/img/usuarios.png" alt=""><?php echo $this->session->userdata('nombres') ?> </b></a>
        		</li>
         	</ul>
        </div>
  </nav>