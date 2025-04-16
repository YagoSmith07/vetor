<?php
// Vetor com as cores e frases
$cores = array(
    "Azul" => "O azul transmite tranquilidade e paz.",
    "Vermelho" => "O vermelho representa paixão e energia.",
    "Verde" => "O verde simboliza esperança e natureza.",
    "Amarelo" => "O amarelo expressa alegria e otimismo.",
    "Roxo" => "O roxo está ligado à criatividade e espiritualidade."
);

// Sorteia uma chave aleatória (cor)
$corSorteada = array_rand($cores);
$frase = $cores[$corSorteada];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cor Sorteada</title>
</head>
<body>
    <h2>Cor Sorteada: <?php echo $corSorteada; ?></h2>
    <p><?php echo $frase; ?></p>
    <a href="index.php">Sortear outra cor</a>
</body>
</html>