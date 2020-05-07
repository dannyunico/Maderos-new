<section class="gallery-grid p-50" >
	<div class="main-galery">
		<div class="title-general">
			<h3>Galería</h3>
			<hr>
		</div>
		<div class="container-fluid">




			<div class="main-mansory-grid">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/about.png" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
				<img src="<?php echo get_template_directory_uri();?>/assets/img/icono-zona/1.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">

			</div>

			<div id="myModal" class="modal">


				<div class="modal-content">
					<button aria-label='Close' class='close' data-dismiss='modal' type='button' onclick="closeModal()">
						<span aria-hidden='true' class='fa fa-close'></span>
					</button>

					<div class="mySlides">
						<!-- <div class="numbertext">1 / 4</div> -->
						<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/1.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<!-- <div class="numbertext">2 / 4</div> -->
						<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/2.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<!-- <div class="numbertext">3 / 4</div> -->
						<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/3.jpg" style="width:100%">
					</div>

					<div class="mySlides">
						<!-- <div class="numbertext">4 / 4</div> -->
						<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/4.jpg" style="width:100%">
					</div>
					<div class="mySlides">
						<!-- <div class="numbertext">2 / 4</div> -->
						<img src="<?php echo get_template_directory_uri();?>/assets/img/galeria/5.jpg" style="width:100%">
					</div>
					<div class="mySlides">
						<!-- <div class="numbertext">4 / 4</div> -->
						<img src="<?php echo get_template_directory_uri();?>/assets/img/about.png" style="width:100%">
					</div>
					<div class="mySlides">
						<!-- <div class="numbertext">2 / 4</div> -->
						<img src="<?php echo get_template_directory_uri();?>/assets/img/icono-zona/1.jpg" style="width:100%">
					</div>



					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

		

		</div>
	</div>
<div  id="avances-obra"></div>
<div class="imagenes-360">
	<div class="title-general">
		<h3>Recorrido 360</h3>
		<hr>
	</div>
	<iframe class="mt-3" src="https://my.matterport.com/show/?m=sAVdS7YBtpE" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>

</section>