<?php 
wp_head();
?>


<div class="header">
<div class="logo"><a href="<?php bloginfo('url');?>"><h2><?php bloginfo('name');?></h2></a></div>
<div class="header-menu">
    <?php
wp_nav_menu( array(
	'menu'           => 'Header Menu', // Do not fall back to first non-empty menu.
	'theme_location' => '',
	'fallback_cb'    => false // Do not fall back to wp_page_menu()
) );
?>
</div>
<div class="login">
<img src="http://localhost/Pugmarker-test/wp-content/uploads/2023/05/Group-665.jpg"><p>Login</p>

</div>

</div>