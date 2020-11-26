<?php

get_header(); ?>
    
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">All Books</h1>
      <div class="page-banner__intro">
        <p>I've listed my favorite books</p>
      </div>
    </div>  
  </div>

  
<div class="container">
  <div class="row align-items-start">
  <?php
  while(have_posts()) {
    the_post(); ?>
    <div class="col-4">
      <div class="container container--narrow page-section">
        <div class="event-summary">
           <div class="event-summary__content">
            <?php the_post_thumbnail('professorPortrait'); ?>
            <h5 class="event-summary__title headline headline--tiny">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h5>
            <p><?php echo wp_trim_words(get_the_content(), 18) ?><a href="<?php the_permalink(); ?>" 
              class="nu gray">Learn more</a></p>
          </div>
        </div>
        </div>
    </div>

    
  <?php  } ?>
</div>
</div>
<?php echo paginate_links(); ?>

   <hr class="section-break">
   
</div>

<?php get_footer(); ?>