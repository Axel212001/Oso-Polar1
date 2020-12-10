<div class="curdUsuario container">
    			<button href="#addUser" style="width: 50%; font-size: 18px;" data-toggle="modal" type="button" class=" btn btn-primary btn-block"> Nuevo Usuario</button>
    			<div id="addUser" style="opacity:0.95;" class=" modal fade">
                		<div class="modal-dialog">
                  			<div class="modal-content">
                    			<div  class="header-form">
                        			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        			<h4 class="modal-title text-center" style="margin-top: 3%;">INGRESA LOS DATOS DEL TRABAJADOR</h4>
                       				<img style="padding: 3%;" width="38%" class="float-left" src="<?php echo base_url();?>/asset/img/usuario.png" alt="">
                    			</div>
                          <div class="login-box-body ">
                      <?php if($this->session->flashdata('error')):?>
                      <div class="alert alert-danger" style="margin: auto;">
                        <p class="text-center form-control-danger"><?php echo $this->session->flashdata('error')?></p>
                      </div>
                    <?php endif; ?>
                          <form action="<?php echo base_url();?>trabajadores/insertTrabajador" method='POST'>
                    		<div class="modal-body input-user ">
                      			<div class=" row  body-login">
                          			<div class="col">
                              			<input type="text" class="form-control espacio input-usuario" placeholder="Nombre (s)" name="txtnombre" id="txtnombre">
                              			<input type="text" class="form-control espacio input-usuario" placeholder="Apellidos" name="txtapellidos" id="txtapellidos">
                                    <input type="text" class="form-control espacio input-usuario" placeholder="Telefono" name="txtcelular" id="txtcelular">
                                    <input type="text" class="form-control espacio input-usuario" placeholder="Domicilio" name="txtdomicilio" id="txtdomicilio">
                                    <input type="text" class="form-control espacio input-usuario" placeholder="Usuario" name="txtusuario" id="txtusuario">
                          			</div>
                        		</div>
                            <div class="body-login">
                              <div class="col">
                              <input type="text" style="width:55%;" class="form-control input-usuario2 " placeholder="Contraseña" name="txtcontraseña" id="txtcontraseña">
                              <input type="text" style="width: 40%;" class="float-right form-control espacio input-usuario3" placeholder="Rol" name="txtrol" id="txtrol">
                             
                          </div>
                            </div>  
                    		</div>      
                  			<div class="botones-login">
                      			<button type="submit" class="btn" id="registrar-usuario" style="width: 100%;" >Registrar usuario</button>
                            
                  			</div>
                        </form>
                		</div>
                      </div>
              		</div>
            </div>
  		</div>
             <?php if($this->session->flashdata('correcto')):?>
   <div class=" alert bg-success" style="margin-top: 5%; margin-left: 0%; opacity:0.8;" >
     <p class="text-white"><b><?php echo $this->session->flashdata('correcto')?></b></p>
   </div>
   <?php endif;?>