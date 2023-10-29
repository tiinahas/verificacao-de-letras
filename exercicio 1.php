// faça um programa que receba uma letra e informe se é vogal ou consoante. [switch/case]

<?php
// Receba a letra do usuário (supondo que o usuário já tenha inserido a letra)
$letra = 'a'; // Substitua 'a' pela letra fornecida pelo usuário

// Converte a letra para minúscula para facilitar a verificação
$letra = strtolower($letra);

// Utilize a estrutura switch/case para verificar se a letra é uma vogal ou consoante
switch ($letra) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "A letra $letra é uma vogal.";
        break;
    default:
        echo "A letra $letra é uma consoante.";
        break;
}
?>
