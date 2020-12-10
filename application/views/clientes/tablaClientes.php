
<div class="table-responsive container-fluid"> 
            <?php if($this->session->flashdata('correcto')):?>
          <div class=" alert bg-success" style="margin-top: 0%; margin-left: 0%; opacity:0.8;" >
             <p class="text-white"><b><?php echo $this->session->flashdata('correcto')?></b></p>
          </div>
        <?php endif;?>  
        
        <table id="example1" class="table table-light table-hover ">
          <thead>
              <tr>
                <th class="text-primary text-center">#</th>
                <th class="text-primary text-center">Nombre (S) completos</th>
                <th class="text-primary text-center">Apellidos completos</th>
                <th class="text-primary text-center">Usuario</th>
                <th class="text-primary text-center">Correo electronico</th>
                <th class="text-primary text-center">Contraseña</th>
                <th class="text-primary text-center">Estado</th>
                <th class="text-primary text-center">Opciones</th>
              </tr>
          </thead>
          <tbody>
              <?php if(!empty($clientesindex)): ?>
              <?php foreach($clientesindex as $atributos):?>
              <tr>
                <td class="text-dark text-center"><b><?php echo $atributos->idCliente?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->nombre?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->apellidos?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->usuario?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->correo?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->Password?></b></td>
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
                     <a href="<?php echo base_url();?>clientes/editarClientes/<?php echo $atributos->idCliente;?>" class="btn text-white bg-warning"  ><span class="icon-write"></span></a>
                     
                     <a href="<?php echo base_url()?>clientes/deleteClientes/<?php echo $atributos->idCliente;?>" class="btn text-white bg-danger" ><span class="icon-squared-cross"></span></a>
                   </div>
                 </td>
              </tr>
            <?php endforeach ?>
          <?php endif; ?>
          </tbody>
        </table>
    </div>
    </div>
