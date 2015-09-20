<?php get_header(); ?>


  <?php
    $args = array( 'post_type' => 'photo');
    $loop = new WP_Query( $args );
  ?>

  <?php if ($loop->have_posts()) : ?>

    <div class="carousel">
      <?php
        $count = 0;

        while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="item">
          <img src="<?php
										$image = get_field('image');
										$url = $image['sizes']['large'];
										echo $url;
										?>" alt="" />
        </div>

        <?php endwhile; // end of the loop. ?>


    </div>
    <div class="controls">
      <div class="prev">
        <
      </div>
      <div class="next">
        >
      </div>
    </div>
  <?php else: ?>
    <p style="color: white; padding-top: 200px;"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>
