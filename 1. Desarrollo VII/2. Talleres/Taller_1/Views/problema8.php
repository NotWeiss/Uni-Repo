<html>

    <head>

        <title>Problema 8</title>
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
                        <h4>Calcular las 15 primeras potencias de 4.</h4>
                    </p>

                </div>

                <div class = "wrapper2">

                    <H2>Calcular las N primeras potencias de X</H2>

                    <!--Formulario-->
                    <form action = "problema8.php" method = "POST">

                        <p>Ingrese el numero base y la cantidad de potencias</p>

                        <input type = "text" name = "base" placeholder = "Numero Base"/>

                        <input type = "text" name = "cantidad" placeholder = "Cantidad de Potencias"/>

                        <button type="submit" name = "calcular">CALCULAR</button>
                        
                    </form>
                    
                    <H4>Resultados:</H4>
                    <div class = "resultado">
                        
                        <p>
                            <?php
                                // Validacion.
                                if ((empty($_POST["base"]) || empty($_POST["cantidad"])) && isset($_POST["calcular"]))
                                    echo "<H4 style = 'color:Tomato;'>DATOS INCOMPLETOS</H4>";
                                elseif ((isset($_POST["base"]) && isset($_POST["cantidad"])) && (isset($_POST["calcular"])))
                                    echo PowerOf(SingleInt("$_POST[base]"), SingleInt("$_POST[cantidad]"));
                            ?>
                        </p>
                        
                        

                    </div>


                </div>

            </main>

        </div>

    </body>

</html>