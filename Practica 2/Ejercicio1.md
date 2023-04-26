## 1. ¿ Qué es CSS y para qué se usa?

CSS **(Cascading Style Sheets)** es un lenguaje de diseño utilizado para definir el aspecto visual y la presentación de una página web. Se utiliza para describir cómo se deben mostrar los elementos HTML, como el color de fondo, el tamaño de la fuente, la disposición de los elementos, los efectos visuales y más.
Con CSS, los desarrolladores web pueden separar la presentación visual de una página web del contenido y la estructura de la página, lo que facilita la creación y el mantenimiento de sitios web a gran escala.
CSS es un estándar web que es mantenido y actualizado por la World Wide Web Consortium (W3C) y es compatible con la mayoría de los navegadores web modernos.

## 2. CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?

CSS utiliza un conjunto de reglas para declaraciones de estilo, conocidas como reglas CSS o reglas de estilo en cascada. Estas reglas constan de tres partes principales:

1. Selector: selecciona los elementos HTML a los que se aplicará la declaración de estilo. El selector puede ser el nombre de la etiqueta HTML, una clase, un identificador o un selector de atributos.

2. Propiedad: especifica el estilo que se aplicará al elemento seleccionado. Por ejemplo, la propiedad "color" se utiliza para establecer el color del texto.

3. Valor: define el valor de la propiedad. Por ejemplo, el valor "red" se utiliza para establecer el color del texto en rojo.

Además de los selectores simples, como el elemento HTML, se pueden utilizar selectores más complejos, como las clases y los identificadores. Por ejemplo:

```css
.clase {
  color: red;
}

#identificador {
  font-size: 20px;
}
```

## 3. ¿ Cuáles son las tres formas de dar estilo a un documento?

### Estilos externos

Se pueden especificar estilos en un archivo externo de CSS y enlazarlo al documento HTML utilizando la etiqueta "link". Por ejemplo:

```html
<head>
  <link rel="stylesheet" href="estilos.css" />
</head>
```

### Estilos internos

Se pueden especificar estilos en la sección head del documento HTML utilizando la etiqueta "style". Por ejemplo:

```html
<head>
  <style>
    p {
      color: red;
    }
  </style>
</head>
```

En el archivo "estilos.css", se pueden especificar reglas de estilo para los elementos HTML del documento.

### Estilos en linea

Se pueden especificar estilos directamente en el elemento HTML utilizando el atributo "style". Por ejemplo:

```html
<p style="color: red;">Este es un párrafo en rojo.</p>
```

### Estilos importados

En lugar de utilizar la etiqueta "link", se pueden importar estilos externos utilizando la etiqueta "style" y la función "@import". Por ejemplo:

```html
<head>
  <style>
    @import url('https://www.otro-servidor.com/estilos.css');
  </style>
</head>
```

Cargar archivos CSS desde otro servidor puede afectar el rendimiento del sitio web, ya que aumenta el tiempo de carga y puede generar problemas de seguridad si el servidor remoto no es confiable

## 4. ¿ Cuáles son los distintos tipos de selectores más utilizados?

- Selector de elemento: selecciona todos los elementos HTML de un tipo específico. Por ejemplo, el selector h1 selecciona todos los encabezados `<h1>` en la página.

- Selector de clase: selecciona todos los elementos que tienen un valor específico en el atributo class. Se utiliza el punto (.) seguido del nombre de la clase. Por ejemplo, el selector .clase selecciona todos los elementos que tienen la clase "clase".

