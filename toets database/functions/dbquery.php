<?php
    function dbquery($conn, $sql)
    {
        $result = mysqli_query($conn, $sql);
        $numm_rows =0;

        if (is_bool($result)){
          return $result;
        }
        elseif (mysqli_num_rows($result) > 0){
          $collection = [];
          while ($row = mysqli_fetch_assoc($result)) {
            $collection [] = $row;
          }
            return $collection;
        }
        return null;
    }
