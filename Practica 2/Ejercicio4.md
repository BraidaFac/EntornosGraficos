# Ejercicio 4

Dado

```
* {color:green; }
a:link {color:gray }
a:visited{color:blue }
a:hover {color:fuchsia }
a:active {color:red }
p {font-family: arial,helvetica;font-size: 10px;color:black; }
.contenido{font-size: 14px;font-weight: bold; }
```

```
<body>
<p class="contenido" style="font-weight: normal;">
Este es un texto ...............</p>
<table>
<tr>
<td>Y esta es una tabla.......</td>
</tr>
<tr>
<td><a href="http://www.google.com.ar">con un
enlace</a></td>
</tr>
</table>
</body>
```

```
<body class="contenido">
<p> Este es un texto................</p>
<table>
<tr>
<td>Y esta es una tabla.......</td>
</tr>
<tr>
<td><a href="http://www.google.com.ar">con un enlace</a></td>
</tr>
</table>
</body>
```

## Primer código

Se le asigna un color de letra verde a todos los textos del documento.
Luego, nos encontramos con una etiqueta `<p>` con la clase "contenido", que a su vez tiene un atributo style="font-weight: normal;".
En este caso primero se le aplicarían los estilos especificados en linea por prioridad, luego los de clase y luego los de elemento. Nos devuelve "Este es un texto ..............." con un color de letra negro, con un grosor de letra normal, con una fuente de letra "arial,helvetica" y un tamaño de letra de 14 pixeles.
Algo similar ocurre con las etiquetas `<a>`, se le aplicaran las propiedades globales (clolor:green) y las propiedades especificadas, haciendo que los enlaces se vean en gris cuando no fueron visitados, en azul cuando si lo fueron, en fucsia cuando se pasa el cursos por encima y rojos cuando están activos.
El resto de etiquetas solo se ven afectadas por los estilos definidos con '\_', por lo cual el texto que se encuentra en la tabla tendrá un color verde.

## Segundo código

Se asigna un color de letra verde a todos los textos del documento, en este código, es la etiqueta `<body>` la que cuenta con las clase "contenido", y dentro de esta encontramos una etiqueta `<p>` sin ninguna clase, una etiqueta `<table>` y dentro de esta una etiqueta `<a>`
El texto dentro de la etiqueta `<p>` tendrá un color de letra negro, un tamaño de letra de 10 pixeles, una fuente de letra "arial,helvetica" y estará en negrita por el `font-weight:bold`.
El texto dentro de la etiqueta `<table>` tendrá un color de letra negro, un tamaño de letra de 14 píxeles y estará en negrita
El texto dentro de la etiqueta `<a>` tendrá un tamaño de letra de 14 píxeles, estará en negrita pero el color de este será gris cuando no fue visitado, azul cuando si lo fuero, fuscia cuando se pasa el cursos por encima de este y rojo cuando está activo.
