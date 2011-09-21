<?php
/*
ITP2800: Social Activism through Mobile Technology.... September 2011
This is a test for using SMS as a means to play a game. This game will ask players to text Palestine, Israel, or USA to a shortcode to play

Plugin Name: country  Palestine Israel USA Game
This code is an adaptation of a wordpress Plugin URI: http://www.farbundstil.de/games/1036-wordpress-game-plugin.php


Instructions: Text P, I, or U for Palestine, Israel or USA to play a rock paper scissor game with another player.  

http://sciencelifeny.com/itp2800/palestine.php?country=

this is the practice url from textmarks.com:  http://you.com/script.php?from=\p&country=\0

http://sciencelifeny.com/itp2800/palestine.php?from=\p&country=\0

*/




if ($_REQUEST != "i" || $_REQUEST != "p" || $_REQUEST != "u" )
{echo "Reply to this msg with p (palestine), i (Israel), or u (USA) to play";}
else {

country();

}



function country()
{
   
    // convert the text request to a numeric value  
    if($_REQUEST['country'] == "p") $user_selection = 0;
    if($_REQUEST['country'] == "i") $user_selection = 1;
    if($_REQUEST['country'] == "u") $user_selection = 2;
    
    // setup for the computers random play of U, I or P
    $logic[0] = 0;
    $logic[1] = 1;
    $logic[2] = 2;
    $random_select = rand(0,2);
    
    //if logic statements and outputs
    if($logic[$random_select] == $user_selection){
        $game_message = "Truce.";
        $game_status = "won";
    }
    if($logic[$random_select] == 0 && $user_selection == 1){
        $game_message = "Israel launches an assault on Palestine. The international community isolates Israel - You win?";
        $game_status = "won";
    }
    if($logic[$random_select] == 2 && $user_selection == 1){
        $game_message = "The US stops giving Israel weapons. Israel must negotiate treaties with neighbors - You lose?";
        $game_status = "lose";
    }
    if($logic[$random_select] == 2 && $user_selection == 0){
        $game_message = "Palestine inspires a generation of islamist terrorists. Terrorists cripple the US economy - You win?";
        $game_status = "won";
    }
    if($logic[$random_select] == 1 && $user_selection == 0){
        $game_message = "Israel launches an assault on Palestine. Palenstine is leveled - You lose?";
        $game_status = "lose";
    }
    if($logic[$random_select] == 1 && $user_selection == 2){
        $game_message = "The US stops giving Israel weapons. Israel negotiates a 2 state solution - You win?";
        $game_status = "won";
    }
    if($logic[$random_select] == 0 && $user_selection == 2){
        $game_message = "Palestine inspires a generation of islamist terrorists, making the US limit civil liberties - You lose?";
        $game_status = "lose";
    }
       
	return echo {$game_message};
	
	//echo "You:. {$country},. game:{$random_select} ,.{$game_message}";    
	//return echo $country;
}


?>