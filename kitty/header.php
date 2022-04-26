<!DOCTYPE Html>
<html <?php language_attributes() ?>>
    <head>
	<meta charset="utf-8">
  
		

	   
		<x class="small">My Sample Website</x>

<style>
	x.small { 
  font-variant: small-caps;

}
</style>
	
		
      <h2 class="shadow">
				This website is just the sample.<br>
				This is my first try to create a website with my theme in wordpress...
	  </h2>     
      			<a href="http://localhost/wordpress/jghg" class="btn btn-red animate">Try 404 page here</a>
  
    <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'menu',
            'container' => false
            ));
        ?>

    <?php wp_head()?>
    </head>
    
    <body<?php body_class() ?>>
        

