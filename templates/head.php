<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700|Oswald:300,400,700&subset=latin-ext" rel="stylesheet">
    <link rel="icon" sizes="192x192" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicon/favicon.png">
    <link rel="icon" sizes="32x32" type="image/png" href="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicon/favicon-32x32.png">
    <link rel="apple-touch-icon" href="<?= get_stylesheet_directory_uri(); ?>/dist/images/favicon/apple-touch-icon.png">
    <?php wp_head(); ?>
    <?php if ((!defined('WP_ENV') || \WP_ENV === 'production') && !current_user_can('manage_options')) : ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TM5BFSH');</script>
    <!-- End Google Tag Manager -->
    <?php endif; ?>
</head>
