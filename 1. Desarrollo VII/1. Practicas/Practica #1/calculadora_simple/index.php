<html>

    <header>

        <!--Incluye las funciones creadas en el archivo controller.php.-->
        <?php include ('controllers\controller.php'); ?>
  
    </header>
    
    <head>

        <title>Calculadora Simple</title>

    </head>

    <body>

            <!--Formulario para ingresar la operación.-->
            <form action= "index.php">

                <label for="operacion">Operación<br></label>

                <!--Lee la operación como una cadena.-->
                <input type="text" name= "operacion" placeholder= "Valor1 + Valor2" default= "0 + 0"/> 

                <br><br>
                
                <!--Envia la información.-->
                <input type="submit" name= "calcular" value= "Calcular"/>

            </form>
            
            <!--Llama a la funcion 'Operator' con la operacion escrita como argumento.-->
            <?php echo Operator("$_REQUEST[operacion]"); ?>

    </body>

</html>