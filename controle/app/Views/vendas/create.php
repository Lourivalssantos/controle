<!-- app/Views/vendas/create.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Venda</title>
</head>
<body>
    <h2>Criar Nova Venda</h2>
    
    <?= form_open('vendas/store'); ?>
        <label for="nome_prod">Nome do Produto:</label>
        <input type="text" name="nome_prod" required>

        <label for="quant">Quantidade:</label>
        <input type="number" name="quant" required>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" required>

        <label for="comprador">Nome do Comprador:</label>
        <input type="text" name="comprador" required>

        <button type="submit">Salvar</button>
    <?= form_close(); ?>
</body>
</html>
