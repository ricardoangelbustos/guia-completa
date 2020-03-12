Ejercicio 1: Las marcas

select *
from marcas;

Ejercicio 2: Las categorías

select *
from categorias;

Ejercicio 3: Y finalmente los productos

select *
from productos;

Ejercicio 4: Lo importante de un producto

select nombre, modelo, descripcion, precio, puntuacion
from productos;

Ejercicio 5: Haciendo divisiones

select nombre, precio/puntuacion
from productos;

Ejercicio 6: Solo los baratos

select *
from productos
where precio<1000;

Ejercicio 7: Buscando por texto

select *
from productos
where nombre="Wii";

Ejercicio 8: Rango de precios

select nombre, precio
from productos
where precio between 1000 and 10000;

Ejercicio 9: En un rango o en el top

select nombre, precio, puntuacion
from productos
where precio between 1000 and 10000
or puntuacion>4;

Ejercicio 10: Ordenando clientes

select *
from clientes
order by nombre;

Ejercicio 11: Desempatando por apellido

select *
from clientes
order by nombre, apellido;

Ejercicio 12: Ordenando por edad

select nombre, apellido, telefono, fecha_de_nacimiento
from clientes
where telefono IS NOT NULL
order by fecha_de_nacimiento DESC;

Ejercicio 13: Top 5

select *
from productos
order by puntuacion desc
limit 5;

Ejercicio 14: Top 5, hoja 2

select *
from productos
order by puntuacion desc
limit 5
offset 5;

Ejercicio 15: Los iphones

select *
from productos
where nombre like "%iphone%";

Ejercicio 16: Buscando la letra P

select *
from productos
where nombre like "%p%";

Ejercicio 17: Dos letras P

SELECT *
FROM productos
WHERE nombre LIKE "%p%p%";

Ejercicio 18: Nombre completo

select nombre || " " || apellido as "nombre completo" from clientes;

Ejercicio 19: Productos y marcas

select *
from productos, marcas
where productos.id_marca=marcas.id;

Ejercicio 20: Productos y marcas... lo interesante

select productos.nombre, marcas.nombre
from productos, marcas
where productos.id_marca=marcas.id;

Ejercicio 21: Productos y marcas. Filtrados y ordenados.

select productos.nombre, marcas.nombre, productos.puntuacion, productos.precio
from productos, marcas
where productos.puntuacion>3 and productos.id_marca=marcas.id
order by productos.precio desc;

Ejercicio 22: Las ventas

select clientes.nombre, clientes.apellido, productos.nombre
from clientes, ventas, productos
where ventas.id_producto=productos.id
and ventas.id_cliente=clientes.id;

Fin de archivo
