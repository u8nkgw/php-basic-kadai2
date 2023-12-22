<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
     <?php
         $onion_datas = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
 
         
         foreach ($onion_datas as $key => $value) {
             echo "{$key}:{$value}<br>";
         }

         echo '<br>';
 
         $personal_datas = ['id' => 1, '名前' => '侍太郎', '年齢' => 30];
 
         
         foreach ($personal_datas as $key => $value) {
             echo "{$key}:{$value}<br>";
         }
         ?>
     </p>
</body>

</html>