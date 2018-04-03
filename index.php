<!DOCTYPE html>
<html>
    <head>
        <title>King Burger</title>
        <meta charset="utf-8">
        <meta name="description" content="O mais Maraviwonderful Hamburger de Iraceminha de Bacon">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
        <link rel="shortcut icon" href="images/logo.png">

        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <a href="index.php" title="Home" class="logo">
                    <img src="images/kingburger.png"
                         alt="King Burger" title="King Burger">
                </a>

                <a href="#" id="menu">
                    <i class="fas fa-bars"></i>
                </a>

                <ul>
                    <li>
                        <a href="home" title="Home">Home</a>
                    </li>
                    <li>
                        <a href="sobre" title="Sobre">Sobre</a>
                    </li>
                    <li>
                        <a href="cardapio" title="Cardápio">Cardápio</a>
                    </li>
                    <li>
                        <a href="contato" title="Contato">Contato</a>
                    </li>
                </ul>
            </nav>

            <div class="clear"></div>

            <div class="msg">
                <h1>Mega Max Burger</h1>
                <p>4 Hamurgueres de Carne de Boi, mais 500 gramas de bacon</p>
            </div>

            <img src="images/6.png" alt="Mega Max Burguer" title="Mega Max Burger" class="max">

        </header>

        <main>
            <?php
            //recuperar o parametro
            if (isset($_GET["param"])) {
                $pagina = $_GET["param"];
            } else {
                $pagina = "home";
            }

            //echo $pagina;
            $pagina = "paginas/" . $pagina . ".php";
            //verificar se o arquivo
            if (file_exists($pagina))
                include $pagina;
            else
                include "paginas/erro.php";
            ?>            
        </main>	<div class="bacon"></div>       

        <footer>
            <div class="container row">
                <div class="coluna">
                    <h3>Menu de Acesso</h3>
                    <ul>
                        <li><a href="home" title="Home">Home</a></li>
                        <li><a href="sobre" title="Sobre a King Burger">Sobre</a></li>
                        <li><a href="cardapio" title="Cardápio">Cardápio</a></li>
                        <li><a href="contato" title="Contao">Contato</a></li>
                    </ul>
                </div>
                <div class="coluna borda">
                    <div class="fb-page" data-href="https://www.facebook.com/unoescoficial/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/professorburnes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/unoescoficial/">UNOESC</a></blockquote></div>
                </div>
                <div class="coluna borda">                   
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.618810803853!2d-53.540123984959116!3d-26.72462218320893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fa5ce65b29a8dd%3A0xa6fade3762f3eb56!2sUNOESC+Campus+S%C3%A3o+Miguel+do+Oeste!5e0!3m2!1spt-BR!2sbr!4v1522716662235" width="100%" height="215" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>         
        </footer>

        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.12';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            $("#menu").click(function () {
                $("nav ul").toggle();
            })

        </script>
    </body>
</html>