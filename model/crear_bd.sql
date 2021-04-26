create database if not exists toposicionesDB;
use toposicionesDB;
create table if not exists category(
  categoryId int not null auto_increment,
  nombre varchar(50) not null,
  nacionalidad varchar(50) not null,
  primary key (directorId)
);

create table if not exists forum_post(
  postId int not null auto_increment,
  userId int not null,
  title varchar(50) not null,
  content LONGTEXT DEFAULT null,
  created_at datetime NOT NULL,
  primary key (postId),
  foreign key (userId) REFERENCES user(userId)
);

create table if not exists forum_message(
  postId int not null,
  messageId int not null auto_increment,
  userId int not null,
  content LONGTEXT DEFAULT null,
  created_at datetime NOT NULL,
  primary key (messageId),
  foreign key (postId) REFERENCES forum_post(postId),
  foreign key (userId) REFERENCES user(userId)
);

create table if not exists pelicula(
  peliculaId int not null auto_increment,
  titulo varchar(50) not null,
  director int not null,
  duracion int not null,
  primary key (peliculaId),
  foreign key (director) REFERENCES director(directorId)
);
-- Directores
insert into director
values (null, "Tim Burton", "Estadounidense"),
  (null, "Tarantino", "Estadounidense"),
  (null, "Christopher Nolan", "Inglés");
-- Peliculas
insert into pelicula
values (null, "Big Fish", 1, 101),
  (null, "El planeta de los simios", 1, 106),
  (null, "Pulp Fiction", 2, 109),
  (null, "Django desencadenado", 3, 125),
  (null, "Origen", 3, 114),
  (null, "Interestellar", 3, 119);
-- Consultas
select *
from pelicula;
select titulo
from pelicula,
  director
where pelicula.director = director.directorId
  and director.nombre = "Tim Burton";
select titulo
from pelicula
where pelicula.duracion > 100
  and pelicula.duracion < 110;
delete from pelicula
where titulo = "Big Fish";
update pelicula
set duracion = 100
where titulo = "Interestellar";
select *
from pelicula;