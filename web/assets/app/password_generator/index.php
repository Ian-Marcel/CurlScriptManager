<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gerador de Senha</title>
<script src="index.js"></script>
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body class="Harvest">

<div class="container">
    <h2>Gerador de Senha</h2>
    <input type="text" class="Harvest" id="password" readonly>
    <br>
    <button class="Harvest-alt" onclick="generatePassword()">Gerar Senha</button>
    <button class="Harvest-alt" onclick="copyPassword()">Copiar Senha</button>
    <br><br>
    <input type="checkbox" class="Harvest" id="uppercase" checked> <label for="uppercase">Incluir letras maiúsculas</label>
    <br>
    <input type="checkbox" class="Harvest" id="lowercase" checked> <label for="lowercase">Incluir letras minúsculas</label>
    <br>
    <input type="checkbox" class="Harvest" id="numbers" checked> <label for="numbers">Incluir números</label>
    <br>
    <input type="checkbox" class="Harvest" id="symbols" checked> <label for="symbols">Incluir caracteres especiais</label>
    <br>
    <input type="number" class="Harvest" id="length" placeholder="Quantidade de caracteres" min="8" value="12" max="128">
</div>




