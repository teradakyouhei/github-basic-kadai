<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題5</title>
 </head>
 
 <body>
     <p>
         <?php
         // 変数に値を代入する
         $score1 = 80;
         $score2 = 60;
         $score3 = 55;
         $score4 = 40;
         $score5 = 100;
         $score6 = 25;
         $score7 = 80;
         $score8 = 95;
         $score9 = 30;
         $score10 = 60;

         $average_score = ($score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10) / 10;

         $total_score =   $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
         
         echo "合計点は".$total_score."です。";

         echo '<br>'.'<br>';

         echo "平均点は".$average_score."です。";

         ?>
     </p>
 </body>
 
 </html>