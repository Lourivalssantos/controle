<!-- app/Views/vendas/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vendas</title>
</head>
<body>
    <h2>Lista de Vendas</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Comprador</th>
                
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
                <tr>
                    <td><?= $venda['id']; ?></td>
                    <td><?= $venda['nome_prod']; ?></td>
                    <td><?= $venda['quant']; ?></td>
                    <td><?= $venda['valor']; ?></td>
                    <td><?= $venda['comprador']; ?></td>
                    
                    <td>
                        <a href="<?= base_url('vendas/edit/' . $venda['id']); ?>">Editar</a>
                        <a href="<?= base_url('vendas/delete/' . $venda['id']); ?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?></tbody>
</tbody>
    </table>
    <a href="<?= base_url('vendas/create'); ?>">Criar Nova Venda</a>

</body>
</html>
