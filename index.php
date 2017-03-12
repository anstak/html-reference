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
    <script type='text/javascript' src='https://atomcss.ru/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
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

  <body class="htmlref">
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="container">
      <h1>Справочник HTML тегов</h1>
    </div>
    <main class="index">
      <div class="index-collections">
        <div class="container">
          <strong>Коллекции:</strong>
          <a href="{{site.url}}/base">Базовые теги</a>
          <a href="{{site.url}}/forms">Теги форм</a>
          <a href="{{site.url}}/lists">Теги списка</a>
          <a href="{{site.url}}/semantic">Семантические теги</a>
          <a href="{{site.url}}/tables">Теги таблицы</a>
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
