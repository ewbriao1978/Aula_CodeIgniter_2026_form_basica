<h1> Pessoas da empresa </h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>#</th>
        <th>#</th>
    </tr>
    <?php foreach ($pessoas as $pessoa) : ?>
        <tr>
            <td><?= $pessoa['id'] ?></td>
            <td><?= $pessoa['nome'] ?></td>
            <td><?= $pessoa['email'] ?></td>

            <td>

            <form action="remover" method="post">
                <input type="hidden" name="id_para_remover" value="<?= $pessoa['id'] ?>">
                <input type="submit" value="Remover">
            </form>
        

            </td>
            <td>
                Botao   
            </td>



        </tr>
    <?php endforeach; ?>
    </table>

    <a href="/"> Voltar para a tela principal </a>