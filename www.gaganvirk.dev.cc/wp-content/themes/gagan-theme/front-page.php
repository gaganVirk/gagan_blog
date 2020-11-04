<?php get_header(); ?>
<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">Welcome to my blog!</h1>
      <div class="page-banner__intro">
        <p>Keep up with my latest blog posts!</p>
      </div>
    </div>  
  </div>

 <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/gagan.jpg') ?>);"></div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">
              <a href="<?php echo site_url('/projects'); ?>">Upcoming Projects</a></h2>
          <?php
          $today = date('Ymd');
           $homepageProjects = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'project',
            'meta_key' => 'project_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query' => array(
              array(
                'key' => 'project_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            )));

           while ($homepageProjects->have_posts()) {
             $homepageProjects->the_post(); ?>
            
            <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php 
               $projectDate = new DateTime(get_field('project_date'));
               echo $projectDate->format('M')
              ?></span>
              <span class="event-summary__day"><?php echo $projectDate->format('d') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php if(has_excerpt()) {
                 echo get_the_excerpt();
              } else { 
                echo wp_trim_words(get_the_content(), 18);
              }?><a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
           <?php } ?>

          <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('project'); ?>" class="btn btn--blue">View All Projects</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
          <?php
           $homepagePosts = new WP_Query(array(
             'posts_per_page' => 2
           ));

           while($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
             <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
              <span class="event-summary__month"><?php the_time('M') ?></span>
              <span class="event-summary__day"><?php the_time('d') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php if(has_excerpt()) {
                 echo get_the_excerpt();
              } else { 
                echo wp_trim_words(get_the_content(), 18);
              }?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
           <?php } wp_reset_postdata();
          ?>

          <p class="t-center no-margin">
            <a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
      </div>
    </div>     

<?php get_footer(); ?>

