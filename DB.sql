/*Desarrollar en Laravel, Symfony o .NET, con una base de datos MySQL o SQL Server, el siguiente sistema de información:

Se requiere un sistema que les permita a los estudiantes agendar las clases impartidas por los profesores de una materia determinada.  Los requerimientos a desarrollar son los siguientes:

a) Formulario de profesores. Debe solicitar la siguiente información:

Documento (numérico, obligatorio)
Nombre completo (varchar[100], obligatorio)
Teléfono (varchar [15], obligatorio)
Dirección (varchar [100], no obligatorio)

La funcionalidad debe permitir: crear, borrar y consultar.


b) Formulario de administración de estudiante. Debe solicitar la siguiente información:

Documento (numérico, obligatorio)
Nombre completo (varchar[100], obligatorio)
Teléfono (varchar [15], obligatorio)

La funcionalidad debe permitir: crear, borrar y consultar.


c) Formulario de administración de materias. Debe solicitar la siguiente información:

Código (numérico, obligatorio)
Nombre (varchar [100], obligatorio)
Fecha y hora inicial (datetime, obligatorio)
Fecha y hora final (datetime, obligatorio)
Limite estudiantes (numérico, obligatorio)
Profesor (numérico, obligatorio) 
La funcionalidad debe permitir: crear, borrar y consultar.


d) Formulario de administración de asignación materias. Debe solicitar la siguiente información:

Materia (numérico, obligatorio)
Estudiante (numérico, obligatorio)

La funcionalidad debe permitir: crear, borrar y consultar.
*/


CREATE DATABASE escuela;
USE escuela;

create table profesores(
    id_profesor INT NOT NULL auto_increment PRIMARY KEY,
    documento INT NOT NULL, 
    nombre VARCHAR(100) NOT NULL,     
    telefono VARCHAR(15) NOT NULL, 
    direccion  VARCHAR(100) NOT NULL
);

create table estudiante (
    id_estudiante INT NOT NULL auto_increment PRIMARY KEY,
    documento_estudiante INT NOT NULL, 
    nombre_estudiante VARCHAR(100) NOT NULL,     
    telefono_estudiante VARCHAR(15) NOT NULL 
);

create table materias (    
    codigo INT NOT NULL auto_increment PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    Fecha_y_hora_inicial datetime NOT NULL,
    Fecha_y_hora_final datetime NOT NULL, 
    Limite_estudiantes INT NOT NULL,
    Profesor INT NOT NULL
);

create table asignación_materias(
    Materia INT NOT NULL,
    Estudiante INT NOT NULL
);


