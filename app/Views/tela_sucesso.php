<h1> Tela ok! Recebi os dados do formulário. </h1>

<?php echo "<h2> Dados recebidos: </h2>"; ?>
<?php echo "<p> Nome: " . $nome . "</p>"; ?>
<?php echo "<p> Email: " . $email . "</p>"; ?>
<br>
<hr> 
<p> de forma mais simples: </p>
<p> Nome: <?= $nome ?> </p>
<p> Email: <?= $email ?> </p>

<a href="/"> Voltar para a tela principal </a>
