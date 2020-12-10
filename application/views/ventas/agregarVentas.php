
<div class="container">
    <img id="imgCrud" class="float-left rounded" width="15%" style="margin-top: -2%;" src="<?php echo base_url();?>/asset/img/ventas-logo.png" alt="">
      <h2 id="tituloCrud" class="justify-content-lg-start text-center" style="margin-top: 4%; margin-bottom: 12%;">INGRESA LOS DATOS DE LA VENTA </h2>
</div>
  
 <div class="container container-fluid bg-light" style="margin-top:8%;">
   <?php if($this->session->flashdata('error')):?>
   <div class=" alert bg-danger" style="opacity:0.8;" >
     <p class="text-white"><b><?php echo $this->session->flashdata('error')?></b></p>
   </div>
   <?php endif;?>

  <form action="<?php echo base_url();?>ventas/insertVentas" method="POST" >

  <div class="form-group">
    <input type="hidden" value="" class="form-control bg-light" placeholder="Id del producto" name="txtidVenta" id="txtidVenta">
  </div>


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
    <label for="apellidos"><b>Fecha que se efectuo la venta: </b></label>
    <input type="date" value="" class="text-primary form-control bg-light " placeholder="Fecha que se efectuo la venta" name="txtFecha" id="txtFecha">
  </div>

  <div class="form-group">
    <label for="telefono"><b>Cantidad a llevar:</b></label>
    <input type="text"value="" class="text-primary form-control bg-light " placeholder="Cantidad a llevar" name="txtCantidad" id="txtCantidad">
  </div>
  <div class="form-group">
    <label for="total"><b>Total a pagar: </b></label>
    <input type="text"value="" class="text-primary form-control bg-light " placeholder="Total a pagar" name="txtTotal" id="txtTotal">
  </div>
  <button type="submit" class="btn btn-primary" style="width: 100%;"><span class=" icon-plus"></span><b> Registrar venta</b></button>
</form>

 </div>
