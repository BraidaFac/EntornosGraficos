# Ejercitacion 1

## 1. Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última? 
HTML en inglés es HyperText Markup Language que significa Lenguaje de marcas de hipertexto. Es un lenguaje de marcado para la elaboración de páginas web. Es un estándar que sirve de referencia del software que conecta con la elaboración de páginas web en sus diferentes versiones. Define una estructura básica y un código (denominado código HTML) para la definición de contenido de una página web, como texto, imágenes, videos, juegos, entre otros. Se considera el lenguaje web más importante siendo su invención crucial en la aparición, desarrollo y expansión de la World Wide Web (W WW). Es el estándar que se ha impuesto en la visualización de páginas web y es el que todos los navegadores actuales han adoptado.
#### Origen de HTML
El origen de HTML se remonta a 1980, cuando el físico Tim Berners-Lee, investigador del CERN (Organización Europea para la Investigación Nuclear) propuso un nuevo sistema de “hipertexto” para compartir documentos. El primer documento formal con la descripción de HTML se publicó en 1991 bajo el nombre “HTML Tags” (Etiquetas HTML). HTML fue diseñado principalmente como un lenguaje para describir semánticamente documentos científicos.En 1995, el organismo IETF organizó un grupo de trabajo de HTML y el 22 de septiembre publicaron el estándar HTML 2.0. A pesar de su nombre, HTML 2.0 es el primer estándar oficial de HTML. A partir de 1996, los estándares de HTML los publica otro organismo de estandarización, el W3C. La versión HTML 3.2 se publicó el 14 de Enero de 1997 y es la primera recomendación de HTML publicada por el. HTML 4.0 se publicó el 24 de Abril de 1998 y supuso un gran salto desde las versiones anteriores. W3C estandarizó HTML5 con el inventor de la Web Sir Tim Berners-Lee,el 27 de octubre de 2014. Luego de HTML5 siguieron saliendo actualizaciones de la versión 5, la última es la versión HTML5.3 lanzada el 28 de enero de 2021. 


## 2. ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML? 
Los principios básicos de W3C para crear una página HTML son los siguientes:

* __Marcado semántico:__ Use etiquetas HTML que describan el significado del contenido, en lugar de simplemente cómo se ve. Por ejemplo, use `<h1>` para el encabezado principal, `<p>` para párrafos, `<ul>` y `<ol>` para listas, y así sucesivamente.

* __Separación de contenido y presentación:__ Mantenga el contenido y la presentación separados utilizando CSS para diseñar la página. Esto facilita el mantenimiento y la actualización de la página.

* __Accesibilidad:__ Asegúrese de que su HTML sea accesible para todos, incluidas las personas con discapacidades. Use texto alternativo para las imágenes, proporcione transcripciones para el contenido de audio y video, y use etiquetas HTML adecuadas para los encabezados y las listas.

* __Validez:__ Valide su código HTML para asegurarse de que cumpla con los estándares establecidos por W3C. Esto ayuda a garantizar que su página se mostrará correctamente en todos los navegadores y dispositivos.

* __Mejora progresiva:__ Construya su página HTML con un enfoque en la funcionalidad primero, y luego agregue funciones avanzadas para los usuarios con navegadores y dispositivos modernos. Este enfoque asegura que su página funcionará para la mayor cantidad de usuarios posible, independientemente de su tecnología.


