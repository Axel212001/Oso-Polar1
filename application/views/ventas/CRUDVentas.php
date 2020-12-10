  		<div class="curdUsuario container">
    			<a style="font-size: 20px; width: 50%;" href="<?php echo base_url();?>ventas/viewInsert"  type="submit" class="btn btn-primary btn-block">Nueva Venta</a>
          
  		</div>
      <?php if($this->session->flashdata('correcto')):?>
          <div class=" alert bg-success" style="margin-top: 5%; margin-left: 0%; opacity:0.8;" >
             <p class="text-white"><b><?php echo $this->session->flashdata('correcto')?></b></p>
          </div>
        <?php endif;?>