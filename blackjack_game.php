<?php

//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
//                    ** FUNCTIONS BELOW **


function deal_cards($number_of_cards, $number_of_players)
{
	$players = 0;
	if($players > 2)
	{

	}
}
           
// array of players
$players = ['John', 'Jane', 'Jack', 'Justin'];

// getting the count of players
$number_of_players = count($players); 

// card values in one array
$cards = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'Jack', 'Queen', 'King', 'Ace');

// suits in another array
$suits = array('Clubs', 'Diamonds', 'Hearts', 'Spades');

// combining both $cards and $suits arrays to create the deck
$deck = array();

foreach ($suits as $suit) 
{
    foreach ($cards as $card) 
    {
        $deck[] = array ("card"=>$card, "suit"=>$suit);
    }
}

shuffle($deck);

print_r($deck) . PHP_EOL;














