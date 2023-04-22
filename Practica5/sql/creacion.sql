/*creación de BD */
CREATE DATABASE login;
USE login;
/*Creación de tablas*/
CREATE TABLE usuarios(
    id_usuario INT AUTO_INCREMENT,
    nombre VARCHAR(40) NOT NULL ,
    pass varchar(255) NOT NULL,
        CONSTRAINT usuarios_pk primary key (id_usuario),
    constraint usuarios_uk1 unique (nombre)


);
CREATE TABLE listas(
    id_tarea INT AUTO_INCREMENT,
    tarea VARCHAR(120) NOT NULL ,
    id_usuario INT,
    CONSTRAINT listas_pk primary key (id_tarea),
    CONSTRAINT listas_fk1 FOREIGN KEY (id_usuario)
        REFERENCES usuarios(id_usuario)
);
/*creación de usuario de mysql y permisos */
CREATE USER login@localhost identified by 'login';
GRANT SELECT,UPDATE,DELETE,INSERT on login.* to login@localhost;
/*insercción de usuarios*/
INSERT INTO usuarios ( nombre, pass) VALUES ( 'miguel', 'miguel');
INSERT INTO usuarios ( nombre, pass) VALUES ( 'root', 'root');
INSERT INTO usuarios ( nombre, pass) VALUES ( 'admin', 'admin');
INSERT INTO usuarios ( nombre, pass) VALUES ( 'jorge', 'jorge');
INSERT INTO usuarios ( nombre, pass) VALUES ( 'elsa', 'elsa');
/*insercción de tareas*/
INSERT INTO listas ( tarea,id_usuario ) VALUES ( 'hacer ejercicios de php', '1');
INSERT INTO listas ( tarea,id_usuario ) VALUES ( ' hacer la comida ', '2');
INSERT INTO listas ( tarea,id_usuario ) VALUES ( ' hacer la cena ', '3');
INSERT INTO listas ( tarea,id_usuario ) VALUES ( ' comprar Pan ', '4');
INSERT INTO listas ( tarea,id_usuario ) VALUES ( ' dormir ', '5');