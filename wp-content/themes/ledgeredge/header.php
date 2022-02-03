<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title(''); ?></title>
<link rel="icon" href="/favicon.ico"><!-- 32×32 -->
<link rel="icon" href="/favicon.svg" type="image/svg+xml">
<meta name="msapplication-TileImage" content="<?php echo content_url() ?>/uploads/LE_Display_Rev.png" />

<meta property="og:image" content="<?php echo content_url() ?>/uploads/LE_Display_Rev.png" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
<?php wp_head(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C3R7BLEM89"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C3R7BLEM89');
</script>
</head>
<body <?php body_class(); ?>>
<div id="svg-sprite" style="height: 0; width: 0; position: absolute; visibility: hidden">
<?php include get_theme_file_path('assets/svg/sprite.php'); ?>
</div>

<div class="global-container">
<?php get_template_part( 'partials/global-alert' ); ?>
<?php get_template_part( 'partials/global-header' ); ?>
