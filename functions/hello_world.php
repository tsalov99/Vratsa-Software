<?php

$word = "HELOOOOOOOOOOOOOOOOOOOOOOOO WOooD";

echo "Hello world";
echo "<br>";
function print_word(){
    global $word;
    echo $word;
}

print_word();