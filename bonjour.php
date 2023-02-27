<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<?php
function table($nbr, $nbr2)
{
 
$table = '<table border="2">';

for ($t=-1; $t <= $nbr; $t++) {
if($t==-1){$table .= '<td></td>';}else{$table .= '<td><b>'.$t.'<b></td>';}
}

for ($a=0; $a <= $nbr; $a++) {
$table .= '<tr>';
for ($b=1; $b <= $nbr2+2 ; $b++) {
    $d = $b;
    if($b==2){$d=0;}
    if($b>2){$d=$b-2;}

if($b==1){$table .= '<td><b>'.$a*$d.'<b></td>';}else{$table .= '<td>'.$a*$d.'</td>';}
}
$table .= '</tr>';
}
$table .= '</table>';
return $table;
}
echo table(12, 12);
?>
</body>
</html>