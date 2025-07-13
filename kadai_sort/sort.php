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
            foreach ($nums as $num) {
              echo $num . '<br>';
            }
          } else {
            echo '降順にします<br>';
            rsort($array);
            foreach ($nums as $num) {
              echo $num . '<br>';
        }
      }
    }

  
       $array = [15, 4, 18, 23, 10 ];
       sort_2way($array, true);
       sort_2way($array, false);
        ?>
    </p>
</body>

</html>