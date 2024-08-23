![LogoUTP | 100](https://utp.ac.pa/documentos/2015/imagen/logo_utp_1_72.png) ![LogoFISC | right | 100](https://fisc.utp.ac.pa/sites/fisc.utp.ac.pa/files/documentos/2020/imagen/logo_en_contactenos.png)

<p style= "text-align: center">
Universidad Tecnológica de Panamá <br><br><br>
Curso: Desarrollo de Software VII<br><br><br>
Profesora: Irina Fong<br><br><br>
Grupo: 1LS132<br><br><br>
Estudiante: Reynaldo Pedroza<br><br><br>
Correo: reynaldo.pedroza@utp.ac.pa<br><br><br>
Introducción al lenguaje de programación PHP<br><br><br>
II Semestre<br><br><br>
</p>

<div style= "page-break-after: always;"></div>

# Practica 1. Iniciación
#### Parte I. Verificar instalación de PHP.
1. **Instalar y Configurar Servidor Web Local:** Desmarcar las aplicaciones no deseadas durante la instalación y organizar las carpetas a manejar.
2. **Verificar Instalación de PHP:** Escribir **`phpinfo();`** en mi editor de texto preferido.
3. **Ejecutar:** Iniciar ***Apache Server*** via **XAMPP** y ejecutar lo anterior.
**CÓDIGO:**
```
<?php
    phpinfo();
?>
```
**SALIDA:**
![[1phpInfo.png]]

<div style= "page-break-after: always;"></div>

#### Parte II. Hola Mundo (Solo php).
Imprimir "Hola Mundo" / "Hello World" solo usando php.

**CÓDIGO:**
```
<?php
    echo "Hello World";
?>
```
**SALIDA:**
![[2HelloWorld.png]]

<div style= "page-break-after: always;"></div>

#### Parte III. Código PHP embebido en HTML.

1. **Crear la base en HTML:** Crear un archivo .php con los tags principales de HTML.
2. **Añadir código php:** Definir los limites del PHP dentro del HTML y usar "echo 'Hola Mundo'";.

**CÓDIGO:**
```
<html>
<head>
    <title>Ejemplo</title>
</head>
<body>
    <H1>Ejemplo Simple</H1>
    Primer ejemplo de codigo PHP embebido dentro de codigo HTML. <br><br>
    <?php echo "<H3>Hola Mundo</H3>"; ?>
    <!--Me dio problemas porque lo guarde como html 😐.-->
</body>
</html>
```
**SALIDA:**
![[3phpEmbed.png]]

<div style= "page-break-after: always;"></div>

#### Parte IV.  Operaciones Matemáticas Básicas

1. **Realizar todas las operaciones que se presentan en el PowerPoint**: suma, resta, multiplicación, división, potencia, modulo/residuo
2. **Crear el formulario HTML**: Decidí leer las operaciones como una cadena.
3. **Crear e incluir el controlador**: Al escribir el código me pareció que era difícil de leer por la cantidad de líneas. Moví la lógica a otro documento .php y lo incluí en el documento principal.

**CÓDIGO:**
index.php:
```
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
```

controller.php:
```
<?php

// Convierte la cadena dada a un arreglo separando cada elemento por los [Espacios].
function StringHandler($_val)
{
    $opp = explode(" ", $_val);
    return $opp;
}

function Operator($val)
{
    // Llama a la funcion stringHandler y le pasa la operacion como argumento.
    $operacion = StringHandler($val);

    // Compara el segundo elemento del arreglo 'operacion' y realiza la operación matemática del mismo.
    switch ($operacion[1])
    {
        case '+':
            $resultado= (float)$operacion[0] + (float)$operacion[2];
            $tipo= "La suma ";
            break;

        case '-':
            $resultado= (float)$operacion[0] - (float)$operacion[2];
            $tipo= "La resta ";
            break;

        case '*':
            $resultado= (float)$operacion[0] * (float)$operacion[2];
            $tipo= "La multiplicación ";
            break;

        case '/':
            $resultado= (float)$operacion[0] / (float)$operacion[2];
            $tipo= "La división ";
            break;

        case '**':
            $resultado= (float)$operacion[0] ** (float)$operacion[2];
            $tipo= "La potencia ";
            break;

        case '%':
            $resultado= (float)$operacion[0] % (float)$operacion[2];
            $tipo= "El residuo ";
            break;

        default:
            $resultado= "Operación No Valida";
    }

    // Imprime el resultado de la operación.
    return $resultado = "$tipo: $operacion[0] $operacion[1] $operacion[2] es = $resultado";

}

?>
```

**SALIDA:**
![[Calculadora Simple+-1.png]]
![[Calculadora Simple--1.png]]
![[Calculadora SimpleX-1.png]]
![[Calculadora SimpleDiv-1.png]]
![[Calculadora SimpleMod-1.png]]
![[Calculadora SimplePot-1.png]]
