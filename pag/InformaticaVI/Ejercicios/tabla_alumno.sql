create table alumno(
idalumno integer,
nocta char(10) NOT NULL,
noalumno varchar(30) NOT NULL,
appaterno varchar(30) NOT NULL,
apmaterno varchar(30)
);
alter table alumno add constraint pk_alumno primary key (idalumno);