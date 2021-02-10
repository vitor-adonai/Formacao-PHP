<?php

$idade = 11;
$acompanhanteIdade = 18;
$cidade = "Campinas";

if($idade >= 18 && $cidade == 'Campinas') {
    echo "Você tem $idade, você pode entrar." . PHP_EOL;
    echo "Você também é de $cidade, entre na sala 1.";
} else if( $acompanhanteIdade >= 18) {
    echo "Você tem $idade mas o seu acompanhante tem $acompanhanteIdade, vocês 2 podem entrar.";
} else {
    echo "Você não tem idade para entrar.";
}