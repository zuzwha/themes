<?php get_header()?>
<?php wp_head(); ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri()?> ">
   
     

	<section class="posts">
	       <?php if (have_posts()): ?>
	            <?php while(have_posts()):the_post();?>
<!-- 	<?php  global $post; echo $post->ID;?>  -->
<!-- <a href="http://localhost/wordpress/2022/03/22/posts/"></a> -->
	<h3><?php the_title() ?></h3>
	           <?php the_time(get_option('date_format'))?>
	               <h3><?php the_content() ?></h3>
                    
<?php endwhile?>
                       <?php else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                       <?php endif; ?>
	                
             </section> 


<?php get_sidebar( 'primary' ); ?>
<div id="sidebar-primary" class="sidebar">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-primary' ); ?>
    <?php else : ?>
        Time to add some widgets!
    <?php endif; ?>
</div>


<body class= "business-cards">
<style>          
    .vizitka {display: inline-block;
              background-color: 
              azure;border: 
              2px solid silver;
              padding: 10px;}           
    .bg-invert {background-color:black;
                color: white;}           
    .color-blue {color: blue;}           
    .bg-invert .color-blue {color: yellow;}           
    .gray{display: inline-block;
          background-color: gray;
          color:lightgray;}           
    .darkgray{color:#5a5f5f;}            
    .color-red{color:darkred}            
    .light-gray{color:lightgray}            
    .menu {display: inline-block;              
           width: 95px;              
           vertical-align: top;              
           cursor: pointer;}            
    .main {display: inline-block;              
           width: calc(100% - 100px);}         
    </style>
<script>
          function hideAll() {
            var vizitky = document.getElementsByClassName('vizitka'), i;
            for (var i = 0; i < vizitky.length; i ++) {
                vizitky[i].style.display = 'none';
            }
          }
          function showAll() {
            var vizitky = document.getElementsByClassName('vizitka'), i;
            for (var i = 0; i < vizitky.length; i ++) {
                vizitky[i].style.display = '';
            }
          }
          function showOnly(index) {
            hideAll();
            document.getElementsByClassName('vizitka')[index].style.display = '';
          }
        </script>    
</head>    
<body onload="hideAll()">      
    <div class="menu">        
        <div onclick="showOnly(0)">Vizitka 1
        </div>        
        <div onclick="showOnly(1)">Vizitka 2
        </div>        
        <div onclick="showOnly(2)">Vizitka 3
        </div>        
        <div onclick="showOnly(3)">Vizitka 4
        </div>        
        <div onclick="showAll()">Show all
        </div>      
    </div>      
    <div class="main">        
        <img style="display: block" src="http://localhost/Vizitkar.PNG" width="400">        
        <div class="vizitka">            
            <div style="display: inline-block">                
                <h3 class="color-blue">Mgr. Janko Palicka</h3>                
                <span>Java Developer
                </span>                
                <div style="padding-top: 30px;">DATALAN, a.s.
                </div>                
                <div>Galvaniho 17/A, 821 04 Bratislava
                </div>                
                <div class="color-blue" style="padding-top: 30px;font-weight: bold;display: inline-block;width:20px;">                    
                    <div>T
                    </div>                    
                    <div>M
                    </div>                    
                    <div>E
                    </div>                
                </div>                
                <div style="display: inline-block">                    
                    <div>+421 2 50 25 72 78
                    </div>                    
                    <div>+421 903 402 176
                    </div>                    
                    <div>janko_palicka@datalan.sk
                    </div>                
                </div>                
                <div style="padding-top: 30px;">                    
                    <div class="color-blue" style="border-right: #FFC107 1px solid;display: inline-block;">www.datalan.sk
                    </div>                    
                    <div style="display: inline-block">                        
                        <div>Myslíme o krok vpred ...
                        </div>                    
                    </div>                
                </div>            
            </div>            
            <div style="display: inline-block;">                
                <div style="margin-bottom:70px">                    
                    <h1 class="color-blue" style="font-weight: bold;display: inline-block;">DATALAN</h1>                
                </div>                
                <div>                    &nbsp;                 
                </div>            
            </div>        
        </div>        
        <div class="vizitka bg-invert">            
            <div style="display: inline-block">                
                <h3 class="color-blue">Mgr. Janko Palicka</h3>                
                <span>Java Developer
                </span>                
                <div style="padding-top: 30px;">DATALAN, a.s.
                </div>                
                <div>Galvaniho 17/A, 821 04 Bratislava
                </div>                
                <div class="color-blue" style="padding-top: 30px;font-weight: bold;display: inline-block;width:20px;">                    
                    <div>T
                    </div>                    
                    <div>M
                    </div>                    
                    <div>E
                    </div>                
                </div>                
                <div style="display: inline-block">                    
                    <div>+421 2 50 25 72 78
                    </div>                    
                    <div>+421 903 402 176
                    </div>                    
                    <div>janko_palicka@datalan.sk
                    </div>                
                </div>                
                <div style="padding-top: 30px;">                    
                    <div class="color-blue" style="border-right: #FFC107 1px solid;display: inline-block;">www.datalan.sk
                    </div>                    
                    <div style="display: inline-block">                        
                        <div>Myslíme o krok vpred ...
                        </div>                    
                    </div>                
                </div>            
            </div>            
            <div style="display: inline-block;">                
                <div style="margin-bottom:70px">                    
                    <h1 class="color-blue" style="font-weight: bold;display: inline-block;">DATALAN</h1>                
                </div>                
                <div>                    &nbsp;                 
                </div>            
            </div>        
        </div>        
        <div class="vizitka gray">            
            <div style="display: inline-block">                
                <h3 class="darkgray">Mgr. Janko Palicka</h3>                
                <span>Java Developer
                </span>                
                <div style="padding-top: 30px;">DATALAN, a.s.
                </div>                
                <div>Galvaniho 17/A, 821 04 Bratislava
                </div>                
                <div class="darkgray" style="padding-top: 30px;font-weight: bold;display: inline-block;width:20px;">                    
                    <div>T
                    </div>                    
                    <div>M
                    </div>                    
                    <div>E
                    </div>                
                </div>                
                <div style="display: inline-block">                    
                    <div>+421 2 50 25 72 78
                    </div>                    
                    <div>+421 903 402 176
                    </div>                    
                    <div>janko_palicka@datalan.sk
                    </div>                
                </div>                
                <div style="padding-top: 30px;">                    
                    <div class="darkgray" style="border-right: #FFC107 1px solid;display: inline-block;">www.datalan.sk
                    </div>                    
                    <div style="display: inline-block">                        
                        <div>Myslíme o krok vpred ...
                        </div>                    
                    </div>                
                </div>            
            </div>            
            <div style="display: inline-block;">                
                <div style="margin-bottom:70px">                    
                    <h1 class="darkgray" style="font-weight: bold;display: inline-block;">DATALAN</h1>                
                </div>                
                <div>                    &nbsp;                 
                </div>            
            </div>        
        </div>
        <div class="vizitka">    
            <div style="display: inline-block">        
                <img style="display: block;margin: auto;" src="http://localhost/wordpress/wp-content/themes/kitty/logo.PNG" width="100">        
                <h2 class="color-red" style="margin: 0px;">BROKERIA</h2>        
                <div>            
                    <h6 class="light-gray" style="margin: auto;margin-left: 15px;">the best way for you             
                    </h6>        
                </div>    
            </div>                 
            <div style="display: inline-block;">            
               <div style="margin-bottom:70px">             
                    <h3 class="color-red" style="font-weight: bold;display: inline-block;margin-block-start: 0em;margin-block-end:0em">Mgr.ADAM KUDEL�S 
                    </h3> 
                    <h5 class="light-gray" style="font-weight: bold;margin-block-start: 0em;margin-block-end: 0em;">FINAN�N� KONZULTANT   
                    </h5>        
                </div>            
                <div>                    &nbsp;                 
                </div> 
                           
            </div>
        </div>
    </div>
</body>
</html>	        


			


			<p class="small">
				Should a kick occur, which it will, your butt cheeks will resonate.<br>
				Much like the wings of a butterfly, your butt might change history.
			</p>		
                      
<?php wp_footer();?>