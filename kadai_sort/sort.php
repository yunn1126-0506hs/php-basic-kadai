<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 独自のソート関数を作成
         function sort_2way($array, $order ) {
            if ($order == TRUE){
              echo "昇順にソートします。<br>";
              sort($array);
              foreach($array as  $ar){
                echo $ar . '<br>';
            }
            } else{
              echo "降順にソートします。<br>";
              rsort($array);
              foreach($array as $ar){
                echo $ar . '<br>';
            }
        }
        };

        // ソートする配列を宣言
        $num = [15, 4, 18, 23, 10 ];

        // ソート関数を呼び出す（昇順）
        sort_2way($num,TRUE);
        // ソート関数を呼び出す（降順）
        sort_2way($num, false);
      
        ?>
    </p>
</body>

</html>
