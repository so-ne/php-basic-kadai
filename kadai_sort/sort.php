<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order) {
          if ($order === TRUE) {
            echo '昇順にします<br>';
            sort($array); 
            } else {
            echo '降順にします<br>';
            rsort($array);
        }

        foreach ($array as $num) {
          echo $num . '<br>';
      }
    }  
    
       sort_2way($array, true);
       echo '<br>';
       sort_2way($array, false);
        ?>
    </p>
</body>

</html>