<?php
// Função para remover duplicados de um array
function removerDuplicados($array) {
    // Usamos array_unique para remover os valores duplicados
    return array_values(array_unique($array));
}

// Exemplo de array com elementos duplicados
$array = [1, 2, 2, 3, 4, 4, 5];

// Remover duplicados e exibir o resultado
$arraySemDuplicados = removerDuplicados($array);
print_r($arraySemDuplicados);
?>

<?php
// Função para verificar a aprovação
function verificarAprovacao($nota) {
    if ($nota >= 6) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

// Array de notas de alunos
$notas = [7, 5, 9, 3, 6, 10];

// Exibindo as notas e aprovação de cada aluno
foreach ($notas as $nota) {
    echo "Nota: " . $nota . " - " . verificarAprovacao($nota) . "\n";
}
?>
