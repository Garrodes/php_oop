<?php 

class BattleManager 
{
    public function battlePvP($player1_name, $player2_name)
    {
        $player1Str = $player1_name ->getLevel();
        $player2Str = $player2_name -> getLevel();

        if ($player1Str > $player2Str)
        {
            $winningPlayer = $player1_name;
            $loosingPlayer = $player2_name;
            
        } else if ($player1Str = $player2Str)
        {
            $winningPlayer = null;
            $loosingPlayer = null;
            
        } else {
            $winningPlayer = $player2_name;
            $loosingPlayer = $player1_name;
           
        }

        return new BattleResult($winningPlayer, $loosingPlayer);
    }

   

}