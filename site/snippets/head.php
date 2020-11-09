<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?php # Adapted from auto-generated favicon.php ?>
  <link rel="shortcut icon" href="/assets/images/favicons/favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="48x48" href="/assets/images/favicons/favicon-48x48.png">
  <link rel="manifest" href="/assets/images/favicons/manifest.json">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#fff">
  <meta name="application-name" content="Craft Contracting">
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="/assets/images/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="/assets/images/favicons/apple-touch-icon-1024x1024.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="Craft Contracting">
  <meta name="msapplication-TileColor" content="#8AA6B7">
  <meta name="msapplication-TileImage" content="/assets/images/favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="/assets/images/favicons/browserconfig.xml">
  <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
  <?php # /favicon.php ?>

  <?php
    if (option('environment', 'development') === 'production') {
      echo Bnomei\Fingerprint::css('/assets/styles/main.min.css', ['integrity' => true]);
    } else {
      echo css('assets/styles/main.css');
    }
  ?>
</head>
