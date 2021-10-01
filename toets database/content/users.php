<?php
function users($conn)
{
    $array = dbquery($conn,'SELECT * FROM `users`');

    $render = '<h1>Users</h1>';
    $render .= '<table>';
    $render .= '<tr><td colspan="3"><a href="?controller=user_add">add</a></td></tr>';
    foreach ($array as $record){
        $render .= '<tr>
                        <td>'.$record['naam'].'</td>
                        <td><a href="?controller=user_update&id='.$record['id'].'">update</a> </td>
                        <td><a href="?controller=user_delete&id='.$record['id'].'">delete</a></td>
                    </tr>';
  }
  $render .='</table>';
  return $render;
}


?>

