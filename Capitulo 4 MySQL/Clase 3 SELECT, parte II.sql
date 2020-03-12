Ejercicio 1: Productos y marcas...de nuevo!

select productos.nombre, marcas.nombre
from productos
inner join marcas on productos.id_marca=marcas.id;

Ejercicio 2: ¿Y si no tienen marca?

select productos.nombre, marcas.nombre
from productos
left join marcas on productos.id_marca=marcas.id;

Ejercicio 3: Filtrados y con marca

select productos.nombre, marcas.nombre
from productos
left join marcas on productos.id_marca=marcas.id
where productos.puntuacion>3;

Ejercicio 4: El doble join

select clientes.nombre, clientes.apellido, productos.nombre
from clientes
left join ventas on id_cliente = clientes.id
left join productos on id_producto = productos.id;


Ejercicio 5: Tres joins?!?!

select clientes.nombre, clientes.apellido, productos.nombre, marcas.nombre
from clientes
left join ventas on id_cliente = clientes.id
left join productos on id_producto = productos.id
left join marcas on id_marca = marcas.id;


Ejercicio 6: Clientes con iphones

select distinct clientes.nombre, clientes.apellido
from clientes
inner join ventas on id_cliente = clientes.id
inner join productos on id_producto = productos.id
where productos.nombre like "iphone%"
order by clientes.apellido asc;

Ejercicio 7: Quitando valores nulos

select nombre, COALESCE(modelo, "No aplica") as modelo
from productos;

Ejercicio 8: TVs por Televisores

select replace(nombre, "TV", "Televisor") as nombre
from productos;

Ejercicio 9: Agregando productos

select 
  count(*) as cantidad, 
  max(puntuacion) as puntuacion_maxima,
  min(precio) as precio_minimo,
  avg(puntuacion) as promedio_puntuacion,
  sum(precio) as suma_precios
from productos;

Ejercicio 10: Cantidad por marca

select marcas.nombre, count(*) as cantidad
from productos
inner join marcas on productos.id_marca=marcas.id
group by marcas.nombre;

Ejercicio 11: Cantidad por marca y categoría

select marcas.nombre, categorias.nombre, count(*) as cantidad
from productos
inner join marcas on productos.id_marca=marcas.id
inner join categorias on productos.id_categoria=categorias.id
group by marcas.nombre, categorias.nombre;

Ejercicio 12: Y el having?

select marcas.nombre, categorias.nombre, count(*) as cantidad
from productos
inner join marcas on productos.id_marca=marcas.id
inner join categorias on productos.id_categoria=categorias.id
group by marcas.nombre, categorias.nombre
having count(*) >=2;

Fin de archivo
