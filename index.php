<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Memória dos candidatos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Anton'>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrap">
<div class="game"></div>
	<div class="modal-overlay">
		<div class="modal">
			<h2 class="winner">Você conseguiu!</h2>
			<button class="restart">Jogar novamente?</button>
			<p class="share-text">compartilhe!</p>
			<ul class="social">
				<?php
					if(isset($_GET['u'])){
						$urlDeCompartilhamento = $_GET['u'];
					}else{
						$urlDeCompartilhamento = "http://blogs.ne10.uol.com.br/torcedor/";
					}
					
					
				?>
				<li><a target="_blank" class="twitter" href="https://twitter.com/share?url=<?php echo $urlDeCompartilhamento; ?>"><span class="fa fa-twitter"></span></a></li>
				<li><a target="_blank" class="facebook" href="https://www.facebook.com/sharer.php?u=<?php echo $urlDeCompartilhamento; ?>"><span class="fa fa-facebook"></span></a></li>
				<li><a target="_blank" class="google" href="https://plus.google.com/share?url=<?php echo $urlDeCompartilhamento; ?>"><span class="fa fa-google"></span></a></li>
			</ul>
		</div>
	</div>
  </div><!-- End Wrap -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>
