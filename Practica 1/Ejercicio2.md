# Practica 2
## a) <!-- Código controlado el día 12/08/2009 →
Es utilizado para realizar un comentario de una o varias lineas, se puede encontrar en cualquier parte del documento html.
    `<!--` es utilizado para abrir el comentario, luego se escribe  el comentario propiamente dicho y se cierra con `-->`.

## b) `<div id="bloque1">Contenido del bloque1</div>`

El tag div debe ir contenida dentro del elemento `<body>`.Hace referencia a una division, es decir genera un segmento en el documento en la que podemos encerrar otros elementos dentro del div. En el ejemplo presentado se esta conteniendo solo texto, pero podemos contener varios elementos dentro y de distintos tipos. Tiene un atributo id cuyo valor es "bloque1". Este id es darle una identificacion al elemento para darle estilos especificos a ese elemento. Se recomienda no repetir los id. No es obligatorio

## c) `<img src="" alt="lugar imagen" id="im1" name="im1" width="32" height="32" longdesc="detalles.htm" />`

`<img/>` es una etiqueta utlizada para presentar una imagen en el documento, se coloca dentro del body y tiene varios atributos como src el cual debemos darle el valor de la url donde se encuentra la imagen, alt cuya funcionalidad es que si la imagen no se muestra por algun problema, se mostrara el valor del atributo alt en donde estaba la imagen.",
id cuyo valor es "im1", name cuyo valor es "im1", width cuyo valor es "32",height cuyo valor es "32",estos son el ancho y el alto que se va a presentar la imagen, , longdesc cuyo valor es "detalles.htm" es un url donde esta una descripcion de la imagen.
No es obligatorio
        
## d) 
```html
<meta name="keywords" lang="es" content="casa, compra, venta, alquiler " />
`<meta http-equiv="expires" content="16-Sep-2019 7:49 PM" />
```

`<meta/>` es una etiqueta ulizada para aportar información sobre el documento ,se coloca dentro del head. Son los metadatos de el documento. Se coloca por ejemplo el idioma de la pagina, la codificacion de los caracteres de la pagina, el autor entre otros datos.

## e) `<a href="http://www.e-style.com.ar/resumen.html" type="text/html" hreflang="es" charset="utf-8"
rel="help">Resumen HTML </a>`

La etiqueta `<a/>` es utlizada para especificar un hipervinculo, se coloca dentro el body, tiene varios atributos como href donde se indica la url a la cual se quiere acceder, en este caso http://www.e-style.com.ar/resumen.html, type cuyo valor es "text/html ", hreflang cuyo valor es "es", charset cuyo valor es "utf-8", rel cuyo valor es "help", todos estos atributos hacen referencias a metadatos de la pagina a la que hace referencia la url y el texto "Resumen HTML" es el que se verá en la pagina como enlace.
No es obligatoria

## f)
 ```html 
<table width="200" summary="Datos correspondientes al ejercicio vencido">
<caption align="bottom"> Título </caption>
<tr>
<th scope="col">&nbsp;</th>
<th scope="col">A</th>
<th scope="col">B</th>
<th scope="col">C</th>
</tr>
<tr>
<th scope="row">1º</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<th scope="row">2º</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table> 
```
En este caso nos encontramos con las etiquetas `<table/>, <caption/>, <tr/>, <th/> y <td/>.` Estas son utilizadas dentro del body
La etiqueta `<table/>` se utiliza para crear una tabla, `<caption/>` le da el titulo a la tabla, `<tr/>` se utiliza para agregar una fila a la tabla, `<th/>` se la utiliza para agregar las celdas del encabezado de la tabla es decir la primera fila o la primera columna que serian los titulos de las columnas o de la fila los cuales se ponen en negrita, mientras que `<td/>`se usa para agregar celdas comunes.
Dentro de la etiqueta `<table/>` encontramos los atributos: width="200" y summary="Datos correspondientes al ejercicio vencido" que es un resumen de que datos tiene la tabla, dentro de la estiqueta `<th/>` encontramos el atributo scope que toma los valores de "col"o de "row".El atributo scope especifica si una celda de encabezado es el encabezado de una columna, fila o grupo de columnas o filas.
No son obligatorias
