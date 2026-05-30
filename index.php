<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GoraGO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css" />
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div class="container header-content">

            <div class="logo">
                <img src="multimidia/logo_empresas/logonav.png" alt="GoraGO">
            </div>

            <div class="search-bar">
                <i data-lucide="search"></i>
                <input type="text" placeholder="Busque por palavras-chave ou cargos">
            </div>

            <!-- Container do botão + menu flutuante -->
            <div class="nav-auth-container">
                <button class="btn-primary" id="btnEntrar">Entrar<span class="arrow-down">></span></button>

                <!-- Menu Popup (Dropdown) -->
                <div class="login-dropdown" id="dropdownLogin">
                    <a href="autentication/candidato/login_candidato.html" class="dropdown-item">
                        <span>Candidato</span>
                        <i data-lucide="user"></i>
                    </a>
                    <a href="autentication/empresa/login_empresa.html" class="dropdown-item">
                        <span>Empresa</span>
                        <i data-lucide="building"></i>
                    </a>
                </div>
            </div>

        </div>
    </header>
    <!-- HERO -->
    <section class="hero">

        <div class="hero-overlay"></div>

        <div class="container hero-content">

            <div class="hero-text">

                <h1>
                    Sua primeira oportunidade começa aqui!
                </h1>

                <p>
                    Encontre vagas de estágio/trainee e outros em segundos.
                    Sem burocracia, sem complicação.
                </p>

            </div>

            <div class="hero-card">

                <div class="input-group">
                    <img src="multimidia/icons_nav/IconePesqui.svg" alt="">
                    <input type="text" placeholder="Área ou vaga">
                </div>

                <div class="input-group">
                    <img src="multimidia/icons_nav/IconeLoca.svg" alt="">
                    <input type="text" placeholder="Cidade, estado ou remoto">
                </div>

                <a href="autentication/candidato/login_candidato.html"><button class="btn-search">Buscar</button></a>

            </div>

        </div>

    </section>

    <!-- BENEFITS -->
    <section class="benefits">

        <div class="container benefits-grid">

            <div class="benefit-card">

                <img src="multimidia/icons_nav/IconeRaio.svg" alt="">

                <h3>Candidatura em Segundos</h3>

                <p>
                    No intervalo da aula ou no ônibus.
                    Rápido e sem formulários infinitos.
                </p>

            </div>

            <div class="benefit-card">

                <img src="multimidia/icons_nav/IconeAlvo.svg" alt="">

                <h3>100% Focado em Você</h3>

                <p>
                    Somente vagas de estágio e trainee.
                    Nada de perder tempo com o que não serve.
                </p>

            </div>

            <div class="benefit-card">

                <img src="multimidia/icons_nav/IconeRelo.svg" alt="">


                <h3>Seu Tempo Vale Ouro</h3>

                <p>
                    Interface clara e direta.
                    Mais tempo para você se preparar.
                </p>

            </div>

        </div>

    </section>

    <!-- EMPRESAS -->
    <section class="companies">

        <div class="section-title">

            <h2>Para Empresas</h2>

            <p>
                Conecte-se com estudantes universitários prontos para a
                primeira oportunidade
            </p>

        </div>

        <div class="companies-content">

            <div>

                <div class="companies-text">

                    <h3>
                        Encontre estagiários e trainees com agilidade
                    </h3>

                    <p>
                        Publique suas vagas e alcance estudantes universitários motivados.
                        Processo simples, resultados rápidos.
                    </p>

                </div>

                <div class="companies-list">

                    <div class="list-item">
                        <img src="multimidia/icons_nav/IconeCheck.svg" alt="">

                        <p>
                            Plataforma focada em estudantes buscando a
                            primeira experiência profissional
                        </p>
                    </div>

                    <div class="list-item">
                        <img src="multimidia/icons_nav/IconeCheck.svg" alt="">

                        <p>
                            Interface clara que facilita a triagem de candidatos
                            qualificados
                        </p>
                    </div>

                    <div class="list-item">
                        <img src="multimidia/icons_nav/IconeCheck.svg" alt="">

                        <p>
                            Candidaturas rápidas atraem mais estudantes
                            engajados
                        </p>
                    </div>

                </div>

            </div>

            <div class="companies-image">
                <img src="multimidia/logo_empresas/PessoasEscritorio.jpg" alt="">
            </div>

        </div>

    </section>

    <!-- STATS -->
    <section class="stats">

        <div class="container stats-content">

            <!-- IMAGEM -->
            <div class="companies-image">
                <img src="multimidia/logo_empresas/Profissionais.png " alt="">
            </div>

            <!-- TEXO -->
            <div class="stats-info">

                <div class="companies-text">

                    <h3>
                        Encontre estagiários e trainees com agilidade
                    </h3>

                    <p>
                        Publique suas vagas e alcance estudantes universitários motivados.
                        Processo simples, resultados rápidos.
                    </p>

                </div>

                <!-- LISTA -->
                <div class="companies-list">

                    <div class="list-item">

                        <img src="multimidia/icons_nav/IconeCheck.svg" alt="">

                        <p>
                            Perfil personalizado com a identidade da sua empresa
                        </p>

                    </div>

                    <div class="list-item">

                        <img src="multimidia/icons_nav/IconeCheck.svg" alt="">

                        <p>
                            Destaque benefícios, cultura e oportunidades de crescimento
                        </p>

                    </div>

                    <div class="list-item">

                        <img src="multimidia/icons_nav/IconeCheck.svg" alt="">

                        <p>
                            Conexão direta com estudantes do seu perfil ideal
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <!-- ESTATÍSTICAS -->
        <div class="container stats-grid">

            <div class="stat-card">

                <h3>92%</h3>

                <p>
                    Empresas recebem <br>
                    candidaturas em 48h
                </p>

            </div>

            <div class="stat-card">

                <h3>3x</h3>

                <p>
                    Mais candidaturas que <br>
                    plataformas tradicionais
                </p>

            </div>

            <div class="stat-card">

                <h3>+2.500</h3>

                <p>
                    Empresas já contrataram pelo <br>
                    GoraGO
                </p>

            </div>

        </div>

    </section>

    <!-- CTA -->
    <section class="cta">

        <div class="container">

            <div class="cta-box">

                <h3>
                    Comece a contratar hoje mesmo!
                </h3>

                <p>
                    Publique sua primeira vaga gratuitamente e descubra por que empresas escolhem o GoraGO
                </p>

                 <a href="autentication/empresa/login_empresa.html"><button class="btn-white">
                   Publicar Vaga
                </button></a>

                <button class="btn-outline">
                    Agendar Demo
                </button>

            </div>

        </div>

    </section>

    <footer>
        <?php
            include_once "includes/footer.php";
        ?>
    </footer>


    <script>
        lucide.createIcons();
    </script>

</body>

</html>