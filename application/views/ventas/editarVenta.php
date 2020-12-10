
<div class="container">
    <img id="imgCrud" class="float-left rounded" width="15%" style="margin-top: -2%;" src="<?php echo base_url();?>/asset/img/ventas-logo.png" alt="">
      <h2 id="tituloCrud" class="justify-content-lg-start text-center" style="margin-top: 4%; margin-bottom: 12%;">ACTUALIZA LOS CAMPOS CORRESPONDIENTES </h2>
</div>
  
 <div class="container container-fluid bg-light" style="margin-top:8%;">
   <?php if($this->session->flashdata('error')):?>
   <div class=" alert bg-danger" style="opacity:0.8;" >
     <p class="text-white"><b><?php echo $this->session->flashdata('error')?></b></p>
   </div>
   <?php endif;?>

  <form action="<?php echo base_url();?>ventas/updateVentas" method="POST" >

    <div class="form-group">
    <label for="nombre" class="text-dark"><b>Nombre del producto:</b></label>
    <select name="txtProducto" id="txtProducto" class="form-control selectpicke" data-live-search="true">
      <option value="">....</option>
      <?php foreach ($comboProductos as $atributos): ?>
        <option value="<?php echo $atributos->idProducto;?>"><?php echo $atributos->nombre; ?> </option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <label for="nombre" class="text-dark"><b>Nombre del cliente:</b></label>
    <select name="txtCliente" id="txtCliente" class="form-control selectpicke" data-live-search="true">
      <option value="">....</option>
      <?php foreach ($comboClientes as $atributos): ?>
        <option value="<?php echo $atributos->idCliente;?>"><?php echo $atributos->nombre; ?> </option>
      <?php endforeach ?>
    </select>
  </div>

   <div class="form-group">
    <label for="nombre" class="text-dark"><b>Numero identifiacdor del cliente: </b></label>
    <input type="text" value="<?php echo $ventaEdit->idCliente?>" class="text-primary form-control bg-light" placeholder="Numero identifiacdor del cliente" name="txtidCliente" id="txtidCliente">
  </div>

  <div class="form-group">
    <label for="apellidos"><b>Fecha que se efectuo la venta: </b></label>
    <input type="date" value="<?php echo $ventaEdit->fecha?>" class="text-primary form-control bg-light " placeholder="Fecha que se efectuo la venta" name="txtFecha" id="txtFecha">
  </div>

  <div class="form-group">
    <label for="telefono"><b>Cantidad a llevar:</b></label>
    <input type="text"value="<?php echo $ventaEdit->cantidad?>" class="text-primary form-control bg-light " placeholder="Cantidad a llevar" name="txtCantidad" id="txtCantidad">
  </div>
  <div class="form-group">
    <label for="total"><b>Total a pagar: </b></label>
    <input type="text"value="<?php echo $ventaEdit->total?>" class="text-primary form-control bg-light " placeholder="Total a pagar" name="txtTotal" id="txtTotal">
  </div>
  

   <div class="form-group">
    <label for="estado"><b>Estado</b></label>
    <select name="txtEstado" id="txtEstado" class="text-primary form-control"> 
      <option value="1 " <?php if ($ventaEdit->estado == 1) echo 'selected';?>>Activo</option>
      <option value="2" <?php if ($ventaEdit->estado == 2) echo 'selected';?>>Desactivado</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary" style="width: 100%;"><span class=" icon-write"></span><b>   Actualizar</b></button>
</form>

 </div>
