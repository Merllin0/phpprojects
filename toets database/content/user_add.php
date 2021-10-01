<?php
    function user_add($conn)
    {
      $invalid = null;
      $invalid_email = true;
      $invalid_naam = true;
      $invalid_password = true;

      if (isset($_POST['add'])) {
        elseif (isset($_POST['email']) || strlen($_POST['email']) <5) {
          $invalid_email = true;
        }
        elseif (isset($_POST['naam']) || strlen($_POST['naam']) < 3) {
          $invalid_naam = true;
        }
        elseif (isset($_POST['password']) || strlen($_POST['password']) <5) {

          $invalid_password = true;
        }
        elseif ($invalid_email === false || $invalid_naam === false || $invalid_password === false)
        {
          $invalid = '<p class="invalid">form is invalid</p>';
        }
        else {
          $sql = 'INSERT INTO `users`(`email`, `naam`,`password`)
        VALUES ("' . $_POST['email'] . '", "' . $_POST['naam'] . '", "' . $_POST['password'] . '")';

          if (dbquery($conn, $sql)) {
            header('location: ?controller=users');
          }

        }
      }
        $form = '<h3>add</h3>';
        $form .= '<a href="?controller=users">back</a><hr>';

        $form .= '<form action="" method="post">';
        $form .= 'emailadres <input name= "email" type="text"class=';
              ($invalid_email != true) ? $form .= '"red" ' : $form .= '"" ';
              $form .= ' value="';
              (isset($_POST['email'])) ? $form .= $_POST['email'] : null;
              $form .='"<br>"';
              $form .= 'naam <input name="naam" type="text"class=';
              ($invalid_naam != true) ? $form .= '"red" ' : $form .= '"" ';
              $form .= ' value="';
              (isset($_POST['naam'])) ? $form .= $_POST['naam'] : null;
              $form .='"<br>"';
              $form .= 'password <input name="password" type="text"class=';
              ($invalid_password != true) ? $form .= '"red" ' : $form .= '"" ';
              $form .= 'value="';
              (isset($_POST['password'])) ? $form .= $_POST['password'] : null;
              $form .='"<br>"';

        $form .= '<input name="add" type="submit" value="add user">';
        $form .= '</form>';


      return $form.$invalid;
    }
