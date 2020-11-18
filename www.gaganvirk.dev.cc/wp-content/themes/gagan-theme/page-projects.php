<?php
get_header(); 
?>
<link rel="stylesheet" href="C:\Users\Gagan Virk\Documents\GitHub\gagan_blog\www.gaganvirk.dev.cc\wp-content\themes\gagan-theme\project-style.css" 
type="text/css" media="all">

 <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Projects I've worked on in the past!</p>
      </div>
    </div>  
</div>

  <div class="container">
  <div class="row">
    <div class="col-sm">
      <h5>Gagan Portfolio Project #Laravel</h5>
      <a class="project-images" href="https://github.com/gaganVirk/gagan-blog">
        <img src="<?php echo get_theme_file_uri('/images/gagan-laravel.png') ?>)"; width="300" height="300" alt="Gagan Project"/>
      </a>
    </div>
    <div class="col-sm">
      <h5>Fictional University #WordPress</h5>
      <a href="https://github.com/gaganVirk/gagan_blog/tree/master/virk.dev.cc">
        <img src="<?php echo get_theme_file_uri('/images/fictional-uni.png') ?>)"; width="300" height="300" alt="Fictional University"/>
      </a>
    </div>
    <div class="col-sm">
      <h5>Mvc Movie C#.NET</h5>
      <a href="https://github.com/gaganVirk/RazorPagesMovie.git">
      <img src="<?php echo get_theme_file_uri('/images/ragor-pages-movie.png') ?>)"; width="300" height="200" alt="Movie App"/>
    </a>
    </div>
  </div>
</div>



  
<?php 
get_footer();
?>