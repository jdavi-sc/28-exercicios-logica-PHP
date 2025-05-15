<?php

    $letraInformada = $_POST["letraInformada"];

    if ($letraInformada === "A" || $letraInformada === "a" || $letraInformada === "E" || $letraInformada === "e" || $letraInformada === "I" || $letraInformada === "i" || $letraInformada === "O" || $letraInformada === "o" || $letraInformada === "U" || $letraInformada === "u") {
        echo "A letra $letraInformada é uma vogal";

    } else if (!($letraInformada === "A" || !$letraInformada === "a" || !$letraInformada === "E" || !$letraInformada === "e" || !$letraInformada === "I" || !$letraInformada === "i" || !$letraInformada === "O" || !$letraInformada === "o" || !$letraInformada === "U" || !$letraInformada === "u")) {
        echo "A letra $letraInformada é uma consoante";

    } else {
        echo "Informe uma letra";
    }
        
?>