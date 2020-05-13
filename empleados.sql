CREATE DATABASE empleados;

USE empleados;

CREATE TABLE Empleados (ID_Empleado INT PRIMARY KEY NOT NULL, Nombre VARCHAR(15), Apellidos VARCHAR(25), Sueldo int, Puesto VARCHAR(20) );

insert into empleados values (1, "Juan", "Marín Robles",50000,"Administrador");
insert into empleados values (2, "Ana", "Lugo Romero",35000,"Reclutador");
insert into empleados values (3, "Maria","De la Cruz Ruiz", 10000, "Limpieza");

  
