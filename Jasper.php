<?php 
$Name=readline (" please enter your name: ");
$DOB=readline (" please enter your date of birth: ");
$homeaddress =readline ("please enter home address: ");
$birthyear=(int)readline("please enter birth year: ");
$currentyear=(int)readline("enter current year: ");
$age=$currentyear-$birthyear;
print"welcome home {$Name} and of now your
{$age} years old";
?>

