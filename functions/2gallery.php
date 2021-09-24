 <?php
 $images = glob("afbeeldingen/*{jpg,png,jpeg}", GLOB_BRACE);

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
    background-color: darkslateblue;
    height: 300px;
    padding: 5px;
    width: 400px;
  }
  .img{
    height: 90px;
    margin: 5px;
  }
</style>
<body>
<h1>gallery</h1>
<div id="gallery"><?= $gallery?> </div>
</body>
</html>
