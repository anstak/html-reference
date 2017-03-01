---
route: index
---


<?php
  define('WP_USE_THEMES', true);
  require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
/** Loads the WordPress Environment and Template */
//require( dirname( __FILE__ ) . '/../wp-blog-header.php' );
?>

<!DOCTYPE html>
<html class="is-index" data-template="index">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <title>{{site.title}} - {{site.description}}</title>
    <link rel="stylesheet" type="text/css" href="{{site.url}}/css/website.css">

    <meta property="og:url" content="{{site.url}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{site.title}}">
    <meta property="og:image" content="{{site.url}}/images/html-reference-share.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:description" content="{{site.description}}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@jgthms">
    <meta name="twitter:creator" content="@jgthms">
    <meta name="twitter:title" content="{{site.title}}">
    <meta name="twitter:image" content="{{site.url}}/images/html-reference-share.png">
    <meta name="twitter:description" content="{{site.description}}">

    {% include favicons.html %}
    <?php //wp_head(); ?>
  </head>
  
  
  <?php
    //use Roots\Sage\Setup;
    //use Roots\Sage\Wrapper;
  ?>

  <body>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    
    <header class="header">
      <div class="container">
        <h1 class="header-figure">
          <img src="{{site.url}}/images/html-reference-icon.png" alt="{{site.title}} icon">
          <img src="{{site.url}}/images/html-reference-type.png" alt="{{site.title}} type">
        </h1>
        <div class="header-content">
          <div class="header-carbon">
            {% include carbon.html %}
          </div>
          <div class="header-text">
            <h2 class="header-title">
              {{site.subtitle}}
            </h2>
            <p class="header-subtitle">
              <strong>Learn by example</strong>: <a href="{{site.url}}">htmlreference.io</a> is a free guide to HTML. It features all <strong>elements</strong> and <strong>attributes</strong>.
            </p>
            <footer class="header-share">
              {% include social/button-twitter.html %}
              {% include social/button-facebook.html %}
            </footer>
          </div>
        </div>
      </div>
    </header>
    <main class="index">
      <div class="index-collections">
        <div class="container">
          <strong>Collections:</strong>
          <a href="{{site.url}}/base/">Base elements</a>
          <a href="{{site.url}}/forms/">Forms</a>
          <a href="{{site.url}}/lists/">Lists</a>
          <a href="{{site.url}}/semantic/">Semantic</a>
          <a href="{{site.url}}/tables/">Tables</a>
        </div>
      </div>
      <div class="container">
        <div class="index-left">
          {% include components/finder.html %}
        </div>
      </div>
    </main>
    {% include sister.html %}
    {% include modals/share.html %}
    {% include google-fonts.html %}
    <script src="{{site.url}}/javascript/clipboard.min.js"></script>
    <script src="{{site.url}}/javascript/main.js"></script>
    <script src="{{site.url}}/javascript/index.js"></script>
    {% include noscript.html %}
  </body>
</html>
