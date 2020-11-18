<!-- Posts -->
<div id="post-container">
  <?php
  $args = array(
  'post_type' => 'post',
  'posts_per_page' => -1
  );
  $posts = get_posts( $args );
  foreach( $posts as $post ) : setup_postdata( $post ); ?>

        <div id="blocked-content" class="content clearfix">
          <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
            <h2><strong><?php echo the_title(); ?></strong></h2>
            <div class="entry">
              <p><?php the_field('excerpt'); ?></p>
            </div>
            <a class="button" href="<?php the_permalink() ?>">Learn More</a>
          </div>
        </div>
      <!-- end of the loop -->

<?php wp_reset_postdata(); endforeach; ?>

</div>
