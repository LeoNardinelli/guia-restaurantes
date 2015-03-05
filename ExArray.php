<html>
    <head>
        <title>ExArray</title>
        <meta charset="UTF-8">
    </head>
    <body>
    
<?php

$array [0] [0] = '02K01';
$array [1] [0] = '02J01';
$array [2] [0] = '02K01';
$array [0] [1] = 'Tecnologia Web II';
$array [1] [1] = 'Linguagem de Programação I';
$array [2] [1] = 'Linguagem de programação I';
$array [0] [2] = 'Segunda';
$array [1] [2] = 'Terça';
$array [2] [2] = 'Quarta';
$array [0] [3] = 'Charles';
$array [1] [3] = 'João';
$array [2] [3] = 'Charles';

for ($i=0; $i<=4;$i++) {
    echo "<tr>";
    
    


for ($k=0; $k<=5; $k++) {
    echo "<td>";
    
 $array=[$i][$k];
    
}
}
?>
    </body>
</html>


 

      











