<?php

function getEndurance($level, $resolveMod)
{
    $bonusEndurance = ($level * $resolveMod);
    $endurance = 0;

    $enduranceLevel1 = 8;
    $enduranceLevel2 = 8 + rand(1, 8);
    $enduranceLevel3 = 8 + rand(1, 8) + rand(1, 8);

    switch ($level) 
    {
        case "1":
            $endurance = $enduranceLevel1;
          break;

        case "2":
            $endurance = $enduranceLevel2;
        break;
        
        case "3":
            $endurance = $enduranceLevel3;
        break;
        
        case "4":
            $endurance = $enduranceLevel3 + 2;
        break;
        
        case "5":
            $endurance = $enduranceLevel3 + 4;
        break;
        
        case "6":
            $endurance = $enduranceLevel3 + 6;
        break;        

        case "7":
            $endurance = $enduranceLevel3 + 8;
        break;
                
        case "8":
            $endurance = $enduranceLevel3 + 10;
        break;
                
        case "9":
            $endurance = $enduranceLevel3 + 12;
        break;
                
        case "10":
            $endurance = $enduranceLevel3 + 14;
        break;

        default:
          $endurance = 0;
      }

      $endurance += $bonusEndurance;

      return $endurance;

}

function getAttackBonus($level)
{
    $bonus = 0;

    switch ($level) 
    {
        case "1":
            $bonus = 1;
          break;

        case "2":
            $bonus = 1;
        break;
        
        case "3":
            $bonus = 2;
        break;
        
        case "4":
            $bonus = 3;
        break;
        
        case "5":
            $bonus = 3;
        break;
        
        case "6":
            $bonus = 4;
        break;        

        case "7":
            $bonus = 5;
        break;
                
        case "8":
            $bonus = 5;
        break;
                
        case "9":
            $bonus = 6;
        break;
                
        case "10":
            $bonus = 7;
        break;

        default:
          $bonus = 0;
      }
    return $bonus;
}

function minimumClassScore($score)
{
    if($score < 8)
    {
        $score = 8;
    }

    return $score;
}



function getSavingThrow($level)
{
    $levelInt = (int)$level;
    $save = (16 - $levelInt);

    return $save;

}

function getXPBonus($abilityScore)
{
    $bonus = "";

    if($abilityScore > 14)
    {
        $bonus = "+5% bonus to Experience Points";
    }

    return $bonus;
}

function saveMessage()
{
    $message = "<span class='archetypeBold'>Saving Throw:</span> Advantage on saving throws made to resist the effects of Despair.<br/><br/>";

    return $message;
}


function knightMessage()
{
    $message = "<span class='archetypeBold'>Hospitality</span><br/><br/><span class='archetypeBold'>Oath of Fealty</span><br/><br/><span class='archetypeBold'>Tournament Champion:</span> +2 bonus on attack rolls with a mace, a long blade or a lance; +2 bonus to damage when fighting on horseback with a lance.<br/><br/>";

    return $message;
}


function squire($score, $level)
{
    $message = "";

    if($score >= 15 && $level >= 4)
    {
        $message = "<span class='archetypeBold'>Squire:</span> Could attract the services of a 1st level Warrior or Yeoman.<br/><br/>";
    }

    return $message;
}



?>