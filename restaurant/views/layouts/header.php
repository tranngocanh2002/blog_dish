<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Thời gian mở cửa:</span> <span>Thứ 2 - Chủ nhật</span> <span>8:00AM - 9:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Feliciano</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<?php
					if (isset($_GET['controller'])) {
						$check = $_GET['controller'];
						$check_product ='';
						$check_contact ='';
						$check_home ='';
						if ($check == 'product') {
							$check_product = "active";
						} elseif ($check == 'contact') {
							$check_contact = "active";
						}
					} else {
						$check_home = "active";
					}
				?>
	        	<li class="nav-item <?php echo $check_home?>"><a href="index.php" class="nav-link">Trang chủ</a></li>
	        	<!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li> -->
	        	<!-- <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li> -->
	        	<li class="nav-item <?php echo $check_product?>"><a href="index.php?controller=product&action=index" class="nav-link">Blog</a></li>
				<li class="nav-item <?php echo $check_contact?>"><a href="index.php?controller=contact&action=index" class="nav-link">Liên hệ</a></li>
	          <!-- <li class="nav-item cta"><a href="reservation.html" class="nav-link">Book a table</a></li> -->
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->