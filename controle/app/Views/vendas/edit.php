<!-- app/Views/vendas/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venda</title>
</head>
<body>
    <h2>Editar Venda</h2>
    
    <?= form_open(base_url('vendas/update'), ['method' => 'post']); ?>

        <input type="hidden" name="id" value="<?= $venda['id']; ?>">


        <label for="nome_prod">Nome do Produto:</label>
        <input type="text" name="nome_prod" value="<?= $venda['nome_prod']; ?>" required>

        <label for="quant">Quantidade:</label>
        <input type="number" name="quant" value="<?= $venda['quant']; ?>" required>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" value="<?= $venda['valor']; ?>" required>

        <label for="comprador">Nome do Comprador:</label>
        <input type="text" name="comprador" value="<?= $venda['comprador']; ?>" required>

        <button type="submit">Atualizar</button>
    <?= form_close(); ?>
</body>
</html>
