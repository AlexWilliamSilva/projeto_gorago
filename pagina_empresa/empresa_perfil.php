<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil da Empresa</title>
    
    <!-- Link do arquivo CSS Externo -->
    <link rel="stylesheet" href="styles/perfil_empresa.css">
</head>
<body>

    <nav>
        <?php
            include_once "../includes/nav_empresa.php";
        ?>
    </nav>

    <!-- CONTAINER DA ESCALA DA PÁGINA -->
    <div class="page-container">

        <!-- HEADER DA PÁGINA (BARRA DO TOPO) -->
        <header class="top-bar">
            <a href="home_empresa.php" class="btn-voltar">
                <img src="../autentication/imagens/icons_nav/voltar.svg" alt="Voltar para a etapa anterior">
            </a>
            
            <h1>Perfil da Empresa</h1>
            <div class="spacer"></div>
        </header>

        <!-- CONTEÚDO PRINCIPAL -->
        <main class="main-content">

            <!-- SEÇÃO DO HERO (LOGO E IDENTIFICAÇÃO) -->
            <section class="company-hero">
                <div class="company-logo-box">
                    <img src="../multimidia/logo_empresas/TechCorp.png" alt="Logo da Empresa" class="company-logo" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                </div>
                <h2>TechCorp Solutions</h2>
                <p class="company-cnpj">CNPJ: 00.000.000/0001-00</p>
            </section>

            <!-- CARD COMPACTO DE CONFIGURAÇÕES -->
            <section class="menu-card">

                <!-- ITEM 1: DADOS DA EMPRESA -->
                <a href="dados_empresa.php" class="menu-item">
                    <div class="menu-item-left">
                        <div class="icon-wrapper icon-blue"></div>
                        <span>Dados da Empresa</span>
                    </div>
                    <div class="arrow-area"><span class="css-chevron-right"></span></div>
                </a>

                <!-- ITEM 2: GERENCIAR EQUIPE -->
                <a href="gerenciar_equipe.php" class="menu-item">
                    <div class="menu-item-left">
                        <div class="icon-wrapper icon-purple"></div>
                        <span>Gerenciar Equipe (ATS)</span>
                    </div>
                    <div class="arrow-area"><span class="css-chevron-right"></span></div>
                </a>

                <!-- ITEM 3: PLANOS E FATURAMENTO -->
                <a href="planos_faturamento.php" class="menu-item">
                    <div class="menu-item-left">
                        <div class="icon-wrapper icon-navy"></div>
                        <span>Planos e Faturamento</span>
                    </div>
                    <div class="arrow-area"><span class="css-chevron-right"></span></div>
                </a>

                <!-- ITEM 4: SAIR DA CONTA -->
                <a href="../index.php" class="menu-item logout-item">
                    <div class="menu-item-left">
                        <div class="icon-wrapper icon-red"></div>
                        <span class="logout-text">Sair da conta</span>
                    </div>
                    <div class="arrow-area"><span class="css-chevron-right logout-arrow"></span></div>
                </a>

            </section>

        </main>

    </div>

</body>
</html>
