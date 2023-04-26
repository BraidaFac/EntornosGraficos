## Ejercicio 2

```
p#normal {
    font-family: arial,helvetica;
    font-size: 11px;
    font-weight: bold;
}
*#destacado {
    border-style: solid;
    border-color: blue;
    border-width: 2px;
}
#distinto {
    background-color: #9EC7EB;
    color: red;
}
<p id="normal">Este es un párrafo</p>
<p id="destacado">Este es otro párrafo</p>
<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>
<p id="distinto">Este es el último párrafo</p>
```

1. `p#normal`: esta regla se aplicara a todos los elementos parrafos(`<p>`) que tengan el atributo `id='normal'`, es decir a `<p id="normal">Este es un párrafo</p>`.
   - `font-family: arial,helvetica`: define el tipo de fuente utilizado. En este caso arial y si el navegador no la soporta o no encuentra la fuente usara helvetica.
   - `font-size: 11px`: define el tamaño de la fuente en 11 pixeles.
   - `font-weight: bold`: define el grosor de la fuente. Negrita en este caso.
2. `*#destacado`: esta regla se aplicara a cualquier elemento del html que tenga el atributo `id='destacado'`, osea a `<p id="destacado">Este es otro párrafo</p>` y `<table id="destacado"><tr><td>Esta es una tabla</td></tr></table>`.
   - `border-style: solid`: define el estilo de los bordes del elemento. En este caso solido.
   - `border-color: blue`: define el color de los bordes del elemento. En este caso azul.
   - `border-width: 2px`: define el ancho de los bordes del elemento. En este caso 2 pixeles.
3. `#distinto`: esta regla se aplicara a los elementos que tengan el atributo `id='distinto'`, osea a `<p id="distinto">Este es el último párrafo</p>`.
   - `background-color: #9EC7EB`: define el color del fondo del elemento. En este caso sera un celeste.
   - `color: red`: define el color del texto en rojo.
