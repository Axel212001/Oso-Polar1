<div class="table-responsive container container-fluid">

            <?php if($this->session->flashdata('Correcto')):?>
              <div class="alert alert-success" style="margin: auto;">
                <p class="text-center form-control-danger"><?php echo $this->session->flashdata('correcto')?></p>
              </div>  
              <?php endif; ?>      
        <table id="example1" class="table table-light table-hover ">
          <thead>
              <tr>
                <th class="text-primary text-center">#</th>
                <th class="text-primary text-center">Nombre del producto</th>
                <th class="text-primary text-center">Nombre del cliente</th>
                <th class="text-primary text-center">fecha que realizo la compra</th>
                <th class="text-primary text-center">cantidad</th>
                <th class="text-primary text-center">total a pagar</th>
                <th class="text-primary text-center">estado</th>
                <th class="text-primary text-center">opciones</th>
              </tr>
          </thead>
          <tbody>
              <?php if(!empty($ventasindex)): ?>
              <?php foreach($ventasindex as $atributos):?>
              <tr>
                <td class="text-dark text-center"><b><?php echo $atributos->idVenta?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->nombreProducto?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->nombreCliente?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->fecha?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->cantidad?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->total?></b></td>
                <td class="text-dark text-center"><b>
                  <?php 
                      if ($atributos->estado == 1) {
                        $style='class="label label-success"';
                        echo "<p><span $style><font style='vertical-align: inherit;'>Activado</font></span></p>";
                      }else{
                        $style='class="label label-danger"';
                        echo "<p><span $style><font style='vertical-align: inherit;'>Desactivado</font></span></p>";
                      }
                   ?>
                 </b>
                </td>
                 <td>
                   <div class="btn-group">
                     <a href="<?php echo base_url();?>ventas/editarVentas/<?php echo $atributos->idVenta;?>" class="btn text-white bg-warning"  ><span class="icon-write"></span></a>
                     
                     <a href="<?php echo base_url()?>ventas/deleteVentas/<?php echo $atributos->idVenta;?>" class="btn text-white bg-danger" ><span class="icon-squared-cross"></span></a>
                   </div>
                 </td>
              </tr>
            <?php endforeach ?>
          <?php endif; ?>
          </tbody>
        </table>
    </div>
    </div>
