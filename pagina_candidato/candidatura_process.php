<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minhas Candidaturas - GoraGO</title>

  <link rel="stylesheet" href="styles/candidato_pro_fi_can.css">
  <link rel="stylesheet" href="https://cloudflare.com">

</head>
<body>

  <a href="home_candidato.php" class="btn-voltar">
    <img src="imagens/voltar.svg" alt="Voltar para a página anterior">
  </a>

  <nav>
    <?php
      include_once "../includes/nav_candidato.php";
    ?>
  </nav>

  <!-- CONTAINER COM FILTRO DE ZOOM DE 75% -->
  <div class="page-scale">

    <main class="candidaturas-container">
      
      <!-- SUB-HEADER COM TÍTULO (Botão antigo de ícone interno removido para evitar duplicidade) -->
      <div class="page-header">
        <h1>Minhas Candidaturas</h1>
      </div>

      <!-- ABAS DE NAVEGAÇÃO (TABS) -->
      <div class="tabs-navigation">
        <a href="candidatura_process.php" class="tab-btn active">Em progresso</a>
        <a href="candidato_finalizada.php" class="tab-btn">Finalizadas</a>
        <a href="candidato_canceladas.php" class="tab-btn">Canceladas</a>
      </div>

      <!-- GRID DOS CARDS DE CANDIDATURA -->
      <div class="candidaturas-grid">

        <!-- CARD 1 -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Designer UX/UI</h3>
              <p class="company-name">PixelStream Studio</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag azul">
              <i class="fa-regular fa-clock"></i> Portfólio e Entrevista
            </span>
            <p class="update-text">Atualizado hoje</p>
          </div>
        </article>

        <!-- CARD 2 -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Desenvolvedor Front-end Senior</h3>
              <p class="company-name">TechCorp Solutions</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag azul">
              <i class="fa-regular fa-clock"></i> Entrevista Técnica
            </span>
            <p class="update-text">Atualizado há 2 dias</p>
          </div>
        </article>

        <!-- CARD 3 -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Gerente de Produto</h3>
              <p class="company-name">InovaMind Labs</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag azul">
              <i class="fa-regular fa-clock"></i> Entrevista Comportamental
            </span>
            <p class="update-text">Atualizado há 3 dias</p>
          </div>
        </article>

        <!-- CARD 4 -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Engenheiro de Software Pleno</h3>
              <p class="company-name">FinTech Brasil</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag azul">
              <i class="fa-regular fa-clock"></i> Em análise
            </span>
            <p class="update-text">Atualizado há 5 dias</p>
          </div>
        </article>

        <!-- CARD 5 -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Engenheiro de Software Backend</h3>
              <p class="company-name">CloudNest Technologies</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag azul">
              <i class="fa-regular fa-clock"></i> Teste Prático
            </span>
            <p class="update-text">Atualizado há 5 dias</p>
          </div>
        </article>

        <!-- CARD 6 -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Analista de Dados Junior</h3>
              <p class="company-name">DataWave Analytics</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag azul">
              <i class="fa-regular fa-clock"></i> Desafio de Código
            </span>
            <p class="update-text">Atualizado há 1 semana</p>
          </div>
        </article>

      </div>
    </main>

  </div>

</body>
</html>
