<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gestão de Candidatos</title>

  <link rel="stylesheet" href="styles/aprovados.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  >
</head>

<body>

  <div class="page-scale">

    <nav>
      <?php
        include_once "includes/nav.php";
      ?>
    </nav>

    <!-- EMPTY STATE -->
    <main class="empty-state">

      <div class="empty-content">

        <div class="empty-icon">

          <div class="main-head"></div>
          <div class="main-body"></div>

          <div class="secondary-head"></div>
          <div class="secondary-body"></div>

        </div>

        <h2>Nenhum candidato nesta etapa.</h2>

      </div>

    </main>

  </div>

</body>
</html>