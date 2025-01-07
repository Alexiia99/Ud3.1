# Usar la imagen oficial de MariaDB
FROM mariadb:latest

# Configurar las variables de entorno para el contenedor
ENV MARIADB_ROOT_PASSWORD=m1_s3cr3t
ENV MARIADB_DATABASE=test1
ENV MARIADB_USER=ig
ENV MARIADB_PASSWORD=m1_s3cr3t

# Exponer el puerto 3306 para MariaDB
EXPOSE 3306

# Comando de inicio del servidor MariaDB
CMD ["mariadbd"]
