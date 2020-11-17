<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url() ?>"><strong>Gagan</strong> Virk</a>
            </h1>
            <p><a class="site-footer__link" href="#">0064 21 071 2104</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
             <!--   <?php
             /*   wp_nav_menu(array(
                  'theme_location' => 'footerLocationOne' 
                )); */
                ?> -->
              
                <ul>
                  <li><a href="<?php echo site_url('/contact-me') ?>">Contact Me</a></li>
                  <li><a href="<?php echo site_url('/projects') ?>">Projects</a></li>
                  <li><a href="<?php echo site_url('/certificates') ?>">Certificates</a></li>
                  <li><a href="#">Campuses</a></li>
                </ul> 
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
              <!--   <?php
             /*   wp_nav_menu(array(
                  'theme_location' => 'footerLocationTwo'
                )); */
                ?> -->
                
                <ul>
                  <li><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
                  <li><a href="<?php echo site_url('/books') ?>">Books</a></li>
                </ul> 
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Me</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="https://www.facebook.com/deep.virk111/" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://twitter.com/Gagan0711" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/watch?v=EKvHQc3QEow&list=PL19E79A0638C8D449" class="social-color-github"><i class="fa fa-github" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/gagan-virk-0618974a/" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/deepevirk/" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>