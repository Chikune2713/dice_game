<?php
    $activePlayer = 0;
    // 0 gedeg n player 1
    //1 gedeg n player 2
    $score = array(
        0 => 0 ,
        1 => 1
    );

    $win = 50;
    $won = 0;

    while($won < 50){
        $random = rand(1,6);

        echo "shoo" . $random . "<br>";
    if($random > 1){
        $act = $activePlayer + 1;
        $score[$activePlayer] = $score[$activePlayer] + $random ;
        echo $act. "r toglogchiin onoo:" . $score[$activePlayer] . "<br>"; 
        $won = $score[$activePlayer]    ;
    } else{
        if($activePlayer === 0){
            $activePlayer =1 ;
        }
        else{
            $activePlayer = 0;
        }
    }
}
    
    // 1 buuwal eelj n soligdono 
    // herwee 20 onoo turuulj hursen n hojino

?>