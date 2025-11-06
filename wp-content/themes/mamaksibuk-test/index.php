<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class() ?>>
    <p>This is test paragraph</p>
    <?php 
      $b = ['a', 'b'];
      foreach ($b as $key => $value){
        echo $key.' as '.$value. '<br/>';
      }
    ?>
</body>
</html>