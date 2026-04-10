<h1> Formulário </h1>
<h2> Editar pessoa: <?= $pessoa['nome'] ?> </h2>

<form action="/update_pessoa" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?= $pessoa['nome'] ?>" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?= $pessoa['email'] ?>" required>
    <input type="hidden" name="id_para_editar" value="<?= $pessoa['id'] ?>">
    <br><br>
    <input type="submit" value="Enviar">
</form>

<a href="/"> Voltar para a tela principal </a>