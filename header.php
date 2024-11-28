<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, user-scalable=no" />
<link
      href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
<title>
    <?php wp_title( '|', true, 'right' ); ?>
    <?php
            echo get_bloginfo('name');// this is the name of your website.
            // use your code to display title in all other pages.
    ?>
</title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="page-wrapper">

	<header class="l-header">
    
        <nav class="menu">
          <a class="title_logo" href="">Landify</a>
          <div>
            <button class="btn_primary" type="button">Remix Template</button>
          </div>
          <div>
            
            <ul class="menu_link">
              
              <li>
                <a class="" href="">Features</a>
              </li>
              <li>
                <a class="" href="">About</a>
              </li>
              <li>
                <a class="" href="">Testimonials</a>
              </li>
              <li>
                <a class="" href="">Pricing</a>
              </li>
              <li>
                <a class="" href="">FAQs</a>
              </li>
            </ul>
          </div>
        </nav>
      </header>