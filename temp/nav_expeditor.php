<?php
 session_start();
echo'Вы зашли как '.$_SESSION['role'];
 ?>
 <!--================Main Header Area =================-->
 <header class="main_header_area">
	<div class="top_header_area row m0">
	</div>
	<div class="main_menu_area">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="index.php">
				<img src="img/logo.jpg" alt="">
				<img src="img/logo-2.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="my_toggle_menu">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
					<li class="dropdown submenu">
							<a href="list.php">Путевые листы</a>
						</li>
					</ul>
					<ul class="navbar-nav justify-content-end">
						<li><a href="exit.php">Выход</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</header>
<!--================End Main Header Area =================-->