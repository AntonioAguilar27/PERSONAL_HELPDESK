<header class="site-header">
	    <div class="container-fluid">
	
	        <a href="#" class="site-logo">
	            <img class="hidden-md-down" src="../../public/img/logo-2.png" alt="">
	            <img class="hidden-lg-up" src="../../public/img/logo-2-mob.png" alt="">
	        </a>
	
	        <button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
	            <span>toggle menu</span>
	        </button>
	
	        <button class="hamburger hamburger--htla">
	            <span>toggle menu</span>
	        </button>
	        <div class="site-header-content">
	            <div class="site-header-content-in">
	                <div class="site-header-shown">
					<div class="dropdown user-menu">
	                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                            <img src="../../public/img/avatar-2-64.png" alt="">
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-user"></span>Profile</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-cog"></span>Settings</a>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Help</a>
	                            <div class="dropdown-divider"></div>
	                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-log-out"></span>Logout</a>
	                        </div>
	                    </div>
	                </div>

						<div class="mobile-menu-right-overlay"></div>
						<!-- <input type="hidden" id="usercli_idx" value="<?php echo $_SESSION["CLI_ID"] ?>"> -->
						<!-- <input type="hidden" id="usercli_idx" value="<?php echo $_SESSION["CON_ID"] ?>">  -->
		
						<div class="dropdown dropdown-typical">
							<a href="#" class="dropdown-toggle no-arr">
								<span class="font-icon font-icon-home"></span>
								<!-- <span class="lblclientenomx"><?php echo $_SESSION["CLI_NOM"] ?> <span/> -->
							</a>
						</div>

						<div class="dropdown dropdown-typical">
							<a href="#" class="dropdown-toggle no-arr">
								<span class="font-icon font-icon-user"></span>
								<!-- <span class="lblclientenomx"><?php echo $_SESSION["CON_NOM"] ?> <span/> -->
							</a>
						</div>

						<div class="dropdown dropdown-typical">
							<a href="#" class="dropdown-toggle no-arr">
								<span class="font-icon font-icon-contacts"></span>
								<!-- <span class="lblclientenomx"><?php echo $_SESSION["CON_NOM"] ?> <span/> -->
							</a>
						</div>
				</div>
	        </div>
	    </div>
</header>