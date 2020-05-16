<?php

$degree = 88;

switch(true){

    case $degree > 85 :
        echo "A";
    break;

    case $degree > 75 :
        echo "B";
    break;

    case $degree > 65 :
        echo "C";  
    break;

    case $degree >50 :
        echo "D";
    break;

    default :
        echo "F";
}