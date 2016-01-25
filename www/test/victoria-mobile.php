<?php $thispage="fraccionamiento" ?>
<?php include('header-mobile.php'); ?>
<div class="wrapper fraccionamiento victoria">
	
	<div class="banner"></div>

	<div class="container center spacing">
		<h1 class="title orange">CERRADA VICTORIA</h1>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="carousel-caption center-block">
						<div class="col-xs-4 img-spacing">
							<a class="colorbox-fade cboxElement" href="img/victoria/01.jpg"><img class="img-responsive center-block" src="img/victoria/1.jpg" alt=""></a>
						</div>
						<div class="col-xs-4 img-spacing">
							<a class="colorbox-fade cboxElement" href="img/victoria/02.jpg"><img class="img-responsive center-block" src="img/victoria/2.jpg" alt=""></a>
						</div>
						<div class="col-xs-4 img-spacing">
							<a class="colorbox-fade cboxElement" href="img/victoria/03.jpg"><img class="img-responsive center-block" src="img/victoria/3.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="carousel-caption center-block">
						<div class="col-xs-4 img-spacing">
							<a class="colorbox-fade cboxElement" href="img/victoria/04.jpg"><img class="img-responsive center-block" src="img/victoria/4.jpg" alt=""></a>
						</div>
						<div class="col-xs-4 img-spacing">
							<a class="colorbox-fade cboxElement" href="img/victoria/05.jpg"><img class="img-responsive center-block" src="img/victoria/5.jpg" alt=""></a>
						</div>
						<div class="col-xs-4 img-spacing">
							<a class="colorbox-fade cboxElement" href="img/victoria/06.jpg"><img class="img-responsive center-block" src="img/victoria/6.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="carousel-caption center-block">
						<div class="col-xs-4 img-spacing"></div>
						<div class="col-xs-4 img-spacing">
							<a class="colorbox-fade cboxElement" href="img/victoria/07.jpg"><img class="img-responsive center-block" src="img/victoria/7.jpg" alt=""></a>
						</div>
						<div class="col-xs-4 img-spacing"></div>
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<div class="modelos spacing" id="modelos">
		<div class="container center">
			<h1 class="title light-black">MODELOS</h1>
			<p class="text-content">En <span class="orange">DEXE</span>, desarrollamos espacios de que se adaptan a tus necesidades, te invitamos a conocer nuestros modelos.</p>
			<div class="row models-container">
				<div class="col-sm-4">
					<img class="no-drag" src="img/index/modelos/cambridge.png" alt="Cambridge">
					<h2 class="title purple">CAMBRIDGE</h2>
					<p class="text-content">Terreno 120 m2 / Const. 166 m2</p>
					<a class="center-block purple-btn" href="pdf/victoria/cambridge.pdf" target="_self" download>Ver PDF</a>
				</div>
				<div class="col-sm-4">
					<img class="no-drag" src="img/index/modelos/oxford.png" alt="Oxford">
					<h2 class="title green">OXFORD</h2>
					<p class="text-content">Terreno 120 m2 / Const. 166 m2</p>
					<a class="center-block green-btn" href="pdf/victoria/oxford.pdf" target="_system" download>Ver PDF</a>
				</div>
				<div class="col-sm-4">
					<img class="no-drag" src="img/index/modelos/sheffield.png" alt="Sheffield">
					<h2 class="title orange">SHEFFIELD</h2>
					<p class="text-content">Terreno 120 m2 / Const. 166 m2</p>
					<a class="center-block orange-btn" href="http://mixen.mx/web/dexe/pdf/victoria/sheffield.pdf" onclick="window.open('http://mixen.mx/web/dexe/pdf/victoria/sheffield.pdf', 'location=yes')">Ver PDF</a>
				</div>
			</div>
		</div>
	</div>

	<!-- VIDEO -->
	<!--
	<div class="video container center spacing">
		<h1 class="title orange">VIDEO</h1>
		<div class="video-container">
			<img href="#video-modal" data-toggle="modal" data-target="#video-modal" class="" src="img/index/icons/play2.png" alt="Play">
		</div>
	</div>
	<div id="video-modal" class="modal fade video-modal" role="dialog">
		<div class="modal-dialog video">
			<div class="modal-content">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/pghnJ6j4LXE" frameborder="0" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>
	<!-- VIDEO -->

	<div class="map" id="googleMap" fracc="victoria"></div>
</div>
<?php include('footer.php'); ?>