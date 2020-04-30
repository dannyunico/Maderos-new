<section class="invert-form">
  <div class="invert-form__grid">
    <div class="invert-form__info">
      <div class="mask">
        <h2>Como comprar desde el exterior</h2>
        <a class="btn_custom btn--medium btn--filled--trans" href="">VER PRESENTACIÓN</a>
      </div>
    </div>
    <div class="invert-form__input">
      <div class="main-contactform__box">
        <h2>
          <strong>Quiero recibir
          </strong>
          <br>
          mas información
        </h2>
        <!-- <form action="">
          <div class="form-group">
            <input class="form-control" id="formGroupExampleInput" placeholder="Nombre" type="text">
          </div>
          <div class="form-group">
            <input class="form-control" id="formGroupExampleInput" placeholder="Apellidos" type="text">
          </div>
          <div class="d-flex">
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput2" placeholder="Correo" type="text">
            </div>
            <div class="form-group">
              <input class="form-control" id="formGroupExampleInput2" placeholder="Teléfono" type="tel">
            </div>
          </div>
          <div class="form-group">
            <textarea class="main-contactform__textarea" placeholder="Mensaje" rows="8"></textarea>
          </div>
          <div class="custom-control custom-checkbox my-1 mr-sm-2">
            <input class="custom-control-input" id="customControlInline" type="checkbox">
            <label class="custom-control-label" for="customControlInline">
              Acepto
            </label>
            <a class="main-contactform__textlink" href="#">
              términos y condiciones
            </a>
          </div>
          <div class="main-contactform__btnbox">
            <button class="btn_custom btn--medium btn--filled--red">
              Enviar
            </button>
          </div>
        </form> -->
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
      </div>
    </div>
  </div>
</section>