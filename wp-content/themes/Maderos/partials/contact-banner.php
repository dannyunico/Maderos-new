<section>
	<div class="content-form content-form-b" id="contacto">
		<div class="form__item">
			<p>Te llamamos para darte <br> <span>una asesoría completa</span></p>
		</div>




	</style>
	<div class="form__item">
		<form method="POST" action="https://nivel.activehosted.com/proc.php" id="_form_7_" class="_form _form_7 _inline-form  _dark" novalidate> 
			<div class="row _form-content">
				
				<div class=" col-md-5 col-lg-4 formulario-banner">
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


					<div class="_form_element _x86821064 _full_width " >
						<label class="_form-label">

						</label>
						<div class="_field-wrapper form-group">
							<input class="form-control" type="text" name="fullname" placeholder="Escriba su nombre" />
						</div>
					</div>
					<div class="_form_element _x48647240 _full_width " >
						<label class="_form-label">

						</label>
						<div class="_field-wrapper form-group">
							<input class="form-control" type="text" name="email" placeholder="Escriba su correo electrónico" required/>
						</div>
					</div>
					<div class="_form_element _x80842056 _full_width " >
						<label class="_form-label">

						</label>
						<div class="_field-wrapper form-group">
							<input class="form-control" type="text" name="phone" placeholder="Escriba su número de teléfono" />
						</div>
					</div>
					<div class="_form_element _field1 _full_width " style="display: none;">
						<label class="_form-label">

						</label>
						<div class="_field-wrapper">
							<input class="form-control" type="text" name="field[1]" value="" placeholder="" />
						</div>
					</div>
				</div>
				

				<div class="col-md-6">
					<div class="_form_element _field2 _full_width " >
						<label class="_form-label">

						</label>
						<div class="_field-wrapper form-group">
							<textarea class="form-control" name="field[2]" placeholder="Mensaje"  ></textarea>
						</div>
					</div>
					<div class="_form_element _field4 _full_width " >
						<div class="_row">

						</div>
						<input data-autofill="false" type="hidden" name="field[4][]" value="~|">
						<div class="_row _checkbox-radio">
							<input id="field_4Acepto" type="checkbox" name="field[4][]" value="Acepto"   >
							<span>
								<label for="field_4Acepto">
									Acepto <a target="_blank" href="<?php echo get_template_directory_uri();?>/assets/img/MANUAL_DE_POLITICAS_PROMOTORA.pdf"><span class="politicas-p">politicas y privacidad</span></a>
								</label>
							</span>
						</div>
					</div>
					<div class="_button-wrapper _full_width" >
						<button id="_form_7_submit" class="_submit btn btn-black btn-form btn-form-banner" type="submit">
							Enviar
						</button>
					</div>
					<div class="_clear-element">
					</div>

					<div class="_form-thank-you" style="display:none;">
					</div>
					<div class="_form-branding" style="display: none;">
						<div class="_marketing-by">
							Marketing por
						</div>
						<a href="http://www.activecampaign.com" class="_logo"></a>
					</div>
				</div>
			</div>

		</form>
	</div>
	<script type="text/javascript">
		window.cfields = {"1":"ciudad","2":"mensaje","4":"acepto_polticas_de_privacidad","10":"utmsource","11":"utmmedium","12":"utmcampaign","13":"utmterm"};
		window._show_thank_you = function(id, message, trackcmp_url) {
			var form = document.getElementById('_form_' + id + '_'), thank_you = form.querySelector('._form-thank-you');
			form.querySelector('._form-content').style.display = 'none';
			thank_you.innerHTML = message;
			thank_you.style.display = 'block';
			if (typeof(trackcmp_url) != 'undefined' && trackcmp_url) {
		    // Site tracking URL to use after inline form submission.
		    _load_script(trackcmp_url);
		}
		if (typeof window._form_callback !== 'undefined') window._form_callback(id);
	};
	window._show_error = function(id, message, html) {
		var form = document.getElementById('_form_' + id + '_'), err = document.createElement('div'), button = form.querySelector('button'), old_error = form.querySelector('._form_error');
		if (old_error) old_error.parentNode.removeChild(old_error);
		err.innerHTML = message;
		err.className = '_error-inner _form_error _no_arrow';
		var wrapper = document.createElement('div');
		wrapper.className = '_form-inner';
		wrapper.appendChild(err);
		button.parentNode.insertBefore(wrapper, button);
		document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;
		if (html) {
			var div = document.createElement('div');
			div.className = '_error-html';
			div.innerHTML = html;
			err.appendChild(div);
		}
	};
	window._load_script = function(url, callback) {
		var head = document.querySelector('head'), script = document.createElement('script'), r = false;
		script.type = 'text/javascript';
		script.charset = 'utf-8';
		script.src = url;
		if (callback) {
			script.onload = script.onreadystatechange = function() {
				if (!r && (!this.readyState || this.readyState == 'complete')) {
					r = true;
					callback();
				}
			};
		}
		head.appendChild(script);
	};
	(function() {
		if (window.location.search.search("excludeform") !== -1) return false;
		var getCookie = function(name) {
			var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
			return match ? match[2] : null;
		}
		var setCookie = function(name, value) {
			var now = new Date();
			var time = now.getTime();
			var expireTime = time + 1000 * 60 * 60 * 24 * 365;
			now.setTime(expireTime);
			document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
		}
		var addEvent = function(element, event, func) {
			if (element.addEventListener) {
				element.addEventListener(event, func);
			} else {
				var oldFunc = element['on' + event];
				element['on' + event] = function() {
					oldFunc.apply(this, arguments);
					func.apply(this, arguments);
				};
			}
		}
		var _removed = false;
		var form_to_submit = document.getElementById('_form_7_');
		var allInputs = form_to_submit.querySelectorAll('input, select, textarea'), tooltips = [], submitted = false;

		var getUrlParam = function(name) {
			var regexStr = '[\?&]' + name + '=([^&#]*)';
			var results = new RegExp(regexStr, 'i').exec(window.location.href);
			return results != undefined ? decodeURIComponent(results[1]) : false;
		};

		for (var i = 0; i < allInputs.length; i++) {
			var regexStr = "field\\[(\\d+)\\]";
			var results = new RegExp(regexStr).exec(allInputs[i].name);
			if (results != undefined) {
				allInputs[i].dataset.name = window.cfields[results[1]];
			} else {
				allInputs[i].dataset.name = allInputs[i].name;
			}
			var fieldVal = getUrlParam(allInputs[i].dataset.name);

			if (fieldVal) {
				if (allInputs[i].dataset.autofill === "false") {
					continue;
				}
				if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
					if (allInputs[i].value == fieldVal) {
						allInputs[i].checked = true;
					}
				} else {
					allInputs[i].value = fieldVal;
				}
			}
		}

		var remove_tooltips = function() {
			for (var i = 0; i < tooltips.length; i++) {
				tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
			}
			tooltips = [];
		};
		var remove_tooltip = function(elem) {
			for (var i = 0; i < tooltips.length; i++) {
				if (tooltips[i].elem === elem) {
					tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
					tooltips.splice(i, 1);
					return;
				}
			}
		};
		var create_tooltip = function(elem, text) {
			var tooltip = document.createElement('div'), arrow = document.createElement('div'), inner = document.createElement('div'), new_tooltip = {};
			if (elem.type != 'radio' && elem.type != 'checkbox') {
				tooltip.className = '_error';
				arrow.className = '_error-arrow';
				inner.className = '_error-inner';
				inner.innerHTML = text;
				tooltip.appendChild(arrow);
				tooltip.appendChild(inner);
				elem.parentNode.appendChild(tooltip);
			} else {
				tooltip.className = '_error-inner _no_arrow';
				tooltip.innerHTML = text;
				elem.parentNode.insertBefore(tooltip, elem);
				new_tooltip.no_arrow = true;
			}
			new_tooltip.tip = tooltip;
			new_tooltip.elem = elem;
			tooltips.push(new_tooltip);
			return new_tooltip;
		};
		var resize_tooltip = function(tooltip) {
			var rect = tooltip.elem.getBoundingClientRect();
			var doc = document.documentElement, scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0));
			if (scrollPosition < 40) {
				tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
			} else {
				tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
			}
		};
		var resize_tooltips = function() {
			if (_removed) return;
			for (var i = 0; i < tooltips.length; i++) {
				if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
			}
		};
		var validate_field = function(elem, remove) {
			var tooltip = null, value = elem.value, no_error = true;
			remove ? remove_tooltip(elem) : false;
			if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');
			if (elem.getAttribute('required') !== null) {
				if (elem.type == 'radio' || (elem.type == 'checkbox' && /any/.test(elem.className))) {
					var elems = form_to_submit.elements[elem.name];
					if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
						no_error = elem.checked;
					}
					else {
						no_error = false;
						for (var i = 0; i < elems.length; i++) {
							if (elems[i].checked) no_error = true;
						}
					}
					if (!no_error) {
						tooltip = create_tooltip(elem, "Seleccione una opción.");
					}
				} else if (elem.type =='checkbox') {
					var elems = form_to_submit.elements[elem.name], found = false, err = [];
					no_error = true;
					for (var i = 0; i < elems.length; i++) {
						if (elems[i].getAttribute('required') === null) continue;
						if (!found && elems[i] !== elem) return true;
						found = true;
						elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');
						if (!elems[i].checked) {
							no_error = false;
							elems[i].className = elems[i].className + ' _has_error';
							err.push("Es necesario verificar %s".replace("%s", elems[i].value));
						}
					}
					if (!no_error) {
						tooltip = create_tooltip(elem, err.join('<br/>'));
					}
				} else if (elem.tagName == 'SELECT') {
					var selected = true;
					if (elem.multiple) {
						selected = false;
						for (var i = 0; i < elem.options.length; i++) {
							if (elem.options[i].selected) {
								selected = true;
								break;
							}
						}
					} else {
						for (var i = 0; i < elem.options.length; i++) {
							if (elem.options[i].selected && !elem.options[i].value) {
								selected = false;
							}
						}
					}
					if (!selected) {
						elem.className = elem.className + ' _has_error';
						no_error = false;
						tooltip = create_tooltip(elem, "Seleccione una opción.");
					}
				} else if (value === undefined || value === null || value === '') {
					elem.className = elem.className + ' _has_error';
					no_error = false;
					tooltip = create_tooltip(elem, "Este campo es obligatorio.");
				}
			}
			if (no_error && elem.name == 'email') {
				if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
					elem.className = elem.className + ' _has_error';
					no_error = false;
					tooltip = create_tooltip(elem, "Introduzca una dirección de correo electrónico válida.");
				}
			}
			if (no_error && /date_field/.test(elem.className)) {
				if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
					elem.className = elem.className + ' _has_error';
					no_error = false;
					tooltip = create_tooltip(elem, "Introduzca una fecha válida.");
				}
			}
			tooltip ? resize_tooltip(tooltip) : false;
			return no_error;
		};
		var needs_validate = function(el) {
			return el.name == 'email' || el.getAttribute('required') !== null;
		};
		var validate_form = function(e) {
			var err = form_to_submit.querySelector('._form_error'), no_error = true;
			if (!submitted) {
				submitted = true;
				for (var i = 0, len = allInputs.length; i < len; i++) {
					var input = allInputs[i];
					if (needs_validate(input)) {
						if (input.type == 'text') {
							addEvent(input, 'blur', function() {
								this.value = this.value.trim();
								validate_field(this, true);
							});
							addEvent(input, 'input', function() {
								validate_field(this, true);
							});
						} else if (input.type == 'radio' || input.type == 'checkbox') {
							(function(el) {
								var radios = form_to_submit.elements[el.name];
								for (var i = 0; i < radios.length; i++) {
									addEvent(radios[i], 'click', function() {
										validate_field(el, true);
									});
								}
							})(input);
						} else if (input.tagName == 'SELECT') {
							addEvent(input, 'change', function() {
								validate_field(this, true);
							});
						} else if (input.type == 'textarea'){
							addEvent(input, 'input', function() {
								validate_field(this, true);
							});
						}
					}
				}
			}
			remove_tooltips();
			for (var i = 0, len = allInputs.length; i < len; i++) {
				var elem = allInputs[i];
				if (needs_validate(elem)) {
					if (elem.tagName.toLowerCase() !== "select") {
						elem.value = elem.value.trim();
					}
					validate_field(elem) ? true : no_error = false;
				}
			}
			if (!no_error && e) {
				e.preventDefault();
			}
			resize_tooltips();
			return no_error;
		};
		addEvent(window, 'resize', resize_tooltips);
		addEvent(window, 'scroll', resize_tooltips);
		window._old_serialize = null;
		if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;
		_load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function() {
			window._form_serialize = window.serialize;
			if (window._old_serialize) window.serialize = window._old_serialize;
		});
		var form_submit = function(e) {
			e.preventDefault();
			if (validate_form()) {
		      // use this trick to get the submit button & disable it using plain javascript
		      document.querySelector('#_form_7_submit').disabled = true;
		      var serialized = _form_serialize(document.getElementById('_form_7_'));
		      var err = form_to_submit.querySelector('._form_error');
		      err ? err.parentNode.removeChild(err) : false;
		      _load_script('https://nivel.activehosted.com/proc.php?' + serialized + '&jsonp=true');
		  }
		  return false;
		};
		addEvent(form_to_submit, 'submit', form_submit);
	})();

