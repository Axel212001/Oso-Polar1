
<div class="container">
    <img id="imgCrud" class="float-left rounded" width="20%" style="margin-top: -5%;" src="<?php echo base_url();?>/asset/img/crudUsuarios.png" alt="">
      <h2 id="tituloCrud" class="justify-content-lg-start text-center" style="margin-top: 4%; margin-bottom: 12%;">ACTUALIZA LOS CAMPOS CORRESPONDIENTES </h2>
</div>
  
 <div class="container container-fluid bg-light">
   <?php if($this->session->flashdata('error')):?>
   <div class=" alert bg-danger" style="opacity:0.8;" >
     <p class="text-white"><b><?php echo $this->session->flashdata('error')?></b></p>
   </div>
   <?php endif;?>

  <form action="<?php echo base_url();?>trabajadores/updateTrabajador" method="POST" >
  <div class="form-group">
    <input type="hidden" value="<?php echo $trabajadorEdit->idTrabajador ?>" class="form-control bg-light" placeholder="Id Trabajador" name="txtIdtrabajador" id="txtIdtrabajador">
  </div>
  <form action="/action_page.php">
  <div class="form-group">
    <label for="nombre" class="text-dark"><b>Nombre</b></label>
    <input type="text" value="<?php echo $trabajadorEdit->nombre?>" class="text-primary form-control bg-light" placeholder="Nombre (S)" name="txtnombre" id="txtnombre">
  </div>
  <div class="form-group">
    <label for="apellidos"><b>Apelldios:</b></label>
    <input type="text" value="<?php echo $trabajadorEdit->apellidos?>" class="text-primary form-control bg-light " placeholder="Apelldios completos" name="txtapellidos" id="txtapellidos">
  </div>
  <div class="form-group">
    <label for="telefono"><b>Telefono:</b></label>
    <input type="text"value="<?php echo $trabajadorEdit->telefono?>" class="text-primary form-control bg-light " placeholder="Telefono" name="txtcelular" id="txtcelular">
  </div>
  <div class="form-group">
    <label for="domicilio"><b>Domicilio:</b></label>
    <input type="text"value="<?php echo $trabajadorEdit->domicilio?>" class="text-primary form-control bg-light " placeholder="Domicilio" name="txtdomicilio" id="txtdomicilio">
  </div>
  <div class="form-group">
    <label for="usuario"><b>Usuario:</b></label>
    <input type="text"value="<?php echo $trabajadorEdit->usuario?>" class=" text-primary form-control bg-light " placeholder="Usuario" name="txtusuario" id="txtusuario">
  </div>
  <div class="form-group">
    <label for="contraseña"><b>Contraseña:</b></label>
    <input type="password"value="<?php echo $trabajadorEdit->contraseña?>" class=" text-primary form-control bg-light " placeholder="Contraseña" name="txtcontraseña" id="txtcontraseña">
  </div>
  
   <div class="form-group">
    <label for="rol"><b>Rol</b></label>
    <select name="txtidRol" id="txtidRol" class="text-primary form-control"> 
      <option value="1 " <?php if ($trabajadorEdit->idRol == 1) echo 'selected';?>>Administrador</option>
      <option value="2" <?php if ($trabajadorEdit->idRol == 2) echo 'selected';?>>Vendedor</option>
    </select>
  </div>

   <div class="form-group <?php echo ($trabajadorEdit->estado == 1)? "has-success" : "has-error"; ?>">
    <label for="estado"><b>Estado</b></label>
    <select name="txtEstado" id="txtEstado" class="text-primary form-control"> 
      <option value="1 " <?php if ($trabajadorEdit->estado == 1) echo 'selected';?>>Activo</option>
      <option value="2" <?php if ($trabajadorEdit->estado == 2) echo 'selected';?>>Desactivado</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary" style="width: 100%;"><span class=" icon-write"></span><b>   Actualizar</b></button>
</form>

 </div>
