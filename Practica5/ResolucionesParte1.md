# Practica PHP

# Parte 1

## Ejercicio 1

### Variables:

- a → boolean
- b → string
- c → string
- d → integer
- f → integer
- g → integer

### Operadores:

- = → asignación
- += → suma y asignación
- ? … : … → operador ternario
- $d++ → post-incremento
- ++$d → pre-incremento
- - → producto

### Funciones :

- doble() → Parametro que se envia $d++
- gettype() → Parametros que se envian $a, $b, $c, $d
- is_int() → Parametro que se envia $d
- is_string() → Parametro que se envia $a

### Estructuras de control:

- `if (is_int($d)) { $d += 4; }`
- `if (is_string($a)) { echo "Cadena: $a"; }`

### Salida por pantalla:

`booleanstringstringinteger1xyzxyz184444`

## Ejercicio 2

1. Los códigos son equivalentes.
2. Los códigos son equivalentes.
3. Los códigos son equivalentes.

## Ejercicio 3

1. El código genera una tabla con 5 filas y 2 columnas.
2. El código valida, una vez enviado el formulario donde se completa el campo edad, si es mayor de edad o no. Imprime “Mayor de edad” si lo ingresado es mayor a 21 y “Menor de edad” si es menor a 21.

## Ejercicio 4

El programa intentará hacer el primer print `(echo “El $flor $color \n”;)` pero como no se realizo el include hasta ese momento del archivo datos.php tiraría un error de variables indefinidas. Sin embargo, para el siguiente print, se escribió la línea include ‘datos.php’ por lo que el interprete sabra el valor de la variabla y la salida sería la esperada: El clavel blanco.

## Ejercicio 5

En el ejercicio 5, cada vez que accedemos a la pagina vista.php, esta hace un include de el archivo contador.php que realiza la logica para aumentar el valor del contador.La logica del script contador.php es abrir el arhivo que tiene definido dentro, lee el valor del contador, luego lo cierra y lo vuelve a abrir pero con permiso de escritura y reescribe el valor del contador aumentandolo en una unidad, guarda y lo vuelve a cerrar. Luego se escribe en pantalla el valor del contador.
