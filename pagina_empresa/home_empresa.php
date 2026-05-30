<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Empresa</title>

  <link rel="stylesheet" href="styles/home-empresa.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
</head>

<body>

    <nav>
      <?php
        include_once "../includes/nav_empresa.php";
      ?>
    </nav>

    <!-- HERO -->
    <section class="hero">

      <div class="hero-content">

        <h1>Olá, TechCorp!</h1>

        <p>Acompanhe seus processos seletivos.</p>

        <!-- CARDS -->
        <div class="cards">

          <div class="card">
            <span class="number">3</span>
            <span class="label">Vagas ativas</span>
          </div>

          <div class="card">
            <span class="number blue">81</span>
            <span class="label">Candidatos totais</span>
          </div>

        </div>

        <!-- BUTTON -->
        <button class="btn-vaga">
          <a href="cadastro_vaga.php">
            + Publicar Nova Vaga
          </a>
        </button>

      </div>

    </section>

    <!-- JOBS -->
    <section class="jobs">

      <div class="jobs-header">

        <h2>Suas vagas</h2>

      </div>

      <!-- CARD -->
      <div class="job-card">

        <div class="job-top">

          <div>
            <h3>Desenvolvedor(a) Front-end Senior</h3>

            <span class="status active">
              Ativa
            </span>
          </div>

          <a href="pre_selecao.php">
            <span class="arrow">›</span>
          </a>

        </div>

        <div class="divider"></div>

        <div class="job-bottom">

          <span class="people">👥24 inscritos</span>

          <span class="new">•5 novos</span>

        </div>

      </div>

      <!-- CARD -->
      <div class="job-card">

        <div class="job-top">

          <div>
            <h3>Product Manager Pleno</h3>

            <span class="status active">
              Ativa
            </span>
          </div>

          <span class="arrow">›</span>

        </div>

        <div class="divider"></div>

        <div class="job-bottom">

          <span class="people">👥12 inscritos</span>

          <span class="new">•2 novos</span>

        </div>

      </div>

      <!-- CARD -->
      <div class="job-card">

        <div class="job-top">

          <div>
            <h3>UX/UI Designer</h3>

            <span class="status paused">
              Pausada
            </span>
          </div>

          <span class="arrow">›</span>

        </div>

        <div class="divider"></div>

        <div class="job-bottom">

          <span class="people">👥45 inscritos</span>

        </div>

      </div>

    </section>

</body>

</html>