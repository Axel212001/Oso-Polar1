<div class="curdUsuario container">

          <a style="width: 50%; font-size: 18px;" href="<?php echo base_url();?>productos/viewInsert"  type="submit" class=" btn btn-primary btn-block">Nuevo Producto</a>
       
        </div>
         <?php if($this->session->flashdata('correcto')):?>
          <div class=" alert bg-success" style="margin-top: 5%; margin-left: 0%; opacity:0.8;" >
             <p class="text-white"><b><?php echo $this->session->flashdata('correcto')?></b></p>
          </div>
        <?php endif;?>