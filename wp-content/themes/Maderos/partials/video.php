
<section class='main-video' id='video' style='background-image: url(&#39;<?php echo get_template_directory_uri();?>/assets/img/section-03-bg.jpg&#39;);'>
	<h3>Video del proyecto</h3>
	<div class='main-video__trigger' data-target='#videoModal' data-toggle='modal'>
		<img class='wow zoomIn' src='<?php echo get_template_directory_uri();?>/assets/img/iconos/play.png'>
	</div>
</section>
<!-- Modal -->
<div aria-hidden='true' class='modal fade modal-video' id='videoModal' role='dialog' tabindex='-1'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<div class='modal-body'>
				<button aria-label='Close' class='close' data-dismiss='modal' type='button'>
					<span aria-hidden='true' class='fa fa-close'></span>
				</button>
				<video controls=''>
					<source src='<?php echo get_template_directory_uri();?>/assets/img/maderos-del-retiro-constructora-nivel.mp4' type='video/webm'>
					</video>
				</div>
			</div>
		</div>
	</div>