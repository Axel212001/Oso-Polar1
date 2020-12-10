
<div class="container">
    <img id="imgCrud" class="float-left rounded" width="15%" style="margin-top: -2%;" src="<?php echo base_url();?>/asset/img/productos-a-vender.png" alt="">
      <h2 id="tituloCrud" class="justify-content-lg-start text-center" style="margin-top: 4%; margin-bottom: 12%;">ACTUALIZA LOS CAMPOS CORRESPONDIENTES </h2>
</div>
  
 <div class="container container-fluid bg-light" style="margin-top:8%;">
   <?php if($this->session->flashdata('error')):?>
   <div class=" alert bg-danger" style="opacity:0.8;" >
     <p class="text-white"><b><?php echo $this->session->flashdata('error')?></b></p>
   </div>
   <?php endif;?>

  <form action="<?php echo base_url();?>productos/updateProductos" method="POST" >

  <div class="form-group">
    <input type="hidden" value="<?php echo $productoEdit->idProducto ?>" class="form-control bg-light" placeholder="Id del producto" name="txtidProducto" id="txtidProducto">
  </div>

  <form action="/action_page.php">

  <div class="form-group">
    <label for="nombre" class="text-dark"><b>Nombre del producto: </b></label>
    <input type="text" value="<?php echo $productoEdit->nombre?>" class="text-primary form-control bg-light" placeholder="Nombre (S)" name="txtnombreP" id="txtnombreP">
  </div>

  <div class="form-group">
    <label for="apellidos"><b>Descripción: </b></label>
    <input type="text" value="<?php echo $productoEdit->descripcion?>" class="text-primary form-control bg-light " placeholder="Descripción del producto" name="txtdescripcionP" id="txtdescripcionP">
  </div>

  <div class="form-group">
    <label for="telefono"><b>Precio:</b></label>
    <input type="text"value="<?php echo $productoEdit->precio?>" class="text-primary form-control bg-light " placeholder="Precio del producto" name="txtprecio" id="txtprecio">
  

  <div class="form-group">
    <label for="nombre" class="text-dark"><b>Sleccione la categoria:</b></label>
    <select name="txtcategoria" id="txtcategoria" class="form-control selectpicke" data-live-search="true">
      <option value="">....</option>
      <?php foreach ($comboCategoria as $atributos): ?>
        <option value="<?php echo $atributos->idCategoria;?>"><?php echo $atributos->nombre; ?> </option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <label for="iamgen"><b>Selecciona la imagen</b></label>
    <input type="file"  class="text-primary form-control bg-light "  name="txtimagen" id="txtimagen">
  </div>

   <div class="form-group">
    <label for="estado"><b>Estado</b></label>
    <select name="txtEstado" id="txtEstado" class="text-primary form-control"> 
      <option value="1 " <?php if ($productoEdit->estado == 1) echo 'selected';?>>Activo</option>
      <option value="2" <?php if ($productoEdit->estado == 2) echo 'selected';?>>Desactivado</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary" style="width: 100%;"><span class=" icon-write"></span><b>   Actualizar</b></button>
</form>

 </div>
