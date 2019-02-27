<?php
$color = array(
	'Rosa',
	'Azul',
	'Amarelo',
	'Vermelho',
        'caramelo',
	'Laranja',
	'Roxo',
	'Verde',
    );
function lista_cores($vetor){
    for ($i=0; $i < count($vetor) ; $i++){	
        echo "<li>".$vetor[$i]."</li>";           

     }
}
echo "<ul>";
lista_cores($color);
echo "</ul>";