<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vagas - GoraGO</title>
  <link rel="stylesheet" href="styles/candidato_pesquisa.css">
  
  <link rel="stylesheet" href="https://cloudflare.com">
</head>
<body>

<!--NAV BAR---------------------------------------------------------------------------------->
  <nav>
    <?php
      include_once "../includes/nav_candidato.php";
    ?>
  </nav>

  <!-- CONTAINER PRINCIPAL (Sidebar + Feed de Vagas) -->
  <div class="main-container">
    
    <!-- SIDEBAR DE FILTROS UPGRADE PROFISSIONAL -->
    <aside class="sidebar-filters">
      <div class="sidebar-header">
        <a href="candidato_pesquisa.php" class="btn-clear-filters">Limpar</a>
      </div>

      <form class="filters-form">
        <!-- FILTRO: CIDADE -->
        <div class="filter-group">
          <label class="filter-label">Localização</label>
          <div class="select-wrapper">
            <i class="fa-solid fa-location-dot input-icon"></i>
            <select name="cidade">
              <option value="" disabled selected>Selecione a cidade</option>
              <option value="sp">São Paulo, SP</option>
              <option value="rj">Rio de Janeiro, RJ</option>
            </select>
            <i class="fa-solid fa-chevron-down arrow-icon"></i>
          </div>
        </div>

        <!-- FILTRO: DISTÂNCIA -->
        <div class="filter-group">
          <label class="filter-label">Raio de Distância</label>
          <div class="select-wrapper">
            <i class="fa-solid fa-arrows-to-dot input-icon"></i>
            <select name="distancia">
              <option value="" disabled selected>Qualquer distância</option>
              <option value="10">Até 10km</option>
              <option value="50">Até 50km</option>
            </select>
            <i class="fa-solid fa-chevron-down arrow-icon"></i>
          </div>
        </div>

        <!-- FILTRO: PERÍODO -->
        <div class="filter-group">
          <label class="filter-label">Data de Publicação</label>
          <div class="select-wrapper">
            <i class="fa-solid fa-calendar-days input-icon"></i>
            <select name="periodo">
              <option value="" disabled selected>Qualquer período</option>
              <option value="hoje">Últimas 24h</option>
              <option value="semana">Esta semana</option>
            </select>
            <i class="fa-solid fa-chevron-down arrow-icon"></i>
          </div>
        </div>

        <!-- FILTRO: FORMATO -->
        <div class="filter-group">
          <label class="filter-label">Regime de Trabalho</label>
          <div class="select-wrapper">
            <i class="fa-solid fa-house-laptop input-icon"></i>
            <select name="formato">
              <option value="" disabled selected>Todos os formatos</option>
              <option value="hibrido">Híbrido</option>
              <option value="remoto">Remoto</option>
              <option value="presencial">Presencial</option>
            </select>
            <i class="fa-solid fa-chevron-down arrow-icon"></i>
          </div>
        </div>

        <!-- BOTÃO APLICAR FILTROS PREMIUM -->
        <button type="submit" class="btn-filtrar">
          <span>Aplicar Filtros</span>
          <i class="fa-solid fa-sliders"></i>
        </button>
      </form>
    </aside>

    <!-- CONTEÚDO DE VAGAS (LADO DIREITO) -->
    <main class="vagas-feed">
      
      <a href="home_candidato.php" class="btn-voltar">
        <img src="../autentication/imagens/icons_nav/voltar.svg" alt="Voltar para a etapa anterior" style="width: 50px;">
      </a>
      
      <!-- CARD 1 -->
      <a href="detalhes_vaga.php" style="text-decoration: none; color: inherit;">
        <article class="vaga-card">
          <div class="vaga-logo-box">
            <img src="../multimidia/logo_empresas/TechCorp.png" alt="Logotipo da Empresa" class="vaga-logo-img">
          </div>
          <div class="vaga-info">
            <h3>Desenvolvedor(a) Front-end Senior</h3>
            <p class="empresa-nome">TechCorp Solutions</p>
            <div class="tags-row">
              <span class="tag"><i class="fa-solid fa-location-dot"></i> São Paulo, SP</span>
              <span class="tag"><i class="fa-solid fa-briefcase"></i> Híbrido</span>
              <span class="tag">CLT</span>
            </div>
          </div>
        </article>
      </a>

      <!-- CARD 2 (Selecionado / Ativo conforme a imagem) -->
       <a href="detalhes_vaga.php" style="text-decoration: none; color: inherit;">
      <article class="vaga-card">
        <div class="vaga-logo-box">
          <img src="../multimidia/logo_empresas/Nexora.png" alt="Logotipo da Empresa" class="vaga-logo-img">
        </div>
        <div class="vaga-info">
          <h3>Analista de Dados Pleno</h3>
          <p class="empresa-nome">Innova Analytics</p>
          <div class="tags-row">
            <span class="tag"><i class="fa-solid fa-location-dot"></i> São Paulo, SP</span>
            <span class="tag"><i class="fa-solid fa-briefcase"></i> Híbrido</span>
            <span class="tag">CLT</span>
          </div>
        </div>
      </article>

      <!-- CARD 3 -->
      <a href="detalhes_vaga.php" style="text-decoration: none; color: inherit;">
      <article class="vaga-card">
        <div class="vaga-logo-box">
          <img src="../multimidia/logo_empresas/Pixelon.png" alt="Logotipo da Empresa" class="vaga-logo-img">
        </div>
        <div class="vaga-info">
          <h3>Engenheiro(a) de Software</h3>
          <p class="empresa-nome">ByteWorks</p>
          <div class="tags-row">
            <span class="tag"><i class="fa-solid fa-location-dot"></i> São Paulo, SP</span>
            <span class="tag"><i class="fa-solid fa-briefcase"></i> Híbrido</span>
            <span class="tag">CLT</span>
          </div>
        </div>
      </article>

    </main>
  </div>

</body>
</html>
