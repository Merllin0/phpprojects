<?php
include 'functions/bootstrap.php';
bootstrap('functions');
$conn = dbconnect('localhost', 'root','','usersdatabase');
$content = urltrigger($conn);
?>
<!DOCTYPE html>
<html>
<style>
  article {
    width: 700px;
    height: 400px;
    background-color: mediumpurple;
    overflow: auto;
  }
  .img{
    height: 300px;
    float: left;
    border: grey solid 3px;
    margin: 5px;
  }
  .invalid{
    color: red;
  }
  .red{
    border: red 2px solid;
  }

</style>
<body>
<h2>PHP Website</h2>
<nav>
  <a href=""
  <a href="index.php?controller=home">home</a>
  <a href="index.php?controller=photos">gallery</a>
  <a href="index.php?controller=users">users</a>
</nav>
<article>
  <?= $content?>
</article>
</body>
</html>
