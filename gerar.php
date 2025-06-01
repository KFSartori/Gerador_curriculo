<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $formacoes = $_POST['formacao'];
    $experiencias = $_POST['experiencia'];
    $referencias = $_POST['referencia'];
    $objetivo = $_POST['objetivo'];
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Currículo de <?php echo htmlspecialchars($nome); ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    <div class="container mt-4">
        <h2>Currículo de <?php echo htmlspecialchars($nome); ?></h2>
        <p><strong>Data de Nascimento:</strong> <?php echo htmlspecialchars($data_nasc); ?> | <strong>Idade:</strong> <?php echo htmlspecialchars($idade); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?> | <strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?></p>
        <p><strong>Endereço:</strong> <?php echo htmlspecialchars($endereco); ?></p>
        <h5>Formação Acadêmica:</h5>
        <ul>
            <?php foreach($formacoes as $formacao) { if($formacao) echo '<li>'.htmlspecialchars($formacao).'</li>'; } ?>
        </ul>
        <h5>Experiências Profissionais:</h5>
        <ul>
            <?php foreach($experiencias as $exp) { if($exp) echo '<li>'.htmlspecialchars($exp).'</li>'; } ?>
        </ul>
        <h5>Referências:</h5>
        <ul>
            <?php foreach($referencias as $ref) { if($ref) echo '<li>'.htmlspecialchars($ref).'</li>'; } ?>
        </ul>
        <h5>Objetivo Profissional:</h5>
        <p><?php echo nl2br(htmlspecialchars($objetivo)); ?></p>
        <button onclick="window.print()" class="btn btn-success">Imprimir / Baixar PDF</button>
    </div>
    </body>
    </html>
<?php
}
?>