</script>
			<!-- <div class="form__item">
				<form action="#">
					<div class="row">
						<div class="col-md-5 col-lg-4 formulario-banner">
							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<input type="text" id="fname" class="form-control "
										placeholder="Nombre completo*" />
								</div>

							</div>

							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<input type="text" id="fname" class="form-control " placeholder="Teléfono*" />
								</div>

							</div>

							<div class="row form-group">
								<div class="col-md-12 mb-3 mb-md-0">
									<input type="text" id="fname" class="form-control " placeholder="Email*" />
								</div>

							</div>



						</div>
						<div class="col-md-6">
							<div class="row form-group m-0">
								<div class="col-md-12 p-0">
									<textarea name="message" id="message" cols="50"  class="form-control barra-text"
										placeholder="Comentarios"></textarea>
								</div>
							</div>
							<div class="col-md-12 center pl-4 pt-1 pb-1">
								<input type="checkbox" class="custom-control-input " id="customCheck" name="example1" />
								<label class="custom-control-label" for="customCheck">Acepto <a target="_blank" href="<?php echo get_template_directory_uri();?>/assets/img/MANUAL_DE_POLITICAS_PROMOTORA.pdf"><span>politicas y
									privacidad</span></a></label>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<input type="submit" value="Enviar " class="btn btn-black btn-form " />
								</div>
							</div>
						</div>
					</div>


				</form> -->
			</div>
		</div>
	</section>