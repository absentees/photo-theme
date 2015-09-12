<?php get_header(); ?>

  <?php if (have_posts()) : ?>

		    <div class="carousel">
		      <?php
		        $count = 0;

		        while (have_posts() ) :the_post(); ?>

		        <div class="item">
		          <img src="<?php
												$image = get_field('image');
												$url = $image['sizes']['large'];
												echo $url;
												?>" alt="" />
		        </div>
			<?php endwhile; // end of the loop. ?>
    </div>
  <?php else: ?>
    <p style="color: white; padding-top: 200px;"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>
