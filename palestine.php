<?php
/*
ITP2800: Social Activism through Mobile Technology.... September 2011
This is a test for using SMS as a means to play a game. This game will ask players to text Palestine, Israel, or USA to a shortcode to play

Plugin Name: RPS  Palestine Israel USA Game
This code is an adaptation of a wordpress Plugin URI: http://www.farbundstil.de/games/1036-wordpress-game-plugin.php


Instructions: Text P, I, or U for Palestine, Israel or USA to play a rock paper scissor game with another player.  

*/


function RPS_plugin_callback($match)
{
    
    // $left_hands[0] = "<img src=\"". RPS_URLPATH. "images/paper_left.jpg\">";
    // $left_hands[1] = "<img src=\"". RPS_URLPATH. "images/rock_left.jpg\">";
    // $left_hands[2] = "<img src=\"". RPS_URLPATH. "images/scissor_left.jpg\">";
    // 
    // $right_hands[0] = "<img src=\"". RPS_URLPATH. "images/paper_right.jpg\">";
    // $right_hands[1] = "<img src=\"". RPS_URLPATH. "images/rock_right.jpg\">";
    // $right_hands[2] = "<img src=\"". RPS_URLPATH. "images/scissor_right.jpg\">";
    
    if($_REQUEST['rps'] == "palestine" || $_REQUEST['rps'] == "p" ) $user_selection = 0;
    if($_REQUEST['rps'] == "usa" || $_REQUEST['rps'] == "u") $user_selection = 1;
    if($_REQUEST['rps'] == "israel" || $_REQUEST['rps'] == "i") $user_selection = 2;
    
    $logic[0] = "palestine";
    $logic[1] = "usa";
    $logic[2] = "israel";
    $random_select = rand(0,2);
    
    if($logic[$random_select] == $_REQUEST['rps']){
        $game_message = "Truce.";
        $game_status = "won";
    }
    if($logic[$random_select] == "palestine" && $_REQUEST['rps'] == "israel"){
        $game_message = "Israel launches an assault on Palestine. The international community isolates Israel - You win?";
        $game_status = "won";
    }
    if($logic[$random_select] == "usa" && $_REQUEST['rps'] == "israel"){
        $game_message = "The US stops giving Israel weapons. Israel must negotiate treaties with neighbors - You lost?";
        $game_status = "lost";
    }
    if($logic[$random_select] == "usa" && $_REQUEST['rps'] == "palestine"){
        $game_message = "Palestine inspires a generation of islamist terrorists. Terrorists cripple the US economy - You win?";
        $game_status = "won";
    }
    if($logic[$random_select] == "israel" && $_REQUEST['rps'] == "palestine"){
        $game_message = "Israel launches an assault on Palestine. Palenstine is leveled - You lost?";
        $game_status = "lost";
    }
    if($logic[$random_select] == "israel" && $_REQUEST['rps'] == "usa"){
        $game_message = "The US stops giving Israel weapons. Israel negotiates a 2 state solution - You win?";
        $game_status = "won";
    }
    if($logic[$random_select] == "palestine" && $_REQUEST['rps'] == "usa"){
        $game_message = "Palestine inspires a generation of islamist terrorists, making the US limit civil liberties - You lost?";
        $game_status = "lost";
    }
    
    if($game_status == "won") $info_box = "info_column_won";
    if($game_status == "lost") $info_box = "info_column_lost";
    if(!$game_status){
        $info_box = "info_column_neutral";
        $game_message = "Please text Palestine (p), Israel (i), or USA (u) to start";
    }
    
    

}

function RPS_plugin($content)
{
	return (preg_replace_callback(RPS_REGEXP, 'RPS_plugin_callback', $content));
}

add_filter('the_content', 'RPS_plugin');
add_filter('comment_text', 'RPS_plugin');



?>