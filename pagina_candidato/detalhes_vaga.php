<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes da Vaga - GoraGO</title>

  <link rel="stylesheet" href="styles/detalhes_vaga.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

  <?php
    include_once "../includes/nav_candidato.php";
  ?>

  <!-- NAVBAR SUPERIOR FLUTUANTE -->
  <nav class="vaga-nav">
    
    <a href="home_candidato.php" class="btn-voltar">
      <img src="../autentication/imagens/icons_nav/voltar.svg" alt="Voltar para a etapa anterior" style="width: 50px;">
    </a>
    <h2>Detalhes da Vaga</h2>
    <button type="button" class="nav-share">
      <i class="fa-solid fa-share-nodes"></i>
    </button>
  </nav>

  <!-- CONTAINER DE COMPENSAÇÃO DO ZOOM DE 75% -->
  <div class="page-scale">
   
    <main class="vaga-container">

      <!-- HEADER DA VAGA + MATCH CARD LADO A LADO -->
      <section class="job-header">
        
        <div class="job-left">
          <div class="company-icon">
            <img src="../multimidia/logo_empresas/TechCorp.png" alt="Logo da empresa" class="company-logo" >
          </div>
          <div class="job-info">
            <h1>Desenvolvedor(a) Front-end Senior</h1>
            <a href="#" class="company-name">TechCorp Solutions</a>
            
            <div class="job-tags">
              <span><i class="fa-solid fa-location-dot"></i> São Paulo, SP</span>
              <span><i class="fa-solid fa-briefcase"></i> Híbrido</span>
              <span>CLT</span>
            </div>
          </div>
        </div>

        <!-- CARD DE MATCH -->
        <div class="match-card">
          <div class="match-text-area">
            <h2>Alta compatibilidade</h2>
            <p>Seu currículo atende a maioria dos requisitos desta vaga.</p>
          </div>
          <div class="match-circle">
            <span>85%</span>
            <small>Match</small>
          </div>
        </div>

      </section>

      <!-- SEÇÃO: DESCRIÇÃO DA VAGA -->
      <section class="card full-width">
        <h2>Descrição da vaga</h2>
        <p>
          Estamos em busca de um Desenvolvedor Front-end apaixonado por criar interfaces incríveis e experiências de usuário fluidas. Você trabalhará em um ambiente dinâmico, colaborando diretamente com designers e engenheiros de back-end para construir nosso novo produto de gestão financeira.
        </p>
      </section>

      <!-- SEÇÃO GRID: RESPONSABILIDADES & REQUISITOS -->
      <div class="job-grid">
        
        <!-- Responsabilidades (Com ícones de check da imagem) -->
        <section class="card">
          <h2>Responsabilidades e atribuições</h2>
          <ul class="check-list">
            <li><i class="fa-regular fa-circle-check"></i> Desenvolver novas funcionalidades usando React e TypeScript.</li>
            <li><i class="fa-regular fa-circle-check"></i> Garantir a viabilidade técnica dos designs de UI/UX.</li>
            <li><i class="fa-regular fa-circle-check"></i> Otimizar a aplicação para máxima velocidade e escalabilidade.</li>
            <li><i class="fa-regular fa-circle-check"></i> Participar de code reviews e discussões de arquitetura.</li>
          </ul>
        </section>

        <!-- Requisitos (Com marcadores normais) -->
        <section class="card">
          <h2>Requisitos e qualificações</h2>
          <ul class="dot-list">
            <li>Experiência sólida (3+ anos) com React e ecossistema front-end.</li>
            <li>Proficiência em TypeScript, HTML5 e CSS3.</li>
            <li>Experiência com Tailwind CSS ou Styled Components.</li>
            <li>Conhecimento em consumo de APIs RESTful e GraphQL.</li>
          </ul>
        </section>

      </div>

      <!-- SEÇÃO: INFORMAÇÕES ADICIONAIS -->
      <section class="card full-width">
        <h2>Informações adicionais</h2>
        <p>
          Oferecemos plano de saúde SulAmérica, vale refeição (R$ 45/dia), auxílio home-office, gympass e verba para educação continuada. Nosso modelo híbrido exige ida ao escritório apenas 2 vezes por semana.
        </p>
      </section>

    </main>
  </div>

  <!-- BARRA DE AÇÕES FIXA NO RODAPÉ DE PONTA A PONTA -->
  <footer class="action-footer">
    <div class="actions-wrapper">

      <button type="button" class="save-btn" id="saveButton">
        <i class="fa-regular fa-bookmark"></i>
      </button>

      <a href="confirmacao_inscr.php" class="apply-link">
        Candidatar-se
      </a>

    </div>
  </footer>

</body>
</html>
