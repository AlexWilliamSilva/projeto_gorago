<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minhas Candidaturas Canceladas - GoraGO</title>
  <link rel="stylesheet" href="styles/candidato_pro_fi_can.css">
  
  <link rel="stylesheet" href="https://cloudflare.com">
</head>
<body>

<!--BOTÃO VOLTAR---------------------------------------------------------------------------------->
  <a href="home_candidato.php" class="btn-voltar">
    <img src="imagens/voltar.svg" alt="Voltar para a página anterior">
  </a>
<!--NAV BAR---------------------------------------------------------------------------------->
  <nav>
    <?php
      include_once "../includes/nav_candidato.php";
    ?>
  </nav>

  <!-- CONTAINER COM FILTRO DE ZOOM DE 75% -->
  <div class="page-scale">

    <main class="candidaturas-container">
      
      <!-- SUB-HEADER COM TÍTULO E BOTÃO VOLTAR -->
      <div class="page-header">
        <a href="candidato_pesquisa.html" class="back-link">
          <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h1>Minhas Candidaturas</h1>
      </div>

      <!-- CORRIGIDO: Estrutura semântica limpa para navegação por abas com links diretos -->
      <div class="tabs-navigation">
        <a href="candidatura_process.php" class="tab-btn">Em progresso</a>
        <a href="candidato_finalizada.php" class="tab-btn">Finalizadas</a>
        <a href="candidato_canceladas.php" class="tab-btn active">Canceladas</a>
      </div>

      <!-- GRID DOS CARDS DE CANDIDATURA (2 itens nesta tela) -->
      <div class="candidaturas-grid">

        <!-- CARD 1: DESENVOLVEDOR(A) MOBILE -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Desenvolvedor(a) Mobile</h3>
              <p class="company-name">AppWorks</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag cinza-escuro">
              <i class="fa-regular fa-circle-xmark"></i> Cancelada por você
            </span>
            <p class="update-text">Cancelado em 28/09/2023</p>
          </div>
        </article>

        <!-- CARD 2: ANALISTA DE SISTEMAS -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Analista de Sistemas</h3>
              <p class="company-name">DataCorp</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag laranja-sutil">
              <i class="fa-regular fa-circle-question"></i> Inscrição incompleta
            </span>
            <p class="update-text">Cancelado em 18/09/2023</p>
          </div>
        </article>

      </div>
    </main>

  </div>

</body>
</html>
