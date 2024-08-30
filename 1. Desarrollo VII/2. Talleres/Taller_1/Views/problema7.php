<html>

    <head>

        <title>Problema 7</title>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        
        <!--Connect to Google Fonts API-->
        <link rel = "preconnect" href = "https://fonts.googleapis.com">
        <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
        
        <!--Font= sans-serif:Inter-->
        <link href = "https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel = "stylesheet">
        
        <!--Font= serif:Baskervville SC-->
        <link href = "https://fonts.googleapis.com/css2?family=Baskervville+SC&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel = "stylesheet">

        <!--CSS-->
        <link rel = "stylesheet" href = "../Styles/main_style.css">

        <!--Controllers-->
        <?php
        include ('../Controllers/cadenas.php');
        include ('../Controllers/calculos.php');
        ?>
    
    </head>

    <body>
        
        <div class = "background"></div>

        <div class = "content">
            
            <!--Home-->
            <nav>

                <a href = "../index.php" class = "home"><H1>Taller 1</H1></a>

            </nav>

            <main>

                <!--Enunciado-->
                <div class = "paragraph">

                    <p>
                        <h4>Algoritmo que permita repetir continuamente la frase "¿desea continuar?".</h4>
                    </p>

                </div>

                <div class = "wrapper">

                    <H2>REPETIR</H2>                        
                        
                        <?php 

                                if (Repeater(SingleString($_POST['continue'])))
                                    DisplayForm();
                                else
                                    DisplayForm();
                            

                        ?>

                    </div>


                </div>

            </main>

        </div>

    </body>

</html>