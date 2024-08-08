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

---

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

---

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