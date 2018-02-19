<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar row" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li class="menu-text top-bar-logo">
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img width="200" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/BurrisFreightMgmt.svg" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
				<div class="header-contact">
					<p class="phone-number"><a href="tel:844.236.7253"><img class="telephone-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/fi-telephone.svg" alt="Telephone Icon">(844) 236-7253</a></p>
				</div>
			</li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas">Menu</a></li>
		</ul>
	</div>
</div>