## 3. En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado? ¿y obsoleto? 
__Desaprobado__
Un elemento o atributo desaprobado es aquel que ha quedado anticuado por la presencia de estructuras nuevas. Los elementos desaprobados se definen en el manual de referencia en los lugares apropiados, pero claramente marcados como desaprobados. Los elementos desaprobados pueden declararse obsoletos en versiones futuras de HTML.
Los agentes de usuario deberían seguir dando soporte a los elementos desaprobados por razones de compatibilidad con versiones anteriores.
__Obsoleto__
En HTML, una etiqueta obsoleta es aquella que ha sido reemplazada por una nueva versión de HTML o que ya no se utiliza en absoluto. Las etiquetas obsoletas aún pueden funcionar en algunos navegadores web, pero su uso se considera desaconsejado porque pueden producir errores o problemas de compatibilidad con otros navegadores y dispositivos.
Cuando una etiqueta se considera obsoleta, el W3C (Consorcio World Wide Web) la elimina de las especificaciones HTML oficiales y recomienda a los desarrolladores que dejen de usarla. En su lugar, se recomienda usar las etiquetas actualizadas que cumplen con los estándares de HTML. Los desarrolladores deben evitar utilizar etiquetas obsoletas y actualizar su código HTML para asegurarse de que sea compatible con los estándares actuales de la web y los navegadores modernos.
Las siguientes etiquetas se consideran obsoletas, aunque estuvieron definidas en alguna recomendación de HTML: `<acronym>, <applet>, <basefont>, <big>, <center>, <dir>, <font>, <frame>, <frameset>, <isindex>, <keygen>, <listing>, <marquee>, <menuitem>, <multicol>, <nextid>, <noembed>, <noframes>, <plaintext>, <rb>, <rtc>, <strike>, <tt>, <xmp>`


## 4. Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01? 
__DTD (Document Type Definition)__ es una especificación que describe la estructura y los elementos que se pueden usar en un documento HTML o XML. El DTD se utiliza para validar documentos HTML y asegurarse de que cumplan con las normas y estándares de HTML.
En la especificación de HTML 4.01, se contemplan tres tipos de DTD:
1. Strict DTD: Este DTD es el más restrictivo y se utiliza para documentos HTML que deben seguir las reglas más estrictas y no permitir ningún tipo de elemento o atributo que no cumpla con la especificación.

2. Transitional DTD: Este DTD es menos restrictivo que el estricto y se utiliza para documentos HTML que se crearon antes de que se publicara la especificación de HTML 4.01. Este DTD permite algunos elementos y atributos que ya no se usan en la versión actual de HTML, pero que se mantienen para garantizar la compatibilidad con los documentos antiguos.

3. Frameset DTD: Este DTD es específico para documentos HTML que utilizan framesets (marcos) y se utiliza para validar documentos que contienen marcos en su estructura.

Es importante señalar que con la evolución de los estándares web, el uso de DTD ha ido disminuyendo en favor de otras formas de validación y estructuración de documentos HTML, como por ejemplo el uso de esquemas XML o la validación mediante el uso de JavaScript o CSS.


## 5. Qué son los metadatos y cómo se especifican en HTML?
Los metadatos son información adicional que se utiliza para describir y etiquetar otros datos. En el contexto de la web, los metadatos se refieren a la información que se proporciona en una página web para ayudar a los motores de búsqueda, redes sociales y otros servicios en línea a comprender y organizar el contenido de la página.
Algunos ejemplos de metadatos comunes en una página web son:
* Título de la página: El título de la página aparece en la pestaña del navegador y en los resultados de búsqueda. Es importante que sea descriptivo y contenga palabras clave relevantes.
* Descripción de la página: Una breve descripción del contenido de la página que se utiliza en los resultados de búsqueda y en las vistas previas en redes sociales. Debe ser clara y concisa.
* Palabras clave: Las palabras clave son términos relevantes que se utilizan para etiquetar el contenido de la página y ayudar a los motores de búsqueda a clasificarla en los resultados.
* Autor: El nombre del autor o creador de la página.
* Fecha de publicación: La fecha en que se publicó la página.
* Idioma: El idioma en que está escrito el contenido de la página.  
  
Los metadatos se agregan a la página mediante el uso de etiquetas HTML específicas, como `<title>, <meta name="description"> y <meta name="keywords">`. Los metadatos pueden mejorar la visibilidad y el posicionamiento de una página en los resultados de búsqueda, así como mejorar la accesibilidad y la usabilidad para los usuarios.

Para indicar este dato en el HTML se utiliza la etiqueta 'meta', la cual debe estar dentro de 'head' al inicio del codigo.
```html

<head>
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
```