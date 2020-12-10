<div class="table-responsive container-fluid"> 
            <?php if($this->session->flashdata('Correcto')):?>
              <div class="alert alert-success" style="margin: auto;">
                <p class="text-center form-control-danger"><?php echo $this->session->flashdata('correcto')?></p>
              </div>  
              <?php endif; ?>      
        <table id="example1" class="table table-light table-hover ">
          <thead>
              <tr>
                <th class="text-primary text-center">#</th>
                <th class="text-primary text-center">Nombre</th>
                <th class="text-primary text-center">descripcion</th>
                <th class="text-primary text-center">precio</th>
                <th class="text-primary text-center">categoria</th>
                <th class="text-primary text-center">estado</th>
                <th class="text-primary text-center">Opciones</th>
              </tr>
          </thead>
          <tbody>
              <?php if(!empty($productosindex)): ?>
              <?php foreach($productosindex as $atributos):?>
              <tr>
                <td class="text-dark text-center"><b><?php echo $atributos->idProducto?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->nombre?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->descripcion?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->precio?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->nombreCategoria?></b></td>
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
                     <a href="<?php echo base_url();?>productos/editarProductos/<?php echo $atributos->idProducto;?>" class="btn text-white bg-warning"  ><span class="icon-write"></span></a>
                     
                     <a href="<?php echo base_url()?>productos/deleteProductos/<?php echo $atributos->idProducto;?>" class="btn text-white bg-danger" ><span class="icon-squared-cross"></span></a>
                   </div>
                 </td>
              </tr>
            <?php endforeach ?>
          <?php endif; ?>
          </tbody>
        </table>
    </div>
    </div>
