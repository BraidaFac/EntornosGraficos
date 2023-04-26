## Ejercicio 3

```
p.quitar {
    color: red;
}
*.desarrollo {
    font-size: 8px;
}
.importante {
    font-size: 20px;
}
<p class="desarrollo">
    En este primer párrafo trataremos lo siguiente:
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="quitar">
    Este párrafo debe ser quitado de la obra…
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p >
    En este otro párrafo trataremos otro tema:<br />
    xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<p class="importante">
    Y este es el párrafo más importante de la obra…
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx
</p>
<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1>
<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
```

1. `p.quitar`:Esta regla se aplicara a los elementos parrafo (`<p></p>`) que tengan el atributo de clase `class='quitar'`.
   - `color: red`: define el color de texto en rojo.
2. `*.desarrollo`: Esta regla se aplicara a cualquier elemento del html con la clase desarrollo, independientemente de su tipo.
   - `font-size: 8px`: define el tamaño de la fuente en 8 pixeles.
3. `.importante`: esta regla se aplicara a cualquier elemento que tenga el atributo clase `class='importante'`.
   - `font-size: 20px`: define el tamaño de la fuente en 20 pixeles.

En el caso del p, al tener definidas dos clases ("quitar" e "importante"), se aplicaran los efectos de ambas. En el caso que la clase importante y la clase quitar definan la misma propiedad css, en el elemento se aplicarian los valores de la clase que se detallo ultimo. Es decir si por ejemplo

```css
.importante {
  color: red;
}
.quitar {
  color: green;
}
```

En este caso el color que tendra el parraffo sera verde ya que se definio como ulimo la clase .quitar
