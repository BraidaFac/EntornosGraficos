## Ejercicio 5

# 1. Los textos enfatizados dentro de cualquier título deben ser rojos.

```html
h1,h2,h3,h4,h5,h6 strong{ color:red; }
```

# 2. Cualquier elemento que tenga asignado el atributo "href" y que esté dentro de cualquier párrafo que a su vez esté dentro de un bloque debe ser color negro.

```html
div p *[href]{ color:black; }
```

# 3. El texto de las listas no ordenadas que estén dentro del bloque identificado como “ultimo” debe ser amarillo pero si es un enlace a otra página debe ser azul.

```
#ultimo ul{
    color:yellow;
}
#ultimo ul a{
    color:blue;
}
```

# 4. Los elementos identificados como “importante” dentro de cualquier bloque deben ser verdes, pero si están dentro de un título deben ser rojos.

```html
#importante{ color:green; } h1#importante, h2#importante, h3#importante,
h4#importante, h5#importante, h6#importante { color: red; }
```

# 5. Todos los elementos h1 que especifique el atributo title, cualquiera que sea su valor, deben ser azules.

````

```html
h1[title]{ color:blue; }
````

# 6. El color de los enlaces en las listas ordenadas debe ser azul para los enlaces aún no visitados, y violeta para los ya visitados y, además, no deben aparecer subrayados.

ol a:link{
color:blue
}
ol a:visited {
text-decoration:none;
color:violet
}
