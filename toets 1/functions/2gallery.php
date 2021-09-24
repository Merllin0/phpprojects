 <?php
 $images = glob("images/*{jpg,png,gif}", GLOB_BRACE);

 $gallery = null;
 foreach ($images as $key => $imagepath)
 {
   $gallery .= '<img class="img" src="'.$imagepath.'">';
 }
 ?>
<html>
<head>
  <title>gallery</title>
</head>
<style>
  #gallery{
    width: 360px;
    height: 240px;
    overflow: auto;
  }
  .img{
    margin: 5px;
    height: 90px;
    border: grey solid 3px;
  }
</style>
<body>
<h1>gallery</h1>
<div id="gallery"><?= $gallery?> </div>
</body>
</html>
