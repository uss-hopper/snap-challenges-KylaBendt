<?php
require_once("../Classes/Burrito.php");
use KylaBendt\SnapChallengesKylaBendt\Burrito;

$myBurrito = new Burrito('red', 'bacon');

echo("My burrito has ");
echo($myBurrito->getBurritoChileColor());
echo(" chile and ");
echo($myBurrito->getBurritoMeatType());