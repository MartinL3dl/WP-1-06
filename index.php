<?php

$rope = false;
$woodchunk = true;
$nails = true;
$knife = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Inventář</h1>
<?php
if ($rope == True) { 
    echo '<img src="rope.jpg" alt="provaz"/>';
}

if ($woodchunk == True) echo '<img src="wood.jpg" alt="dřevo"/>';

if ($nails == true) {
    echo '<img src="nails.jpg" alt="hřebíky"/>';
}

if ($knife == true) {
    echo '<img src="knife.jpg" alt="nůž"/>';
}

?>
<h1>můžeš vyrobit</h1>
<?php
/*
bow = rope + knife + woodchunk
nail bat = nails + woodchunk
nunchucks = rope + woodchunk
spear = knife + woodchunk 
*/

if ($rope && $knife && $woodchunk) {
    echo '<img src="bow.jpg" alt="luk">';
} elseif ($nails && $woodchunk) {
    echo '<img src="spikedbat" alt="pálka s hřebíky"/>';
} elseif ($rope && $woodchunk) {
    echo '<img src="nunchacks.jpg" alt="ive got three stick nunchucks !"/>'; "AYYY YA !";
} elseif ($knife && $woodchunk) {
    echo '<img src="spear.jpg" alt="kopí"/>';
} else {
    echo '<img src="materialnotfound.jpg" alt="nedostatek materiálu"/>'; echo '<img src="you.png" alt="you now"/>';
}

?>

</body>
</html>