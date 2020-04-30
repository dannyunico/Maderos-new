<section class="main-contacto">
  <div class="container-contacto container">
    <div class="main-contacto__text">
      <p class="text-contacto">
        Te llamamos para darte
      </p>
      <p class="text-contacto2">
        una asesoría completa
      </p>
    </div>
    <div class="formulario-deleted">
      <!-- <form action="">
        <div class="barra-formulario">
          <div> <input class="nombre" type="text" placeholder="Nombre completo"></div>

          <div> <input class="telefono" type="text" placeholder="Telefono"></div>
          <div> <input class="nombre" type="email" placeholder="Email"></div>
        </div>
      </form>
      <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
        <div class="contenedor-boton">
          <a href="#" class="btn_custom btn--medium btn--filled--trans">ENVIAR</a>
        </div>
      </div> -->
      <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>

    </div>
  </div>
</section>