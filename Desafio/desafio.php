<?php
= 60) {
    echo "Situação: Aprovado!\n";
} elseif ($media >= 40) { // Critério comum de recuperação (entre 40 e 59)
    echo "Situação: Recuperação\n";
} else {
    echo "Situação: Reprovado\n";
}

php
= 60) {
    echo "Situação: Aprovado!\n";
} elseif ($media >= 40) { // Critério comum de recuperação (entre 40 e 59)
    echo "Situação: Recuperação\n";
} else {
    echo "Situação: Reprovado\n";
}
Resultados:";
echo "Média final: " . number_format($media, 1) . "



";

```
    if ($media >= 60) {
        echo "Situação: **Aprovado!**";
    } elseif ($media >= 40) {
        echo "Situação: **Recuperação**";
    } else {
        echo "Situação: **Reprovado**";
    }
}
?>