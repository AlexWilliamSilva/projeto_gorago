<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav candidato - GoraGO</title>
    <style>
        /* HEADER */

        header{
            width: 100%;
            height: 90px;

            background-color: white;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 50px;

            border-bottom: 1px solid #d9d9d9;
        }

        .logo img {
            width: 73px;
        }

        .search-box{
            width: 500px;
            height: 45px;

            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-box i{
            font-size: 22px;
        }

        .search-box input{
            width: 100%;
            height: 100%;

            border-radius: 10px;
            border: 1px solid #cfcfcf;

            padding-left: 20px;

            outline: none;
        }

        /* CONTAINER DO COMPONENTE */
        .profile_user {
            position: relative; /* Mantém o menu flutuante preso ao botão da direita */
            display: flex;
            align-items: center;
        }

        /* Esconde completamente o input checkbox da tela */
        input[type="checkbox"].menu-checkbox {
            display: none !important;
        }

        /* O BOTÃO DE GATILHO (ÍCONE DE HAMBÚRGUER) */
        .menu-trigger {
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            user-select: none;
        }

        .menu-trigger i {
            font-size: 32px; /* Tamanho original que você usava no projeto */
            color: #1f1f1f;
            transition: color 0.2s ease;
        }

        .menu-trigger:hover i {
            color: #1550ff; /* Muda de cor ao passar o mouse */
        }

        /* CAIXA DO POP-UP (ESCONDIDA POR PADRÃO) */
        .dropdown-menu-box {
            position: absolute;
            top: 50px; /* Distância para brotar logo abaixo do ícone */
            right: 0;  /* Alinha rente ao canto direito da tela */
            width: 280px;
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.08), 0px 2px 6px rgba(0, 0, 0, 0.04);
            padding: 16px 0;
            z-index: 2000;
            
            /* Configuração de transição suave */
            display: none;
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.2s ease, transform 0.2s ease;
        }

        /* MÁGICA DO CSS: Quando o usuário clica no ícone, o checkbox é marcado e o menu aparece */
        .menu-checkbox:checked ~ .dropdown-menu-box {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* INFORMAÇÕES DO USUÁRIO (TOPO DO POP-UP) */
        .user-header-info {
            padding: 4px 20px 12px 20px;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .user-name {
            font-size: 16px;
            font-weight: 700;
            color: #1f1f1f;
        }

        .user-email {
            font-size: 14px;
            font-weight: 400;
            color: #7f8a9b;
        }

        /* LINHAS DIVISÓRIAS */
        .menu-divider {
            border: none;
            border-bottom: 1px solid #e4e7ef;
            margin: 8px 0;
        }

        /* LINKS DE OPÇÃO */
        .menu-item-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 20px;
            font-size: 15px;
            font-weight: 600;
            color: #1f1f1f;
            text-decoration: none;
            transition: background-color 0.2s ease;
        }

        .menu-item-link:hover {
            background-color: #f6f6f7;
        }

        /* ÍCONES DO FONTAWESOME DENTRO DO MENU */
        .menu-icon {
            font-size: 18px;
            color: #68758b;
            width: 24px;
            text-align: center;
        }

        /* LINK DE LOGOUT (VERMELHO) */
        .menu-item-link.logout-action {
            color: #ff3b30;
        }

        .menu-item-link.logout-action .menu-icon {
            color: #ff3b30;
        }
        /* Estiliza o label para ser um círculo perfeito */
        .menu-trigger {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
            user-select: none;
        }

        /* Força a foto a preencher o círculo sem distorcer */
        .menu-trigger img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="../multimidia/logo_empresas/logonav.png" alt="GoraGO">
        </div>

        <div class="search-box">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Busque por palavras chaves ou cargos">
        </div>

        <!-- CONTAINER DO PERFIL -->
        <div class="profile_user">

            <!-- 1. O checkbox (continua invisível) -->
            <input type="checkbox" id="menu-toggle" class="menu-checkbox">

            <!-- 2. O Label com a IMAGEM dentro (Ele é o botão de clique) -->
            <label for="menu-toggle" class="menu-trigger" title="Menu do Usuário">
                <img src="../multimidia/avatar_candidato.png" alt="Foto de Alex da Silva">
            </label>

            <!-- 3. O Pop-up flutuante -->
            <div class="dropdown-menu-box">
                <div class="user-header-info">
                    <span class="user-name">Alex da Silva</span>
                    <span class="user-email">alex.silva@gmail.com</span>
                </div>

                <hr class="menu-divider">

                <a href="configuracoes.php" class="menu-item-link">
                    <i class="fa-solid fa-gear menu-icon"></i>
                    Configurações da conta
                </a>

                <hr class="menu-divider">

                <a href="../index.php" class="menu-item-link logout-action">
                    <i class="fa-solid fa-arrow-right-from-bracket menu-icon"></i>
                    Sair da conta
                </a>
            </div>
        </div>


    </header>
</body>

</html>