# FORMULAS Y FUNCIONES DE EXCEL
Cha aquí hay como una recopilación de vainas que nos pueden servir pa ***Sistemas de Información Gerencial***, voy a filtrar lo que me parece poco relevante, pero cualquier vaina pueden entrar a [W3Schools: Excel](https://www.w3schools.com/excel/index.php) y revisar si hay algo más que les pueda ayudar.

>[!warning] Idioma
> Esta vaina esta en ingles, asi que si tienen el Excel en español los nombres de las funciones cambian. So pueden cambiar el idioma a ingles, buscar los nombres en español o si encuentro  las cosas en español las voy a poner aquí también.

## Sintaxis
Supongo que ya lo saben, pero no esta demás recordarlo. Todas las formulas de excel deben comenzar con el signo **'='** (Igual) para que excel pueda determinar que es una formula y no un simple texto.

Por otro lado, a la hora de tomar datos de alguna celda o grupo de celdas hay que tomar en cuenta lo siguiente:

|          **Tipo**           |                                                                                         **DESCRIPCIÓN**                                                                                          | **SINTAXIS**  |                                **LINK**                                |
|:---------------------------:|:------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|:-------------:|:----------------------------------------------------------------------:|
|   **Referencia Relativa**   |                                Hace referencia a los datos de una *celda*. Esta referencia **cambia según la posición de la celda dónde se escribe la formula**.                                 |    **A2**     |   [Ref. Relativa](https://www.w3schools.com/excel/excel_rel_ref.php)   |
| <br>**Referencia Absoluta** | Similar a la anterior, pero difiere en el hecho de que no se adapta, sino que **mantiene una referencia de forma constante sin importar la posición** de la *celda* donde se escriba la formula. | <br>**$A$2**  | <br>[Ref. Absoluta](https://www.w3schools.com/excel/excel_abs_ref.php) |
|        <br>**Rango**        |           Toma la **posición** de una *celda* como **inicio** y la de otra como **final**. Hace referencia a los datos de todas las *celdas* que se encuentren dentro de ese *rango*.            | <br>**A2:D6** |     <br>[Rango](https://www.w3schools.com/excel/excel_ranges.php)      |

Por último, a la hora de utilizar funciones, cada uno de sus argumentos deben ir separados por un **';'** (punto y coma) y deben respetar el orden de prioridad de las operaciones:
1. Paréntesis **(     )**.
2. Exponentes/Raíces **^**.
3.  Multiplicación **\*** y División **/** .
4. Suma **+** y Resta **-**.

---

## Operaciones Aritméticas
En Excel hay al menos 2 métodos para realizar operaciones aritméticas, no voy a ahondar mucho en esto porque la explicación puede resultar larga y en el siguiente link esta bastante bien explicado. Por otro lado, pondré de una forma muy resumida como hacer las operaciones. **Dependiendo del idioma y/o la configuración, para algunas funciones se debe usar ";" (punto y coma) en lugar de "," (coma) para separar sus argumentos**

|   **OPERACION**    |       **MÉTODO 1**       |                      **METODO 2 (FUNCIÓN)**                      | **FUNCION EN ESPAÑOL** |
|:------------------:|:------------------------:|:----------------------------------------------------------------:|:----------------------:|
|      **Suma**      | =[Valor 1]+[Valor 2]...  |            =SUM([*Valor 1*],[*Valor 2*]), =SUM(A2:A5)            |         SUMA()         |
|     **Resta**      | =[Valor 1]-[Valor 2]...  |        =SUM([*Minuendo*], -[*Sustraendo*]), =SUM(-A2:A5)         |         SUMA()         |
| **Multiplicación** | =[Valor 1]\*[Valor 2]... | =PRODUCT([*Multiplicando*], [*Multiplicador*]),  =PRODUCT(A2:A5) |       PRODUCTO()       |
|    **División**    | =[Valor 1]/[Valor 2]...  |              =QUOTIENT([*Dividendo*], [*Divisor*])               |       COCIENTE()       |
|    **Residuo**     |            --            |                 =MOD([*Dividendo*], [*Divisor*])                 |           --           |
|    **Potencia**    |  =[Valor 1]\^[Valor 2]   |                  =POWER([*Base*],[*Exponente*])                  |       POTENCIA()       |
|      **Raíz**      | =[Valor 1]^([Valor 2]/2) |                 =SQRT([*Radicando*], [*Índice*])                 |         RAIZ()         |
|   **Porcentaje**   |  =[Valor 1]\*[Valor 2]%  |                                --                                |           --           |

**Todos las operaciones que en el método uno muestran "..." son aquellas donde se pueden utilizar mas de 2 valores.** En caso de que quieran revisar todo de forma más detallada o si no entendieron pueden revisar los siguientes links:
- [Operadores Excel](https://support.microsoft.com/es-es/office/operadores-de-cálculo-y-prioridad-en-excel-48be406d-4975-4d31-b2b8-7af9e0e2878a)
- [SUM()](https://www.w3schools.com/excel/excel_addition.php)

---

##  Funciones Varias
Listado con varias funciones que probablemente tengamos que utilizar:

|       **FUNCION**       |                             **LINK INGLES**                              |                                                         **LINK ESPAÑOL**                                                         |
|:-----------------------:|:------------------------------------------------------------------------:|:--------------------------------------------------------------------------------------------------------------------------------:|
|       **IF o SI**       |      [Function: IF()](https://www.w3schools.com/excel/excel_if.php)      |          [Función SI()](https://support.microsoft.com/es-es/office/si-función-si-69aed7c9-4e8a-4755-a9bc-aa8bbff73be2)           |
|       **AND o Y**       |     [Function: AND()](https://www.w3schools.com/excel/excel_and.php)     |            [Función Y()](https://support.microsoft.com/es-es/office/y-función-y-5f19b2e8-e1df-4408-897a-ce285a19e9d9)            |
|  **IFS o SI.CONJUNTO**  |     [Function: IFS()](https://www.w3schools.com/excel/excel_ifs.php)     |   [Función SI.CONJUNTO()](https://support.microsoft.com/es-es/office/función-si-conjunto-36329a26-37b2-467c-972b-4a39bd951d45)   |
| **COUNTIF o CONTAR.SI** | [Function: COUNTIF()](https://www.w3schools.com/excel/excel_countif.php) |    [Función: CONTAR.SI()](https://support.microsoft.com/es-es/office/función-contar-si-e0de10c6-f885-4e71-abb4-1f464816df34)     |
| **AVERAGE o PROMEDIO**  | [Function: AVERAGE()](https://www.w3schools.com/excel/excel_average.php) | [Función: PROMEDIO()](https://support.microsoft.com/es-es/office/promedio-función-promedio-047bac88-d466-426c-a32b-8f33eb960cf6) |
|         **MIN**         |     [Function: MIN()](https://www.w3schools.com/excel/excel_min.php)     |          [Función: MIN()](https://support.microsoft.com/es-es/office/función-min-61635d12-920f-4ce2-a70f-96f202dcc152)           |
|         **MAX**         |     [Function: MAX()](https://www.w3schools.com/excel/excel_max.php)     |          [Función: MAX()](https://support.microsoft.com/es-es/office/función-max-e0012414-9ac8-4b34-9a47-73e662c08098)           |



DOCUMENTACIÓN DE LAS FUNCIONES DE EXCEL EN ESPAÑOL:
[FUNCIONES](https://support.microsoft.com/es-es/office/funciones-de-excel-por-categoría-5f91f4e9-7b42-46d2-9bd1-63f26a86c0eb)