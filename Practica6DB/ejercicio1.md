# Practica PHP BASE DE DATOS

## Ejercico 1

1. Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
   necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función **mysqli_connect($hostname , $nombreUsuario , $contraseña);**
2. Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
   Los parámetros son:

- $hostname es un nombre de servidor (dato que debemos consultar en nuestra cuenta de hosting).
- $nombreUsuario es el nombre de usuario de base de datos, nombre que habremos especificado al crear la base de datos (si no lo hemos hecho, puede ser root).
- $contraseña es la contraseña de acceso para el usuario de base de datos, contraseña que habremos especificado al crear la base de datos.

3. Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función **mysqli_select_db(\$nombreConexión, \$nombreBaseDatos)**
   .Esta función debe pasar como parámetro **\$nombreConexion** que se refiere al resultado que nos retorno la funcion **mysqli_connect()** y el otro parametro es **\$nombreBaseDatos** que se refiere al nombre de la base de datos que estara dentro del servidor al que realizamos la conexion.
4. La función mysqli\*query () se utiliza ejecutar una consulta a la base de datos que especifiquemos. La sintaxis es **mysqli_query(\$nombreConexion, \$query);** y requiere como parámetros **\$nombreConexion** que refiere a la respuesta de la funcion **mysqli_connect(\$hostname , \$nombreUsuario , \$contraseña)** y el otro paremetro es **\$query** que es una variable que almacena la consulta de SQL que queremos realizar, esta variable es un string; Por ejemplo una consulta es **"SELECT usuario.nombre FROM usuarios WHERE usuarios.id=1;**",
5. La cláusula or die() se utiliza para capturar un error al ejecutarse la query.
   y la función mysqli_error () devuelve el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado.
6. Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo
   $vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):

```php
<?php
while ($fila = mysqli_fetch_array($vResultado))
{
?>
<tr>
<td><?php echo ($fila[0]); ?></td>
<td><?php echo ($fila[1]); ?></td>
<td><?php echo ($fila[2]); ?></td>
</tr>
<tr>
<td colspan="5">
<?php
}
mysqli_free_result($vResultado);
mysqli_close($link);
?>
```
