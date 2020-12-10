<div>
  <img src="<?php echo base_url();?>asset/img/tv.jpg" width="100%">
</div>
<div>
  <h1>TV Y VÍDEO</h1>
</div>
<?php if(!empty($productosindex)): ?>
<?php foreach($productosindex as $atributos):?>
<div id="masVendido1"  class="card border-primary" style="width: 18rem;">
      <img class="card-img-top" src=" <?php echo $atributos->imagen?>" alt="Card image cap">
      <h6 class="card-title"><?php echo $atributos->nombre ?></h6>
      <hr>
      <div class="card-body">
        <p id="precio" class="card-text "><b>$ <?php echo $atributos->precio?></b></p>
        <a href="<?php echo base_url();?>Inicio/producto5" id="vermas-principal" class="btn btn-primary">Ver más</a>
      </div>
  </div>
  <?php endforeach ?>
<?php endif; ?>