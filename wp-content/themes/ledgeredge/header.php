<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(''); ?></title>
<link rel="icon" href="/favicon.ico"><!-- 32×32 -->
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<link rel="icon" href="https://secureservercdn.net/160.153.137.218/p9m.de4.myftpupload.com/wp-content/uploads/2021/02/cropped-Favicon-Icons-01-32x32.png" sizes="32x32" />
<link rel="icon" href="https://secureservercdn.net/160.153.137.218/p9m.de4.myftpupload.com/wp-content/uploads/2021/02/cropped-Favicon-Icons-01-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://secureservercdn.net/160.153.137.218/p9m.de4.myftpupload.com/wp-content/uploads/2021/02/cropped-Favicon-Icons-01-180x180.png" />
<meta name="msapplication-TileImage" content="http://staging-ledgeredge.kinsta.cloud/wp-content/uploads/Smart_orders.png" />

<meta property="og:image" content="http://staging-ledgeredge.kinsta.cloud/wp-content/uploads/Smart_orders.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-188598978"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-188598978');
</script>
</head>
<body <?php body_class(); ?>>
<div id="svg-sprite" style="height: 0; width: 0; position: absolute; visibility: hidden">
<?php include get_theme_file_path('assets/svg/sprite.php'); ?>
</div>

<div class="global-container">
<?php get_template_part( 'partials/global-alert' ); ?>
<?php get_template_part( 'partials/global-header' ); ?>
