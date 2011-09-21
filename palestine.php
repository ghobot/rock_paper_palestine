<?php
/*
ITP2800: Social Activism through Mobile Technology.... September 2011
This is a test for using SMS as a means to play a game. This game will ask players to text Palestine, Israel, or USA to a shortcode to play

Plugin Name: country  Palestine Israel USA Game
This code is an adaptation of a wordpress Plugin URI: http://www.farbundstil.de/games/1036-wordpress-game-plugin.php


Instructions: Text P, I, or U for Palestine, Israel or USA to play a rock paper scissor game with another player.  

http://sciencelifeny.com/itp2800/palestine.php?country=

this is the practice url from textmarks.com:  http://you.com/script.php?from=\p&msg=\0

http://sciencelifeny.com/itp2800/palestine.php?msg=\0
*/


$player = $_GET['msg'];


if ($player == "i" || $player == "p" || $player == "a")
{

$gameResult_array = country($player);

echo $gameResult_array[0]." "."-";
echo $gameResult_array[1];


} else {


echo "Reply to this msg with 'p' for Palestine, 'i' for Israel, or 'a' for USA to play.";

}



function country($text)
{
   
    // convert the text request to a numeric value  
    if($text == "p") 
    { $user_selection = 0;}
    
    if($text == "i") 
    {$user_selection = 1;}
    
    if($text == "a") 
    {$user_selection = 2;}
    
    // setup for the computers random play of U, I or P
    $logic[0] = 0;
    $logic[1] = 1;
    $logic[2] = 2;
    $random_select = rand(0,2);
    
    //if logic statements and outputs
    if($logic[$random_select] == $user_selection){
        $game_message = "Truce. Play again";
        $game_status = "equal sides";
    }
    if($logic[$random_select] == 0 && $user_selection == 1){
        $game_message = "Israel launches an assault on Palestine. The international community isolates Israel - You win?";
        $game_status = "Israel vs Palestine";
    }
    if($logic[$random_select] == 2 && $user_selection == 1){
        $game_message = "The US stops giving Israel weapons. Israel must negotiate treaties with neighbors - You lose?";
        $game_status = "Israel vs USA";
    }
    if($logic[$random_select] == 2 && $user_selection == 0){
        $game_message = "Palestine inspires a generation of islamist terrorists. Terrorists cripple the US economy - You win?";
        $game_status = "Palestine vs USA";
    }
    if($logic[$random_select] == 1 && $user_selection == 0){
        $game_message = "Israel launches an assault on Palestine. Palestine is leveled - You lose?";
        $game_status = "Palestine vs Israel";
    }
    if($logic[$random_select] == 1 && $user_selection == 2){
        $game_message = "The US stops giving Israel weapons. Israel negotiates a 2 state solution - You win?";
        $game_status = "USA vs Israel";
    }
    if($logic[$random_select] == 0 && $user_selection == 2){
        $game_message = "Palestine inspires a generation of islamist terrorists, making the US limit civil liberties - You lose?";
        $game_status = "USA vs Palestine";
    }
    $result= array($game_status, $game_message);
    
    return $result;
	
}


?>