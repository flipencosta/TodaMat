<?php
// Simulando a filtragem de questões com base na matéria selecionada

$materia = $_POST['materia'];

$questoes = [
    'regra_de_3' => ['Questão 1', 'Questão 2'],
    'porcentagem' => ['Questão 3', 'Questão 4'],
    // Adicionar mais questões conforme necessário
];

$resultado = $questoes[$materia] ?? [];

foreach ($resultado as $questao) {
    echo "<p>$questao</p>";
}
?>
