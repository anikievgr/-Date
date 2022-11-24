<?php
$arrayMonthRus = [
  'Январь',
  'Февраль',
  'Март',
  'Апрель',
  'Май',
  'Июнь',
  'Июль',
  'Август',
  'Сентябрь',
  'Октябрь',
  'Ноябрь',
  'Декабрь'
];
$unix =  time();
$numberMoth = date("m", $unix);
$numberMoth--;
$date = [
    date("d", $unix),
    $arrayMonthRus[$numberMoth],
    date("Y", $unix)
];
function Iputdate($day,$month,$year){
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="date"><?=$day?>/<?=$month?>/<?=$year?></div>
</body>
</html>
<style>
    .date{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
</style>
    <?php
}
 Iputdate($date[0],$date[1],$date[2]);
?>
