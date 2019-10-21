<?php
require_once("../Classes/Burrito.php");
use KylaBendt\SnapChallengesKylaBendt\Burrito;

$myBurrito = new Burrito('red', 'bacon');

echo"My burrito has ".$myBurrito->getBurritoChileColor()." chile and ".$myBurrito->getBurritoMeatType().'!  ';
Burrito::eatBurrito();