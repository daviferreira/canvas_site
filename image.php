<?php
require 'canvas.php';

$options = array(
  "color" => "#333",
  "size" => 2, 
  "x" => "right", 
  "y" => "top");
$img = new canvas("img/banksky3.jpg");
$img->set_crop_coordinates(-580, -410)->resize("938", "240", "crop")->filter("grayscale")->text("banksky.co.uk", $options)->show();