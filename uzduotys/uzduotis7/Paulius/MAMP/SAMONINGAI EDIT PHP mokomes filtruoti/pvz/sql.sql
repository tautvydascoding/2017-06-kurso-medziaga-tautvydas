create table students
(
  id int(6) unsigned auto_increment primary key,
  first_name varchar(500) not null,
  last_name varchar(500) not null,
  roll_number int(6) not null,
  year varchar(100) not null
)
