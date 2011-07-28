<div id="api-dialog" style="display:none;">
  <div id="api-content">

    <h2>__construct( [ string <em>$file</em> ] )</h2>
    <div>
      <p>This is the class constructor. It accepts, as an optional parameter, the name (including full path) of the image file you want to load.</p>
<pre>
$img = new canvas("image.jpg");
</pre>              
    </div>

    <h2>load( string <em>$file</em> )</h2>
    <div>
      <p>Load an image file taking the $file parameter with the name and full path of the local file.</p>
<pre>
$img = new canvas();
$img->load("image.jpg");
</pre>              
    </div>

    <h2>load_url( string <em>$url</em> )</h2>
  <div>
<pre>
$img = new canvas();
$img->load_url("http://www.google.com.br/images/srpr/logo2w.png");
</pre>              
  </div>

    <h2>create_empty_image( int <em>$width</em>, int <em>$height</em> [, string <em>$extension = "jpg"</em>, mixed <em>$alpha = false</em> ] )</h2>
    <div>
<pre>
$img = new canvas();
$img->create_empty_image(200, 100, "png", 90)->show();
</pre>
    </div>

    <h2>set_rgb( mixed <em>$rgb</em> )</h2>
    <div>
<pre>
$img = new canvas("example.jpg");
$img->set_rgb(array(255, 73, 84))->resize(200, 300, "fill")->save("example.jpg");
$img->set_rgb("#fff")->create_empty_image(200, 200)->save("example.png");
</pre>
    </div>

    <h2>set_crop_coordinates( int <em>$x</em>, int <em>$y</em> )</h2>
    <div>
<pre>
$img = new canvas("example.jpg");
$img->set_crop_coordinates(-100, -80)->resize(200, 300, "crop")->show();
</pre>
    </div>

    <h2>resize( [ mixed <em>$new_width = null</em>, mixed <em>$new_height = null</em>, mixed <em>$method = null</em> ] )</h2>
    <div>
<pre>
$img = new canvas("example.png");
$img->resize(200, 300, "crop")->save("example_crop.png");
$img->resize(200, 300, "fill")->save("example_fill.png");
$img->resize(200, 300)->save("example_simple.png");
$img->resize("20%", "40%", "fill")->save("example_percentage.png");
$img->resize(200)->save("example_proportional.png");
</pre>
    </div>

    <h2>flip( [ string <em>$orientation = "horizontal"</em> ] )</h2>
    <div>
<pre>
$img = new canvas("example.gif");
$img->flip("vertical")->show();
</pre>
    </div>

    <h2>rotate( int $degrees )</h2>
    <div>
<pre>
$img = new canvas("example.jpg");
$img->set_rgb("#fff")->rotate(90)->save("example.png");
</pre>
    </div>

    <h2>text( string <em>$text</em> [, array <em>$options = array()</em>] )</h2>
    <div>
<pre>
$options = array(
  "color" => "#000",
  "background_color" => "#ffff00", 
  "size" => 4, 
  "x" => "right", 
  "y" => "top"
);
$img = new canvas("example.png");
$img->text("My text", $options)->show();
</pre>
    </div>

    <h2>merge( string <em>$image</em>, array <em>$position</em> [, int <em>$alpha = 100</em> ] )</h2>
    <div>
<pre>
$img = new canvas("example.png")
$img->merge("example.png", array("right", "bottom"), 60)->show();
</pre>
    </div>

    <h2>filter( string <em>$filter</em> [, int <em>$ammount = 1</em>, array <em>$args = array()</em> ] )</h2>
    <div>
<pre>
$img = new canvas("example.png");
$img->filter("grayscale")->save("example_bw.png");
$img->filter("blur", 5)->save("example_blur.png");
</pre>
    </div>
    
    <h2>set_quality( int <em>$quality</em> )</h2>
    <div>
<pre>
$img = new canvas("example.png");
$img->resize("30%")->set_quality(100)->show();
</pre>
    </div>
    
    <h2>save( string <em>$destination</em> )</h2>
    <div>
<pre>
$img = new canvas("example.png");
$img->resize(300, 200, "crop")->save("/tmp/example.gif");
</pre>
    </div>
    
    <h2>show()</h2>
    <div>
<pre>
$img = new canvas("example.gif");
$img->resize(200)->show();
</pre>
    </div>
    
    <h2>error_message()</h2>
    <div>
<pre>
$img = new canvas("invalid.jpg");
if(!$img->resize(200))
  die($img->error_message());
</pre>
    </div>

  </div>
</div>
