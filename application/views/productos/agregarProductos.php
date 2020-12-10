
<div class="container">
    <img id="imgCrud" class="float-left rounded" width="15%" style="margin-top: -2%;" src="<?php echo base_url();?>/asset/img/productos-a-vender.png" alt="">
      <h2 id="tituloCrud" class="justify-content-lg-start text-center" style="margin-top: 4%; margin-bottom: 12%;">INGRESA LOS DATOS EN LOS CAMPOS SIGUIENTES </h2>
</div>
  
 <div class="container container-fluid bg-light" style="margin-top:8%;">
   <?php if($this->session->flashdata('error')):?>
   <div class=" alert bg-danger" style="opacity:0.8;" >
     <p class="text-white"><b><?php echo $this->session->flashdata('error')?></b></p>
   </div>
   <?php endif;?>

  <form action="<?php echo base_url();?>productos/insertProductos" method="POST" enctype="multipart/form-data" >

  <div class="form-group">
    <input type="hidden"  class="form-control bg-light" placeholder="Id del producto" name="txtidProducto" id="txtidProducto">
  </div>

  <div class="form-group">
    <label for="nombre" class="text-dark"><b>Nombre del producto: </b></label>
    <input type="text" class="text-primary form-control bg-light" placeholder="Nombre (S)" name="txtnombreP" id="txtnombreP">
  </div>

  <div class="form-group">
    <label for="apellidos"><b>Descripción: </b></label>
    <input type="text"  class="text-primary form-control bg-light " placeholder="Descripción del producto" name="txtdescripcionP" id="txtdescripcionP">
  </div>

  <div class="form-group">
    <label for="telefono"><b>Precio:</b></label>
    <input type="text"  class="text-primary form-control bg-light " placeholder="Precio del producto" name="txtprecio" id="txtprecio">
  </div>

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

  <button type="submit" class="btn btn-primary" style="width: 100%;"><span class=" icon-plus"></span><b>   Registrar producto</b></button>
</form>

 </div>
