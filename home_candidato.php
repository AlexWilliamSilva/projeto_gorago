<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - GoraGO</title>

    <link rel="stylesheet" href="styles_candidato/home_candidato.css">
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="multimidia/logo_empresas/logonav.png" alt="GoraGO">
        </div>

        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Busque por palavras chaves ou cargos">
        </div>

        <div class="menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>

    <!-- MAIN -->
    <main>

        <!-- PERFIL -->
        <section class="profile-card">

            <div class="profile-left">

                <img src="https://i.pravatar.cc/150?img=12" alt="">

                <div class="profile-info">
                    <h2>Alex Silva</h2>
                    <h3>DSM • Front-End Developer</h3>
                    <p>Itapira, SP</p>

                    <a href="#">Ver Mais</a>
                </div>

            </div>

            <div class="profile-right">
                <span>3 empresas visualizaram seu perfil</span>
            </div>

        </section>

        <!-- VAGAS RECENTES -->
        <section class="jobs-section">

            <h1>Vagas recentes</h1>

            <div class="jobs-container">

                <!-- CARD -->
                <div class="job-card">

                    <div class="job-image"></div>

                    <div class="job-info">
                        <h2>Desenvolvedor de Software Front-End Senior</h2>

                        <div class="job-details">
                            <span><i class="fa-solid fa-location-dot"></i> São Paulo, SP</span>
                            <span><i class="fa-solid fa-building"></i> Híbrido</span>
                        </div>

                        <div class="job-date">
                            <i class="fa-regular fa-calendar"></i>
                            Até 21/06/2026
                        </div>
                    </div>

                </div>

                <!-- CARD -->
                <div class="job-card">

                    <div class="job-image"></div>

                    <div class="job-info">
                        <h2>Engenheiro de Software</h2>

                        <div class="job-details">
                            <span><i class="fa-solid fa-location-dot"></i> Campinas, SP</span>
                            <span><i class="fa-solid fa-building"></i> Presencial</span>
                        </div>

                        <div class="job-date">
                            <i class="fa-regular fa-calendar"></i>
                            Até 30/09/2026
                        </div>
                    </div>

                </div>

                <!-- CARD -->
                <div class="job-card">

                    <div class="job-image"></div>

                    <div class="job-info">
                        <h2>Gerente de Projetos</h2>

                        <div class="job-details">
                            <span><i class="fa-solid fa-location-dot"></i> Santos, SP</span>
                            <span><i class="fa-solid fa-building"></i> Remoto</span>
                        </div>

                        <div class="job-date">
                            <i class="fa-regular fa-calendar"></i>
                            Até 15/12/2026
                        </div>
                    </div>

                </div>

            </div>

            <button>Ver mais</button>

        </section>

        <!-- CANDIDATURAS -->
        <section class="applications-section">

            <h1>Veja suas candidaturas</h1>

            <div class="applications-container">

                <!-- CARD -->
                <div class="application-card">

                    <div>
                        <h2>Designer UX/UI</h2>
                        <h3>Creative Minds</h3>

                        <div class="application-details">
                            <span><i class="fa-solid fa-location-dot"></i> Belo Horizonte, MG</span>
                            <span><i class="fa-solid fa-building"></i> Presencial</span>
                        </div>
                    </div>

                    <div class="match" style="--percent: 82; --color: orange;">
                        <div class="match-content">
                            <strong>82%</strong>
                            <span>Match</span>
                        </div>
                    </div>

                </div>

                <!-- CARD -->
                <div class="application-card">

                    <div>
                        <h2>Engenheiro de Software Pleno</h2>
                        <h3>FinTech Brasil</h3>

                        <div class="application-details">
                            <span><i class="fa-solid fa-location-dot"></i> São Paulo, SP</span>
                            <span><i class="fa-solid fa-building"></i> Híbrido</span>
                        </div>
                    </div>

                    <div class="match" style="--percent: 85; --color: #00c16e;">
                        <div class="match-content">
                            <strong>85%</strong>
                            <span>Match</span>
                        </div>
                    </div>

                </div>

                <!-- CARD -->
                <div class="application-card">

                    <div>
                        <h2>Analista de Dados Sênior</h2>
                        <h3>Insight Analytics</h3>

                        <div class="application-details">
                            <span><i class="fa-solid fa-location-dot"></i> Rio de Janeiro, RJ</span>
                            <span><i class="fa-solid fa-building"></i> Híbrido</span>
                        </div>
                    </div>

                    <div class="match" style="--percent: 68; --color: orange;">
                        <div class="match-content">
                            <strong>68%</strong>
                            <span>Match</span>
                        </div>
                    </div>

                </div>

            </div>

            <button>Ver mais</button>

        </section>

    </main>

    <footer>
        <?php
            include_once "includes/footer.php";
        ?>
    </footer>

</body>
</html>