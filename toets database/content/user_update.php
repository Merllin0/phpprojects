<?php
    function user_update($conn)
    {
      $invalid                  = null;
      $invalid_email            = false;
      $invalid_naam             = false;
      $invalid_password         = false;

        if (!isset($_POST['update']) && isset($_GET['id']) && is_numeric($_GET['id']))
        {
          $sql = 'SELECT * FROM `users` WHERE `id`="'.$_GET['id'].'"';

              if ($array = dbquery($conn, $sql)){
                $_POST = $array[0];
              }
        }
         elseif(isset($_POST['update']) && isset($_GET['id']) && is_numeric($_GET['id']))
        {
          if (!isset($_POST['email']) || strlen($_POST['email']) <3)
          {
            $invalid_email = true;
          }
          if (!isset($_POST['naam']) || strlen($_POST['naam']) <3)
          {
            $invalid_naam = true;
          }
          if (!isset($_POST['password']) || strlen($_POST['password']) <3)
          {
            $invalid_password = true;
          }
          if ($invalid_email === true || $invalid_naam === true || $invalid_password === true)
          {
            $invalid = '<p class="invalid">form is invalid</p>';
          }
          else{

            $sql = 'UPDATE `users`
            SET `email`="'.$_POST['email'].'", `naam`="'.$_POST['naam'].'", `password`="'.$_POST['password'].'"
            WHERE `id` = '.$_GET['id'];
    //die($sql);
            if (dbquery($conn, $sql)) {
              header('location ?controller=users()');
            }
          }
        }
        else
          {
          die("<h1>404 EROR</h1>");
          }

      $form = '<h3>add</h3>';
      $form .= '<a href="?controller=users">back</a><hr>';
      $form .= '<form action="" method="post">';
      $form .= 'emailadres <input name= "email" type="text"class=';
      ($invalid_email != false) ? $form .= '"red" ' : $form .= '"" ';
      $form .= ' value="';
      (isset($_POST['email'])) ? $form .= $_POST['email'] : null;
      $form .='"<br>';
      $form .= 'naam <input name="naam" type="text"class=';
      ($invalid_naam != false) ? $form .= '"red" ' : $form .= '"" ';
      $form .= ' value="';
      (isset($_POST['naam'])) ? $form .= $_POST['naam'] : null;
      $form .='"<br>';
      $form .= 'password <input name="password" type="text"class=';
      ($invalid_password != false) ? $form .= '"red" ' : $form .= '"" ';
      $form .= 'value="';
      (isset($_POST['password'])) ? $form .= $_POST['password'] : null;
      $form .='"<br>';


      $form .= '<input name="update" type="submit" value="update">';
      $form.= '</form>';

      return $form.$invalid;
    }
