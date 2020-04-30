<div>
  

  <form method="POST" action="https://nivel.activehosted.com/proc.php" id="_form_7_" class="_form _form_7 _inline-form  _dark" novalidate>
    <input type="hidden" name="u" value="7" />
    <input type="hidden" name="f" value="7" />
    <input type="hidden" name="s" />
    <input type="hidden" name="c" value="0" />
    <input type="hidden" name="m" value="0" />
    <input type="hidden" name="act" value="sub" />
    <input type="hidden" name="v" value="2" />
    
    <!-- utm source -->
    <input type="hidden" name="field[10]" value="<?php echo $_GET['utm_source']; ?>"/>
    <!-- utm medium -->
    <input type="hidden" name="field[11]" value="<?php echo $_GET['utm_medium']; ?>"/>
    <!-- utm campaign -->
    <input type="hidden" name="field[12]" value="<?php echo $_GET['utm_campaign']; ?>"/>
    <!-- utm term -->
    <input type="hidden" name="field[13]" value="<?php echo $_GET['utm_term']; ?>"/>
    <!-- referrer url -->
    <input type="hidden" name="field[14]" value="<?php echo $_SERVER['HTTP_REFERER']; ?>"/>


    <div class="_form-content">
      <div class="_form_element _x86821064 _full_width " >
        <label class="_form-label">

        </label>
        <div class="_field-wrapper">
          <input type="text" name="fullname" placeholder="Nombre *" />
        </div>
      </div>
      <div class="_form_element _x48647240 _full_width " >
        <label class="_form-label">

        </label>
        <div class="_field-wrapper">
          <input type="text" name="email" placeholder="Correo electrónico *" required/>
        </div>
      </div>
      <div class="_form_element _x80842056 _full_width " >
        <label class="_form-label">

        </label>
        <div class="_field-wrapper">
          <input type="text" name="phone" placeholder="Teléfono *" />
        </div>
      </div>
      <div class="_form_element _field1 _full_width " >
        <label class="_form-label">

        </label>
        <div class="_field-wrapper">
          <input type="text" name="field[1]" value="" placeholder="Ciudad" />
        </div>
      </div>
      <div class="_form_element _field2 _full_width " >
        <label class="_form-label">

        </label>
        <div class="_field-wrapper form-group">
          <textarea name="field[2]" placeholder="Comentario "  ></textarea>
        </div>
      </div>
      <div class="_form_element _field4 _full_width " >
        <div class="_row">
          <label class="_form-label">

          </label>
        </div>
        <input data-autofill="false" type="hidden" name="field[4][]" value="~|">
        <div class="_row _checkbox-radio">
          <input id="field_4Acepto2" type="checkbox" name="field[4][]" value="Acepto"   >
          <span>
            <label for="field_4Acepto2">
              Acepto <a target="_blank" href="<?php echo get_template_directory_uri();?>/assets/img/MANUAL_DE_POLITICAS_PROMOTORA.pdf"><span class="politicas-p">politicas y privacidad</span></a>
            </label>
          </span>
        </div>
      </div>
      <div class="_button-wrapper _full_width form-group">
        <button id="_form_8_submit" class="_submit btn btn-black btn-form btn-form--w btn-border" type="submit">
          Enviar
        </button>
      </div>
      <div class="_clear-element">
      </div>
    </div>
    <div class="_form-thank-you" style="display:none;">
    </div>
    <div class="_form-branding" style="display: none;">
      <div class="_marketing-by" style="">
        Marketing por
      </div>
      <a href="http://www.activecampaign.com" class="_logo"></a>
    </div>
  </form>
</div>