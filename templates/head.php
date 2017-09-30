<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Oswald:300,400,700&subset=latin-ext" rel="stylesheet">
  <?php wp_head(); ?>
  <?php if ((!defined('WP_ENV') || \WP_ENV === 'production') && !current_user_can('manage_options')) : ?>
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107318549-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-107318549-1');
  </script>
  <?php endif; ?>
</head>
