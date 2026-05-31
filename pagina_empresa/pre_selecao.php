<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Gestão de Candidatos</title>

  <link rel="stylesheet" href="styles/pre_selecao.css">

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

<!--CARD---------------------------------------------------------------------------------->
    <main class="cards-container">

      <!--CARD 1---------------------------------------------------------------------------------->
      <div class="candidate-card">

        <div class="candidate-left">

          <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Mariana Silva">

          <div class="candidate-info">

            <h2>Mariana Silva</h2>

            <div class="candidate-role">

              Desenvolvedora Full-Stack

              <span class="dot"></span>

      <!--COMPATIBILIDADE COM A VAGA---------------------------------------------------------------------------------->
              <span class="match">85% Match</span>

            </div>

          </div>

        </div>

        <button class="menu-btn">
          &#8942;
        </button>

      </div>

      <!-- CARD 2 -->
      <div class="candidate-card">

        <div class="candidate-left">

          <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Carlos Santos">

          <div class="candidate-info">

            <h2>Carlos Santos</h2>

            <div class="candidate-role">

              Engenheiro de Software

              <span class="dot"></span>

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