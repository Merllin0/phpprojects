<?php
    function user_delete($conn)
    {
            if (!empty($_GET['id']) && is_numeric($_GET['id']))
            {
            $sql='DELETE FROM `users` WHERE `id`="'.$_GET['id'].'"';

              if (dbquery($conn, $sql))
              {
                header('location: index.php?controller=users');
              }
            }
            else {
              die("<h1>404 ERROR</h1>");
            }
    }
