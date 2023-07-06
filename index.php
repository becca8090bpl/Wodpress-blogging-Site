<?php get_header();?>


<main>

<!--
  - #HERO SECTION
-->

<div class="hero">

  <div class="container">

    <div class="left">

      <h1 class="h1">
        Hi, lets</b>
        <br>Unlock the Joy of Coding
      </h1>

      <p class="h3">
        Specialized in <abbr title="Accessibility">programming</abbr>
        and web development
      </p>

      <div class="btn-group">
        <a href="#" class="btn btn-primary">Contact Me</a>
        <a href="http://pet-adoption.local/about/" class="btn btn-secondary">About Me</a>
      </div>

    </div>

    <div class="right">

      <div class="pattern-bg"></div>
      <div class="img-box">
        <img src="wp-content/themes/myTheme/assets/blog-4.png" alt="Julia Walker" class="hero-img">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
      </div>

    </div>

  </div>

</div>





<div class="main">

  <div class="container">

    <!--
      - BLOG SECTION
    -->

    <div class="blog">

          <h2 class="h2">Latest Blog Post</h2>

          <div class="blog-card-group">
         
            <div class="blog-card">

              <div class="blog-card-banner">
                <img src="/wp-content/themes/myTheme/assets/images/blog-3.png" alt=""
                  width="250" class="blog-banner-img">
              </div>

              <div class="blog-content-wrapper">

             <!--   <button class="blog-topic text-tiny">Database</button>
-->

                <h3>
                  <a href="#" class="h3">
                   
                  </a>
                </h3>

                <p class="blog-text">
                
                <?php    while(have_posts()){
    the_post();?>
    <h2><a href=<?php the_permalink();?>><?php the_title();?></a></h2>
    
    <?php
}?>
                </p>

                <div class="wrapper-flex">

                  <div class="profile-wrapper">
                    <img src="/wp-content/themes/myTheme/assets/images/blog-4.png" alt="Julia Walker" width="50">
                  </div>

                  </div>
     </div>
     </div>
     </div>
     </div>
     
      <div class="tags">

        <h2 class="h2">Tags</h2>

        <div class="wrapper">

          <button class="hashtag">#mongodb</button>
          <button class="hashtag">#nodejs</button>
          <button class="hashtag">#a11y</button>
          <button class="hashtag">#mobility</button>
          <button class="hashtag">#inclusion</button>
          <button class="hashtag">#webperf</button>
          <button class="hashtag">#optimize</button>
          <button class="hashtag">#performance</button>

        </div>

      </div>

      <div class="contact">

        <h2 class="h2">Let's Talk</h2>

        <div class="wrapper">

          <p>
            Do you want to learn more about how I can help your company overcome problems? Let us have a
            conversation.
          </p>

          <ul class="social-link">

            <li>
              <a href="#" class="icon-box discord">
                <ion-icon name="logo-discord"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="icon-box twitter">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="icon-box facebook">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>

      <div class="newsletter">

        <h2 class="h2">Newsletter</h2>

        <div class="wrapper">

          <p>
            Subscribe to our newsletter to be among the first to keep up with the latest updates.
          </p>

          <form action="#">
            <input type="email" name="email" placeholder="Email Address" required>

            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>

        </div>

      </div>

    </div>

  </div>

</div>

</main>






<?php get_footer();?>