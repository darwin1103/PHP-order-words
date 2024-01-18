<?php 

include 'main.php';

$answer_words = $_REQUEST;

for ($i = 0; $i < count($words); $i++) {
    echo '<div class="alert container '; // Div principal
    echo ($answer_words["word-" . $i] == $words[$i]) ? 'alert-success' : 'alert-danger'; // Determinar el color del fondo según la respuesta

    echo ' mt-3">'; // Cierre del atributo class y espacio adicional

    echo ($answer_words["word-" . $i] == $words[$i]) ? 'Correct' : 'Incorrect'; // Mostrar texto según la respuesta

    if ($answer_words["word-" . $i] != $words[$i]) {
        echo ' The correct word is: ' . $words[$i]; // Mostrar la palabra correcta en caso de respuesta incorrecta
    }

    echo '</div>'; // Cierre de la div principal
}

?>