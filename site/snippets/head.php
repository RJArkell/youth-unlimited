<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?php # Adapted from auto-generated favicon.php ?>
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="48x48" href="/assets/images/favicons/favicon-48x48.png">
  <link rel="manifest" href="/assets/images/favicons/manifest.json">
  <meta name="theme-color" content="#fff">
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
