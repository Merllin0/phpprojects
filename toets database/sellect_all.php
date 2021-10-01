<?php


    $conn = mysqli_connect('localhost', 'root','','usersdatabase');
    if (!$conn){
      die('connection failed' . mysqli_connect_error());
    }

    $result = mysqli_query($conn, 'SELECT * FROM `users`');

    $collection=[];
    if (mysqli_num_rows($result) > 0)
    {
        while ($row=mysqli_fetch_assoc($result))
        {
          $collection[]=$row;
        }
    }
    $render = '<h1>Users</h1>';
    $render .= '<table>';
    $render .= '<tr><td colspan="3"><a href="">add</a></td></tr>';
    foreach ($collection as $record){
        $render .= '<tr>
                        <td>'.$record['naam'].'</td>
                        <td><a href="">update</a> </td>
                        <td><a href="">delete</a> </td>
                    </tr>';
    }
    $render .='</table>';
