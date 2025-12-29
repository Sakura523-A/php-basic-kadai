<DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <p>
        <?php
        $love=['名前'=>'玉ねぎ' ,'値段'=>200 ,'産地'=>'北海道']; 
        foreach($love as $key => $value){
            echo "{$key}：{$value} <br>";
        }