<?php

$person1 = 'Dan';
$person2 = 'Alex';

$deck = 
[
1 => ['1'      =>['diamonds', 'hearts', 'spades', 'clubs']],
2 => ['2'      =>['diamonds', 'hearts', 'spades', 'clubs']],
3 => ['3'      =>['diamonds', 'hearts', 'spades', 'clubs']],
4 => ['4'      =>['diamonds', 'hearts', 'spades', 'clubs']],
5 => ['5'      =>['diamonds', 'hearts', 'spades', 'clubs']],
6 => ['6'      =>['diamonds', 'hearts', 'spades', 'clubs']],
7 => ['7'      =>['diamonds', 'hearts', 'spades', 'clubs']],
8 => ['8'      =>['diamonds', 'hearts', 'spades', 'clubs']],
9 => ['9'      =>['diamonds', 'hearts', 'spades', 'clubs']],
10 =>['10'     =>['diamonds', 'hearts', 'spades', 'clubs']],
11 =>['Jack'   =>['diamonds', 'hearts', 'spades', 'clubs']],
12 =>['Queen'  =>['diamonds', 'hearts', 'spades', 'clubs']],
13 =>['King'   =>['diamonds', 'hearts', 'spades', 'clubs']],
14 =>['Ace'    =>['diamonds', 'hearts', 'spades', 'clubs']]
];


foreach($deck as $value => $cards)
{
	foreach($cards as $card => $suits)
	{
		foreach($suits as $suit)
		{
			echo $card . " of " . $suit . PHP_EOL;
		}
	}
}
























