<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Skyvibe Meme Hosting</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
    <link href="jquery.bsPhotoGallery.css" rel="stylesheet">

<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>

    <script src="jquery.bsPhotoGallery.js"></script>
	<script type="text/javascript" src="test.js"></script>
	
    </script>
    <script>
      $(document).ready(function(){
        $('ul.first').bsPhotoGallery({
          "classes" : "col-lg-2 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
          "hasModal" : true,
          // "fullHeight" : false
        });
      });
    </script>
  </head>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

      body {
        background:#ebebeb;
		background-image: url("back.jpg");
      }
      ul {
          padding:0 0 0 0;
          margin:0 0 40px 0;
      }
      ul li {
          list-style:none;
          margin-bottom:10px;
      }

    .text {
      /*font-family: 'Bree Serif';*/
      color:#666;
      font-size:11px;
      margin-bottom:10px;
      padding:12px;
      background:#fff;
    }



  </style>
  <body background="back.jpg">
    <div class="container">
        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-bottom:40px;">
            <h3 style="font-family:'Bree Serif', arial; font-weight:bold; font-size:30px;">
                <a style="text-decoration:none; color:#666;">Skyvibe MemeHosting-BETA <span style="color:red;"></span></a>
            </h3>
            <p style="color:red">Do you Dream of Memes?</p>
        </div>

        <ul class="row first">
            <?php
include 'connect.php';
$sql="SELECT Source,Imgsource,Caption from image_full WHERE id<50";
$result=mysqli_query($con,$sql);

// Numeric array
//$row=mysqli_fetch_array($result,MYSQLI_NUM);
//printf ("%s (%s)\n",$row[0],$row[1]);
//print_r(array_values($row));

while ($img = mysqli_fetch_assoc($result)){
    //echo $img['Imgsource']; //this will go for every result, so every row in the database
	?>
            <li>
                <img alt="<?php echo $img['Caption'] ?>"  src="<?php echo $img['Imgsource'] ?>">
                <div class="text"><a href="<?php echo $img['Source'] ?>" target="_blank"><?php echo $img['Caption'] ?></a></div>
            </li>
<?php

	
}


mysqli_free_result($result);

mysqli_close($con);
?>

  </ul>




    </div> <!-- /container -->


  </body>


</html>
