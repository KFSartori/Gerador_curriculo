<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand mx-auto" href="#">Currículo Online</a>
</nav>
<div class="container mt-4">
    <h2>Preencha seus dados</h2>
    <form id="form-curriculo" action="gerar.php" method="POST" target="_blank">
        <div class="mb-3">
            <label>Nome Completo:</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="mb-3">
            <label>Data de Nascimento:</label>
            <input type="date" class="form-control" id="data_nasc" name="data_nasc" required>
        </div>
        <div class="mb-3">
            <label>Idade:</label>
            <input type="text" class="form-control" id="idade" name="idade" readonly>
        </div>
        <div class="mb-3">
            <label>E-mail:</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label>Telefone:</label>
            <input type="text" class="form-control" name="telefone" required>
        </div>
        <div class="mb-3">
            <label>Endereço:</label>
            <input type="text" class="form-control" name="endereco" required>
        </div>
        <div id="formacoes">
            <label>Formação Acadêmica:</label>
            <div class="row g-2 mb-2">
                <div class="col"><input type="text" class="form-control" name="formacao[]" placeholder="Ex: Ensino Superior em..." required></div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary mb-3" id="addFormacao">Adicionar Formação</button>

        <div id="experiencias">
            <label>Experiências Profissionais:</label>
            <div class="row g-2 mb-2">
                <div class="col"><input type="text" class="form-control" name="experiencia[]" placeholder="Ex: Analista de Sistemas na Empresa X"></div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary mb-3" id="addExperiencia">Adicionar Experiência</button>

        <div id="referencias">
            <label>Referências:</label>
            <div class="row g-2 mb-2">
                <div class="col"><input type="text" class="form-control" name="referencia[]" placeholder="Referência"></div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary mb-3" id="addReferencia">Adicionar Referência</button>

        <div class="mb-3">
            <label>Objetivo Profissional:</label>
            <textarea class="form-control" name="objetivo" rows="2"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Gerar Currículo</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
