<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <?php

        $nums = [15, 4, 18, 23, 10 ];
        sort_2way($nums, 'asc');
        sort_2way($nums, 'desc');

        function sort_2way($array, $order){

            if($order === 'asc'){
                echo "昇順にソートします。<br>";
                sort($array);
            }
            else{
                echo "降順にソートします。<br>";
                rsort($array);
            }          
            foreach($array as $value){
                echo $value . "<br>";
            }
        }
        ?>
    </p>
</body>

</html>   