- Selector de ID: selecciona un elemento específico según el valor del atributo id. Se utiliza el símbolo de numeral (#) seguido del nombre del ID. Por ejemplo, el selector #id selecciona el elemento con el ID "id".

- Selector de descendiente: selecciona un elemento secundario que es descendiente directo de un elemento padre. Se utiliza un espacio para separar los selectores. Por ejemplo, el selector div p selecciona todos los elementos `<p>` que son descendientes directos de elementos `<div>`.

- Selector de hijo directo: selecciona un elemento hijo directo de un elemento padre. Se utiliza el signo mayor que (>) para separar los selectores. Por ejemplo, el selector div > p selecciona todos los elementos `<p>` que son hijos directos de elementos `<div>`.

- Selector de atributo: selecciona elementos que tienen un atributo específico y, opcionalmente, un valor específico. Se utiliza corchetes para definir el selector. Por ejemplo, el selector `[type="text"]` selecciona todos los elementos que tienen el atributo type con el valor "text".
- Selector de pseudoclase: selecciona un estado específico de un elemento, como cuando el usuario lo está señalando con el cursor.

```css
a:hover {
  text-decoration: underline;
}
```

## 5. ¿ Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?

En CSS, una pseudoclase es una palabra clave que se agrega a un selector y que especifica un estado especial del elemento seleccionado. Las pseudoclases se utilizan para aplicar estilos a elementos HTML que se encuentran en un estado específico o que se comportan de una manera específica, como cuando el usuario interactúa con ellos. Las pseudoclases se indican mediante el signo de dos puntos `:` después del selector.
Algunas de las pseudoclases más comunes para los vínculos son:

- `:link`: se aplica a los vínculos que aún no han sido visitados por el usuario.
- `:visited`: se aplica a los vínculos que ya han sido visitados por el usuario.
- `:hover`: se aplica cuando el usuario coloca el cursor sobre el vínculo.
- `:active`: se aplica cuando el usuario hace clic en el vínculo.
- `:focus`: Selecciona un elemento cuando tiene el foco, como cuando se selecciona un campo de entrada de texto.
- `:first-child`: Selecciona el primer hijo de un elemento padre.
- `:nth-child(n)`: Selecciona un elemento hijo específico de un elemento padre

## 6. ¿ Qué es la herencia?

En CSS, la herencia es un mecanismo que permite que los estilos se apliquen automáticamente a los elementos secundarios de un elemento padre. Cuando se establece un estilo en un elemento, este estilo se puede heredar por los elementos secundarios que no tienen su propio estilo específico para esa propiedad. Esto significa que no es necesario aplicar estilos a cada elemento individual en una página web; en cambio, se pueden establecer estilos en elementos específicos y permitir que estos estilos se hereden automáticamente en los elementos secundarios.

## 7. ¿ En qué consiste el proceso denominado cascada?

El proceso de cascada en CSS es la forma en que se determina qué estilos se aplican a un elemento específico cuando hay varios estilos que se aplican al mismo elemento. La cascada se basa en un conjunto de reglas que determinan el orden en que se aplican los estilos y cómo se resuelven los conflictos entre diferentes estilos.
El proceso de cascada en CSS se divide en tres partes:

- Especificidad: este es el primer nivel de la cascada. La especificidad es un valor numérico que se asigna a un selector y determina qué estilo tiene prioridad en caso de que haya conflictos entre diferentes estilos que se aplican al mismo elemento. Los selectores más específicos tienen una prioridad más alta que los selectores menos específicos. Por ejemplo, un estilo que se aplica a un selector de ID (#mi-id) tiene una mayor especificidad que un estilo que se aplica a un selector de clase (.mi-clase).

- Origen: este es el segundo nivel de la cascada. El origen se refiere al lugar donde se define un estilo en el documento CSS. Los estilos que se definen en un archivo CSS externo tienen una prioridad más baja que los estilos que se definen en línea (usando el atributo style) o dentro de una etiqueta `<style>` en el documento HTML.

- Orden: este es el tercer y último nivel de la cascada. El orden se refiere al orden en que se definen los estilos. Los utlimos estilos que se definen tienen una prioridad más alta que los estilos que se definen anteriormente. Por ejemplo, si hay dos reglas que establecen el color de fondo de un elemento, la última regla que se define tendrá prioridad sobre la primera.
