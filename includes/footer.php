<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer - GoraGO</title>
    <link rel="stylesheet" href="styles/footer.css" />
    <style>
        /* =========================
        FOOTER
        ========================= */

        .footer {
            width: 100%;
            background: #111111;
            padding: 50px 60px;
            font-family: 'Inter', sans-serif;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;

            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .footer-brand {
            min-width: 240px;
        }

        .footer-brand img {
            width: 140px;
            margin-bottom: 20px;
            margin-left: 80px;
        }

        .footer-brand p {
            color: #BDBDBD;
            font-size: 14px;
            font-weight: 400;
        }

        .footer-links {
            display: flex;
            gap: 120px;
        }

        .footer-column {
            display: flex;
            flex-direction: column;
        }

        .footer-column h4 {
            color: #FFFFFF;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .footer-column a {
            color: #C7C7C7;
            text-decoration: none;
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 8px;
            transition: 0.3s;
        }

        .footer-column a:hover {
            color: #FFFFFF;
            padding-left: 1px;
        }
    </style>
</head>

<body>
    <!-- FOOTER -->
    <footer class="footer">

        <div class="container footer-content">

            <div class="footer-brand">

                <img src="multimidia/logo_empresas/logofooter.png" alt="GoraGO">

                <p>
                    © 2026 GoraGO. Todos os direitos reservados.
                </p>

            </div>

            <div class="footer-links">

                <div class="footer-column">

                    <h4>Para Estudantes</h4>

                    <a href="#">Buscar Estágios</a>
                    <a href="#">Buscar Trainees</a>
                    <a href="#">Dicas de Carreira</a>
                    <a href="#">Como Funciona</a>

                </div>

                <div class="footer-column">

                    <h4>Para Empresas</h4>

                    <a href="#">Publicar Vaga</a>
                    <a href="#">Planos</a>
                    <a href="#">Recursos</a>
                    <a href="#">Suporte</a>

                </div>

                <div class="footer-column">

                    <h4>Institucional</h4>

                    <a href="#">Sobre o GoraGO</a>
                    <a href="#">Blog</a>
                    <a href="#">Privacidade</a>
                    <a href="#">Termos de Uso</a>

                </div>

            </div>

        </div>

    </footer>
</body>

</html>