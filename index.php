<?php

$matches = [
    [
        'team_1' => 'Boston celtic',
        'team_2' => 'Lakers',
        'points_team_1' => '55',
        'points_team_2' => '60',
    ],
    [
        'team_1' => 'Chicago buls',
        'team_2' => 'Miami heats',
        'points_team_1' => '50',
        'points_team_2' => '36',
    ],
    [
        'team_1' => 'Raptors',
        'team_2' => 'Wizard',
        'points_team_1' => '78',
        'points_team_2' => '62',
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>

    <!-- <?php
        foreach ($matches as $match):
            foreach ($match as $key => $value): ?>
            <span> <?=$value?> </span>
    <?php endforeach; endforeach; ?> -->

    <?php
        foreach ($matches as $match):
            // var_dump($match);
            for($i = 0; $i <= count($matches); $i++){
                // echo $i;
                if($i == 0){
                    echo "<span>$match[team_1] </span>";
                }elseif($i == 1){
                    echo "<span>- $match[team_2] </span>";
                }elseif($i == 2){
                    echo "<span>| $match[points_team_1]</span>";
                }elseif($i == 3){
                    echo "<span>-$match[points_team_2] </span> <br>";
                }
            }
        endforeach;
    ?>

</body>
</html>