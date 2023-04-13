CREATE DATABASE lista;
use lista;
CREATE TABLE tareas(
    id_tarea INT AUTO_INCREMENT,
    tarea VARCHAR(120) not null ,
    marcado boolean,
    CONSTRAINT lista_pk primary key (id_tarea),
    constraint lista_uk1 unique (tarea)
);
CREATE USER lista@localhost identified by 'lista';
GRANT SELECT,UPDATE,INSERT,DELETE on lista.* to lista@localhost;