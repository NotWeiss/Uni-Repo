<html>

    <head>

        <title>Problema 1</title>
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
                        <h4>Calcular la media de los 5 números positivos introducidos.</h4>
                    </p>

                </div>

                <div class = "wrapper">

                    <H2>MEDIA</H2>

                    <!--Formulario-->
                    <form action = "problema1.php" method = "POST">

                        <p>Ingrese cada valor separado por un espacio<br></p>

                        <input type = "text" name = "operacion" placeholder = "Valor1 Valor2 Valor3 ..."/>

                        <button type="submit" name = "calcular">CALCULAR</button>
                        
                    </form>
                    
                    <H4>Resultados:</H4>
                    <div class = "resultado">
                        
                        <p>
                            <?php
                                // Validacion.
                                if ((empty($_POST["operacion"])) && (isset($_POST["calcular"])))
                                    echo "<H4 style = 'color:Tomato;'>DEBE INGRESAR DATOS</H4>";
                                elseif ((isset($_POST["operacion"])) && (isset($_POST["calcular"])))
                                    echo Average(toArray("$_POST[operacion]")); 
                            ?>
                        </p>
                        
                        

                    </div>


                </div>

            </main>

        </div>

    </body>

</html>