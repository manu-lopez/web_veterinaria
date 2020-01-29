# Proyecto Web Veterinaria - DIW

### Ejecutar Docker

Primero creamos la imagen con PHP y Apache. (Ejecutar donde se encuentra el archivo Dockerfile)

`docker build -t php_apache .`

Luego podemos arrancar un contenedor

`docker run -d --name mis_huellitas -p 80:80 php_apache`

