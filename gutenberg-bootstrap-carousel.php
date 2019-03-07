<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-interval="7000">
	  <div class="carousel-inner">
	  	<?php if( have_rows('hero_slider') ): ?>
	  			 <ol class="carousel-indicators">
    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
  </ol>

	<?php while( have_rows('hero_slider') ): the_row(); 
		// vars
		$image = get_sub_field('image');
		$active = get_sub_field('active');
		$text = get_sub_field('text');

		?>
<?php if( $active ): ?>
			<div class="carousel-item active">
<?php else : ?>
	<div class="carousel-item">


<?php endif; ?>

	    	      <img style="width:100%; object-fit: contain; height: auto" class="d-block w-100" src="<?php echo $image; ?>" alt="slide">
	  <?php if ($text) : ?>
		   <div class="carousel-caption">
		    		<p><?php echo $text; ?></p>
		    		<!--<a class="btn btn-primary" href="<?php the_field('hero_link'); ?>"><?php the_field('hero_link_text'); ?></a> -->

		  </div><!--/flex container-->
		<?php endif; ?>
	 </div><!--carousel-item-->
	<?php endwhile; ?>
<?php endif; ?>
	
	    
	  </div><!--/carousel--inner-->
	 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
