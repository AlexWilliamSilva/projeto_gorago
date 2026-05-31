<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Candidatos</title>
    <style>
        /* 1. RESET GLOBAL (Garante tamanhos idênticos em todas as páginas) */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif; 
        }

        /* TOPO */
        .topbar {
            width: 100%;
            height: 108px;
            background: #f6f6f7;
            border-bottom: 1px solid #e4e7ef;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
        }

        .nav-icon {
            width: 50px; 
            font-size: 34px;
            color: #1f1f1f;
            user-select: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
        }

        /* Correção para a imagem do ícone não quebrar o header */
        .nav-icon img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .title-wrapper {
            text-align: center;
            flex: 1;
        }

        .title-wrapper h1 {
            font-size: 27px;
            font-weight: 700;
            color: #1f1f1f;
            margin-bottom: 5px;
            line-height: 1.2;
        }

        .title-wrapper p {
            font-size: 17px;
            font-weight: 500;
            color: #7f8a9b;
        }

        /* TABS */
        .tabs {
            height: 72px;
            background: #eef0f6;
            border-bottom: 1px solid #dde2eb;
            display: flex;
            align-items: flex-end;
            justify-content: space-around;
        }

        .tab-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-width: 160px;
            height: 100%;
            font-size: 17px;
            font-weight: 600;
            color: #68758b;
            text-decoration: none;
            position: relative;
        }

        .tab-link span {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #dfe4ee;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            color: #6f7c90;
        }

        /* Classe ativa aplicada diretamente no link */
        .tab-link.active {
            color: #1448ff;
        }

        .tab-link.active span {
            background: #1448ff;
            color: #ffffff;
        }

        .tab-link.active::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 3px;
            background: #1448ff;
            border-radius: 4px 4px 0 0;
        }
    </style>
</head>


<body>
    <?php
        $pagina_atual = basename($_SERVER['SCRIPT_NAME']);
    ?>

    <!-- HEADER -->
    <header class="topbar">
        <a href="home_empresa.php" class="nav-icon"><img src="../multimidia/icons_nav/voltar.svg" alt="Voltar"></a> 
        <div class="title-wrapper">
            <h1>Desenvolvedor(a) Front-end Senior</h1>
            <p>Gestão de Candidatos</p>
        </div>
        
    </header>

    <!-- TABS -->
    <nav class="tabs">
        <!-- O PHP verifica se o nome do arquivo bate com a aba e adiciona 'active' dinamicamente -->
        <a href="pre_selecao.php" class="tab-link <?php echo ($pagina_atual == 'pre_selecao.php') ? 'active' : ''; ?>">
            Pré-seleção <span>2</span>
        </a>

        <a href="triagem.php" class="tab-link <?php echo ($pagina_atual == 'triagem.php') ? 'active' : ''; ?>">
            Triagem <span>1</span>
        </a>

        <a href="entrevistas.php" class="tab-link <?php echo ($pagina_atual == 'entrevistas.php') ? 'active' : ''; ?>">
            Entrevistas/Testes <span>1</span>
        </a>

        <a href="proposta.php" class="tab-link <?php echo ($pagina_atual == 'proposta.php') ? 'active' : ''; ?>">
            Proposta <span>0</span>
        </a>

        <a href="aprovados.php" class="tab-link <?php echo ($pagina_atual == 'aprovados.php') ? 'active' : ''; ?>">
            Aprovados <span>0</span>
        </a>

        <a href="rejeitados.php" class="tab-link <?php echo ($pagina_atual == 'rejeitados.php') ? 'active' : ''; ?>">
            Rejeitados <span>0</span>
        </a>
    </nav>
</body>

</html>
