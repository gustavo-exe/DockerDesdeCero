# Mi primera imagen de docker

# Sirve para indicar que se va desarrollar una imagen basda en otras
FROM ubuntu 

#Ejecutar comandos en la contruccion
RUN apt-get update
RUN apt-get install python3 python3-dev -y
RUN apt-get install postgresql-client -y 
RUN mkdir /app

#Directorio de trabajo
WORKDIR /app

#Variables de ambiente
ENV MSG='Saludos a todos'

#copiar archivos a mi contenedor
ADD index.html .

#Ejecutar comandos cuando este corriendo
CMD python3 -m http.server 5000
EXPOSE 5000