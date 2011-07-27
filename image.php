<?php
require 'canvas.php';

$options = array(
  "color" => "#000",
  "background_color" => "#ffff00", 
  "size" => 4, 
  "x" => "right", 
  "y" => "top");
$img = new canvas("img/banksky3.jpg");
$img->set_crop_coordinates(-400, -410)->resize("938", "240", "crop")->filter("grayscale")->text("banksky.co.uk", $options)->show();