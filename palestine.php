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


//$country = $_GET("country");

echo "Please text Palestine (p), Israel (i), or USA (u) to start";

/*
function country_plugin_callback()
{
    
       
	// convert the text request to a numeric value  
    if($_REQUEST['country'] == "palestine" || $_REQUEST['country'] == "p" ) $user_selection = 0;
    if($_REQUEST['country'] == "usa" || $_REQUEST['country'] == "u") $user_selection = 1;
    if($_REQUEST['country'] == "israel" || $_REQUEST['country'] == "i") $user_selection = 2;
    
    // setup for the computers random play of U, I or P
    $logic[0] = "palestine";
    $logic[1] = "usa";
    $logic[2] = "israel";
    $random_select = rand(0,2);
    
    //if logic statements and outputs
    if($logic[$random_select] == $user_selection){
        $game_message = "Truce.";
        $game_status = "won";
    }
    if($logic[$random_select] == "palestine" && $_REQUEST['country'] == "israel"){
        $game_message = "Israel launches an assault on Palestine. The international community isolates Israel - You win?";
        $game_status = "won";
    }
    if($logic[$random_select] == "usa" && $_REQUEST['country'] == "israel"){
        $game_message = "The US stops giving Israel weapons. Israel must negotiate treaties with neighbors - You lose?";
        $game_status = "lose";
    }
    if($logic[$random_select] == "usa" && $_REQUEST['country'] == "palestine"){
        $game_message = "Palestine inspires a generation of islamist terrorists. Terrorists cripple the US economy - You win?";
        $game_status = "won";
    }
    if($logic[$random_select] == "israel" && $_REQUEST['country'] == "palestine"){
        $game_message = "Israel launches an assault on Palestine. Palenstine is leveled - You lose?";
        $game_status = "lose";
    }
    if($logic[$random_select] == "israel" && $_REQUEST['country'] == "usa"){
        $game_message = "The US stops giving Israel weapons. Israel negotiates a 2 state solution - You win?";
        $game_status = "won";
    }
    if($logic[$random_select] == "palestine" && $_REQUEST['country'] == "usa"){
        $game_message = "Palestine inspires a generation of islamist terrorists, making the US limit civil liberties - You lose?";
        $game_status = "lose";
    }
       
	return echo "You:. {$country},. game:{$random_select} ,.{$game_message}";    
	//return echo $country;
}
*/


?>