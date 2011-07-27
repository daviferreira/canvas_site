<div id="api-dialog" style="display:none;">
  <div id="api-content">

    <h2>__construct( [ string <em>$file</em> ] )</h2>
    <div>
<pre>
$img = new canvas("image.jpg");
</pre>              
    </div>

    <h2>load( string <em>$file</em> )</h2>
    <div>
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
    <div>desc</div>

    <h2>set_rgb( mixed <em>$rgb</em> )</h2>
    <div>desc</div>

    <h2>set_crop_coordinates( int <em>$x</em>, int <em>$y</em> )</h2>
    <div>desc</div>

    <h2>resize( [ mixed <em>$new_width = null</em>, mixed <em>$new_height = null</em>, mixed <em>$method = null</em> ] )</h2>
    <div>desc</div>

    <h2>flip( [ string <em>$orientation = "horizontal"</em> ] )</h2>
    <div>desc</div>

    <h2>rotate( int $degrees )</h2>
    <div>desc</div>

    <h2>text( string <em>$text</em> [, array <em>$options = array()</em>] )</h2>
    <div>desc</div>

    <h2>merge( string <em>$image</em>, array <em>$position</em> [, int <em>$alpha = 100</em> ] )</h2>
    <div>desc</div>

    <h2>filter( string <em>$filter</em> [, int <em>$ammount = 1</em>, array <em>$args = array()</em> ] )</h2>
    <div>desc</div>
    
    <h2>set_quality( int <em>$quality</em> )</h2>
    <div>desc</div>
    
    <h2>save( string <em>$destination</em> )</h2>
    <div>desc</div>
    
    <h2>show()</h2>
    <div>desc</div>
    
    <h2>error_message()</h2>
    <div>desc</div>
    

  </div>
</div>
