<?php
get_header(); ?>
<link rel="stylesheet" href="row-style.css">

 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Project I've worked on in the past!</p>
      </div>
    </div>  
  </div>

  <div class="container">
  <div class="row">
    <div class="col-sm">
      <h5>Gagan Portfolio Project #Laravel</h5>
      <a href="https://github.com/gaganVirk/gagan-blog">
        <img class="project-images" src="<?php echo get_theme_file_uri('/images/gagan-laravel.png') ?>)"; alt="Gagan Project"/>
      </a>
    </div>
    <div class="col-sm">
      <h5>Fictional University #WordPress</h5>
      <a href="https://github.com/gaganVirk/gagan_blog/tree/master/virk.dev.cc">
        <img src="<?php echo get_theme_file_uri('/images/fictional-uni.png') ?>)"; alt="Fictional University"/>
      </a>
    </div>
    <div class="col-sm">
      <h5>H-F API #VisualStudio .NET</h5>
    </div>
  </div>
</div>



  
<?php 
get_footer();
?>