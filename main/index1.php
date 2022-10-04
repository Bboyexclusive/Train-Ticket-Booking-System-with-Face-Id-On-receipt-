<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face Capture</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>

  <!-- CSS -->
    <style>
      *{
        margin: 0;
        padding: 0;
      }
    #my_camera{
        width: 520px;
        height: 420px;
        border: 3px solid #fff;
        border-radius: 20px;
    }
    body{
      background-color: #333;
    }
    input{
      padding: 20px;
      background-color: orange;
      border: none;
      color:  #000;
      margin-top: 9px;
      width: 200px;
    }
  </style>

  <h2 style="background-color: orange;padding: 10px;color: #000;">TRAIN BOOKING FACE CAPTURE</h2>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
          <center>
          <div id="my_camera"></div>
          <input type=button value="Capture" onClick="take_snapshot()">
          <input type=button value="Save Capture" onClick="saveSnap()">
          </center>
      </div>
      <div class="col-md-6">
           <div id="results"  ></div>
      </div>
    </div>
  </div>




  <!-- Script -->
  <script type="text/javascript" src="webcamjs/webcam.min.js"></script>

  <!-- Code to handle taking the snapshot and displaying it locally -->
  <script language="JavaScript">
    
    // Configure a few settings and attach camera
   
      Webcam.set({
        width: 520,
        height: 420,
        image_format: 'jpeg',
        jpeg_quality: 90
      });
      Webcam.attach( '#my_camera' );
    
    // A button for taking snaps
    

    // preload shutter audio clip
    var shutter = new Audio();
    shutter.autoplay = false;
    shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

    function take_snapshot() {
      // play sound effect
      shutter.play();

      // take snapshot and get image data
      Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('results').innerHTML = 
          '<img id="imageprev" src="'+data_uri+'"/><br><center><a href="trans.php"><input value="Proceed" type="button"></a></center>';
      } );

      Webcam.reset();
    }

    function saveSnap(){
      // Get base64 value from <img id='imageprev'> source
      var base64image =  document.getElementById("imageprev").src;

       Webcam.upload( base64image, 'upload.php', function(code, text) {
         console.log('Save successfully');
         //console.log(text);
            });

    }
  </script>
  
</body>
</html>
