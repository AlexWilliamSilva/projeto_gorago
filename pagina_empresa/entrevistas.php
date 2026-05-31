<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gestão de Candidatos</title>
  <link rel="stylesheet" href="styles/entrevistas.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <div class="page-scale">

<!--NAV BAR---------------------------------------------------------------------------------->
    <nav>
      <?php
        include_once "includes/nav.php";
      ?>
    </nav>

<!--CARDS---------------------------------------------------------------------------------->
    <main class="content">

      <div class="candidate-card">

        <div class="candidate-left">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Pedro Costa" />

      <!--CARD 1  ---------------------------------------------------------------------------------->
          <div class="candidate-info">
            <h2>Pedro Costa</h2>

            <div class="candidate-sub">
              Desenvolvedor de Software
              <span class="dot"></span>
      <!--COMPATIBILIDADE COM A VAGA---------------------------------------------------------------------------------->
              <span class="match">72% Match</span>
            </div>
          </div>
        </div>

        <button class="menu-btn">
          &#8942;
        </button>

      </div>

    </main>

  </div>

</body>

</html>