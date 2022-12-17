# ProyectoTics1-Codigo

## Tecnologias Usadas
- Arduino
- Python
- PHP
- C++
- SQL
- Java

## Programas necesarios para la utilizacion del programa
- Arduino IDE
- Python3
- Xampp

## Uso
- Cargar el sensor.txt en el programa Arduino IDE, conectar el Arduino y cargar el codigo
- Utilizando MySQL del programa XAMPP, crear una tabla a partir de la siguiente consulta "CREATE TABLE sensordata(id int primary key,temperatura float);
- Configurar en serial2sql-master/config.JSON, y en PHP/conexion.PHP los datos segun nuestra base de datos
- Abrir con PytHon serial2sql.py
- Colocar la carpeta PHP en el directorio C:\xampp\htdocs
- Utilizar revisando la pagina http://localhost/php/
