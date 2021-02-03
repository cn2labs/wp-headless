<?php
  $wpUrl = get_bloginfo('url');
  $frontendUrl = $wpUrl;

  if (strpos($wpUrl, '10003') || strpos($wpUrl, '.local')) {
    $frontendUrl = 'http://localhost:8000';
  }

  if (strpos($wpUrl, 'https://wp.')) {
    $frontendUrl = str_replace('https://wp.', 'https://');
  }
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo('name'); ?> | WordPress</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>
<body>
  <h1><?php echo get_bloginfo('name'); ?></h1>
<p>Huch, wo kommstn du her? Hier gibts eigentlich nichts zu sehen, die Seite die du suchst findeste hier: <a href="<?php echo $frontendUrl; ?>" title="Bring mich hin"><?php echo $frontendUrl; ?></a></p>
</body>
</html>