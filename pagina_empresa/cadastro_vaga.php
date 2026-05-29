<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vaga - GoraGO</title>
    <link rel="stylesheet" href="styles/cadastro_vaga.css">
</head>
<body>

    <!-- CABEÇALHO DO FLUXO (NAV) -->
    <header class="flow-header">
        <a href="home_empresa.php" class="back-arrow-btn" title="Voltar">
            <span class="arrow-icon"></span>
        </a>
        <h1>Cadastrar Nova Vaga</h1>
        <div class="search-trigger">
            <span class="css-lens-icon"></span>
        </div>
    </header>

    <!-- CONTEÚDO PRINCIPAL (FORMULÁRIO) -->
    <main class="form-main-container">
        <form action="processa_vaga.php" method="POST" class="vacancy-form">

            <!-- CARD 1: INFORMAÇÕES BÁSICAS -->
            <fieldset class="form-card-section">
                <legend class="section-header">
                    <h2>Informações Básicas da Vaga</h2>
                    <span class="chevron-right"></span>
                </legend>

                <div class="input-grid-triple">
                    <!-- Título da Vaga -->
                    <div class="input-group">
                        <label for="vacancy-title">Título da Vaga</label>
                        <div class="input-with-icon">
                            <span class="user-css-icon"></span>
                            <input type="text" id="vacancy-title" name="titulo" placeholder="Ex: Desenvolvedor de Software">
                        </div>
                    </div>

                    <!-- Tipo de Contrato -->
                    <div class="input-group">
                        <label for="contract-type">Tipo de Contrato</label>
                        <div class="input-with-icon">
                            <span class="user-css-icon"></span>
                            <input type="text" id="contract-type" name="contrato" placeholder="Ex: CLT">
                        </div>
                    </div>

                    <!-- Localização -->
                    <div class="input-group">
                        <label for="location">Localização</label>
                        <div class="input-with-icon">
                            <span class="user-css-icon"></span>
                            <input type="text" id="location" name="localizacao" placeholder="Ex: São Paulo - SP">
                        </div>
                    </div>
                </div>
            </fieldset>

            <!-- CARD 2: DESCRIÇÃO E REQUISITOS -->
            <fieldset class="form-card-section">
                <legend class="section-header">
                    <h2>Descrição e Requisitos</h2>
                    <span class="chevron-right"></span>
                </legend>

                <div class="input-grid-double">
                    <!-- Descrição da Vaga -->
                    <div class="input-group">
                        <label for="description">Descrição da Vaga</label>
                        <textarea id="description" name="descricao" placeholder="Descrição da vaga"></textarea>
                    </div>

                    <!-- Requisitos e Qualificações -->
                    <div class="input-group">
                        <label for="requirements">Requisitos e Qualificações</label>
                        <textarea id="requirements" name="requisitos" placeholder="Requisitos e Qualificações"></textarea>
                    </div>
                </div>
            </fieldset>

            <!-- BOTÃO DE ENVIO PRINCIPAL -->
            <div class="form-actions">
                <button type="submit" class="submit-form-btn"> <a href="publi_vaga_concluido.php"></a>
                    Publicar Vaga
                </button>
            </div>

        </form>
    </main>

</body>
</html>
