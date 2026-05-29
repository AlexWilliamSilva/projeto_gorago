<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Candidato - GoraGO</title>
    <link rel="stylesheet" href="styles/candidato_perfil.css">
</head>

<body>

    <nav>
        <?php
            include_once "../includes/nav_candidato.php";
        ?>
    </nav>

    <a href="home_candidato.php" class="btn-voltar">
        <img src="../autentication/imagens/icons_nav/voltar.svg" alt="Voltar para a etapa anterior" style="width: 50px;">
    </a>


    <!-- CONTEÚDO PRINCIPAL DO PERFIL -->
    <main class="profile-main"> 

        <!-- SEÇÃO 1: CABEÇALHO DO PERFIL (FOTO E INFORMAÇÕES) -->
        <section class="user-hero-section">
            <div class="user-avatar-wrapper">
                <img src="../multimidia/avatar_candidato.png" alt="Foto de Alex Silva">
            </div>

            <div class="user-primary-info">
                <h2>Alex Silva</h2>
                <p class="location">Itapira, SP</p>
                <p class="role">DSM • Front-End Developer</p>
            </div>
        </section>

        <!-- SEÇÃO 2: BARRA DE PROGRESSO DO CURRÍCULO -->
        <section class="resume-progress-card">
            <div class="progress-header">
                <h3>Currículo Completo</h3>
                <span class="progress-percentage">75%</span>
            </div>

            <div class="progress-bar-bg">
                <div class="progress-bar-fill" style="width: 75%;"></div>
            </div>

            <p class="progress-tip">Falta pouco! Complete as informações de experiência para destacar seu perfil para os
                recrutadores.</p>
        </section>

        <!-- SEÇÃO 3: SOBRE MIM -->
        <section class="profile-section-card">
            <h3>Sobre Mim</h3>
            <p class="about-text">
                Estudante de Desenvolvimento de Software Multiplataforma apaixonado por criar interfaces modernas,
                intuitivas e responsivas. Buscando primeira oportunidade como Estagiário ou Trainee em Front-End.
            </p>
        </section>

        <!-- SEÇÃO 4: EXPERIÊNCIA PROFISSIONAL -->
        <section class="profile-section-card">
            <h3>Experiência Profissional</h3>

            <div class="data-list-item">
                <span class="title-bold">Estagiário Front-End | Empresa X</span>
                <span class="date-text">Jan 2025 - Atual</span>
            </div>

            <div class="data-list-item">
                <span class="title-muted">Desenvolvedor Freelance | Projetos Pessoais</span>
                <span class="date-text">2022 - 2026</span>
            </div>
        </section>

        <!-- SEÇÃO 5: FORMAÇÃO ACADÊMICA -->
        <section class="profile-section-card">
            <h3>Formação Acadêmica</h3>

            <div class="data-list-item">
                <span class="title-muted">Tecnólogo em DSM - FATEC Itapira</span>
                <span class="date-text">2026 - 2028</span>
            </div>
        </section>

        <!-- SEÇÃO 6: HABILIDADES PRINCIPAIS -->
        <section class="profile-section-card">
            <h3>Habilidades Principais</h3>

            <div class="tags-container">
                <span class="badge-tag">HTML5</span>
                <span class="badge-tag">CSS3</span>
                <span class="badge-tag">JavaScript</span>
                <span class="badge-tag">Git</span>
                <span class="badge-tag">Figma</span>
            </div>
        </section>

    </main>

</body>

</html>