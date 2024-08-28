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
        <link rel = "stylesheet" href = "../Styles/type1_style.css">

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
                        Enunciado: Calcular la media de los 5 números positivos introducidos.
                    </p>

                </div>

                <div class = "wrapper">

                    <!--Formulario-->
                    <form action = "problema1.php" method = "POST">

                        <H3>Media</H3>

                        <label for="operacion">Ingrese cada valor separado por un espacio<br></label>

                        <input type = "text" name = "operacion" placeholder = "Valor1 Valor2 Valor3 ..." default = "0 1 2"/>

                        <br><br>

                        <input type="submit" name = "calcular" value = "Calcular"/>
                    
                    </form>

                    <div class = "resultado">

                        <?php echo Average(toArray("$_POST[operacion]")); ?>

                    </div>


                </div>

            </main>

        </div>

    </body>

</html>