<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minhas Candidaturas Finalizadas - GoraGO</title>
  <link rel="stylesheet" href="styles/candida.css">
  <!-- Font Awesome para os ícones -->
  <link rel="stylesheet" href="https://cloudflare.com">
</head>
<body>

  <!-- NAVBAR SUPERIOR COMPARTILHADA -->
  <nav class="navbar">
    <div class="nav-logo">
      <span class="logo-go">GO</span>
    </div>
    <div class="nav-search">
      <i class="fa-solid fa-magnifying-glass search-icon"></i>
      <input type="text" placeholder="Busque por palavras chaves ou cargos">
    </div>
    <div class="nav-menu-btn">
      <i class="fa-solid fa-bars"></i>
    </div>
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

      <!-- ABAS DE NAVEGAÇÃO (TABS) - "Finalizadas" Ativa conforme a imagem -->
      <div class="tabs-navigation">
        <button type="button" class="tab-btn">Em progresso</button>
        <button type="button" class="tab-btn active">Finalizadas</button>
        <button type="button" class="tab-btn">Canceladas</button>
      </div>

      <!-- GRID DOS CARDS DE CANDIDATURA (2 itens nesta tela) -->
      <div class="candidaturas-grid">

        <!-- CARD 1: PRODUCT MANAGER -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Product Manager</h3>
              <p class="company-name">Inova Sistemas</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag cinza">
              <i class="fa-regular fa-clock"></i> Vaga Encerrada
            </span>
            <p class="update-text">Finalizado em 15/10/2023</p>
          </div>
        </article>

        <!-- CARD 2: DESENVOLVEDOR(A) FULL STACK -->
        <article class="candidatura-card">
          <div class="card-body">
            <div class="company-logo-box">
              <img src="imagens/forms.svg" alt="Empresa" class="company-logo">
            </div>
            <div class="job-info">
              <h3>Desenvolvedor(a) Full Stack</h3>
              <p class="company-name">Global Tech</p>
            </div>
          </div>
          <div class="card-footer">
            <span class="status-tag vermelho">
              <i class="fa-regular fa-circle-xmark"></i> Processo Finalizado
            </span>
            <p class="update-text">Finalizado em 02/10/2023</p>
          </div>
        </article>

      </div>
    </main>

  </div>

</body>
</html>
