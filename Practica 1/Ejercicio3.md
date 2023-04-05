# Ejercitación 3

En cada caso, explicar las diferencias entre los segmentos de código y sus visualizaciones

<br><br>

## A-
```html
<a href="http://www.google.com.ar">Click aquí para ir a Google</a>
```
Muesta en pantalla un link a la pagina de google con el texto *"Click aquí para ir a Google"*. Al hacer click el usuario navegara a esa pagina.

<br>


```html
<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>
```
Es similar al caso anterior pero se abre una nueva ventana.

<br>

```html
<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">
```
Este fragmento HTML tiene un problema, no se cierra el tag y el hipervinculo no tiene ningun texto; es decir no hay forma de que el usuario vea el link. Suponiendo que se arregle este inconveniente, podemos destacar que agrega varios tags para darle informacion al navegador:

- Indica que el url se dirige a un archivo de texto html
- Indica que el documento al que se dirige esta en español
- Indica que el doncuemto al que se dirige usa el conjunto de caracteres utf-8
- Indica que el enlace proporciona ayuda o información adicional. 

<br>

```html
<a href="#">Click aquí para ir a Google</a>
```
Es similar al primer caso, pero en lugar de navegar hacia google recarga la pagina actual.

<br>


```html
<a href="#arriba">Click aquí para volver arriba</a>
```
Muestra un link con el texto *"Click aquí para volver arriba"*. Al hacer click no viaja a otra pagina, sino que se dirige hacia el elemento de la pagina con `id="arriba"`.

<br>

```html
<a name="arriba" id="arriba"></a>
```
Este hipervinculo no tiene ningun texto, por lo que el usuario no lo podra ver, ademas no tiene el atributo href asi que tampoco tendria la funcionalidad de hipervinculo. Con sus atributos indican que este elemento es la posicion *"arriba"* del documento (que seria referenciado en el caso anterior), tanto `id` como `name` hacen esto pero se recomienda solo usar `id`

<br><br>

## B-

```html
<p>
    <img src="im1.jpg" alt="imagen1" />    
    <a href="http://www.google.com.ar">Click aquí</a>
</p>
```
Muestra un parrafo, dentro del cual hay una imagen y debajo de la misma hay un hipervinculo hacia google con el texto *"Click aqui"*.

<br>

```html
<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
    </a> 
    Click aquí
<p>
```
Es similar al caso anterior per el hipervinculo no esta aplicado sobre el texto *"Click aqui"*, sino que se aplica sobre la imagen (se navegara hacia Google al hacer click en la imagen).

<br>

```html
<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
        Click aquí
    </a>
</p>
```
En este caso el hipervinculo esta aplicado sobre la imagen y sobre el texto.

<br>

```html
<p>
    <a href="http://www.google.com.ar">
        <img src="im1.jpg" alt="imagen1" />
    </a> 
    <a href="http://www.google.com.ar">Click aquí</a>
</p>
```
En este fragmento hay dos hipervinculos, uno sobre la imagen y otro sobre el texto. Ambos se vinculan con la pagina de principal de Google.

<br><br>

## C-

```html
<ul>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ul>
```
Este codigo muestra una lista desordenada (unordered list) con tres items (xxx,yyy,zzz).

<br>

```html
<ol>
    <li>xxx</li>
    <li>yyy</li>
    <li>zzz</li>
</ol>
```
Este extracto muestra una lista ordenada (ordered list) con los mismos tres items. En una lista ordenada cada elemento tiene un numero asignado con el cual se muestra en pantalla; en este caso xxx es 1, yyy es 2 y zzz es 3 .
 
<br>

```html
<ol>
    <li>xxx</li>
</ol>
<ol>
    <li value="2">yyy</li>
</ol>
<ol>
    <li value="3">zzz</li>
</ol>
```
En este caso, se muestran tres listas ordenadas, cada una con un item. La primera lista contiene xxx con del valor 1 (por defecto). La segunda lista contiene yyy que se le asigna el valor 2 con el atibuto `value`. La tercera hace algo similar mostrando zzz con el valor 3. Este codigo muesta en pantalla el mismo contenido que el ejemplo anterior (sin css), pero semanticamente son distintos.  

<br>

```html
<blockquote>
    <p>
        1. xxx <br/>
        2. yyy <br/>
        3. zzz
    </p>
</blockquote>
```
Este código HTML muestra un bloque de cita `<blockquote>` que contiene un párrafo con tres líneas de texto, donde cada línea está separada por una etiqueta de salto de línea. Otra vez este codigo mostraria por pantalla algo similar al caso anterior, pero hay una diferencia semantica. 

<br><br>

## D-

```html
<table border="1" width="300">
    <tr>
        <th>Columna 1</th>
        <th>Columna 2</th>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
```
Este código HTML muestra una tabla que tiene dos columnas y tres filas, esta tiene 300px de ancho y un borde de tipo 1. Cada columa tiene un encabezado.

<br>

```html
<table border="1" width="300">
    <tr>
        <td>
            <div align="center">
                <strong>Columna1</strong>
            </div>
        </td>
        <td>
            <div align="center">
                <strong>Columna2</strong>
            </div>
        </td>
    </tr>
    <tr>
        <td>Celda 1</td>
        <td>Celda 2</td>
    </tr>
    <tr>
        <td>Celda 3</td>
        <td>Celda 4</td>
    </tr>
</table>
```
Muestra una tabla simial a la anterior pero las columnas no tienen encabezado. En su lugar el la primera fila usa celdad de datos que adentro contienen div con el texto centrado que adentro con tiene contenido marcado dentro de un tag `<strong>` que lo muesta en negrita. Esteticamente pueden paracer similares pero tiene signifacado distinto.

<br><br>



