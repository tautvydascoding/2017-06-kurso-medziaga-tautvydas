﻿mysql> show databases; //

use duomenuBazesPavadinimas; 

mysql> show tables;


SELECT USER, PASSWORD, password_expired FROM user;
SELECT * FROM user;



 // username - pas kai kuriuos negali tureti skaiciu!!!
 CREATE USER 'tautvydas04'@'localhost' IDENTIFIED BY 'tratata';
 CREATE USER 'tautvydas06'@'localhost' IDENTIFIED BY 'tratata';
 GRANT ALL PRIVILEGES ON * . * TO 'tautvydas04'@'localhost' WITH GRANT OPTION;
 GRANT ALL PRIVILEGES ON * . * TO 'tautvydas06'@'localhost' WITH GRANT OPTION;

 
 
 CREATE DATABASE IF NOT EXISTS `ligonine4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
 
		USER     IF NOT EXISTS 
 CREATE DATABASE IF NOT EXISTS  `hospital6` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci; 
		TABLE    IF NOT EXISTS 

		
		
// ====== naudingos kitos:
// reset autoincreament :
ALTER TABLE tablename AUTO_INCREMENT = 1;   // A) budas
DBCC CHECKIDENT (mytable, RESEED, 0);       // B) budas

//===========pvz============
use duomenuBazesPavadinimas;   // pasikeisti DB  pries kuriant lenteles

 CREATE TABLE IF NOT EXISTS persons (
      id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) not NULL,
      lname VARCHAR(30) NOT NULL
	  );
	  
CREATE TABLE IF NOT EXISTS doctors (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(25) NOT NULL,
	lname VARCHAR(35) NOT NULL
	);

	
CREATE TABLE IF NOT EXISTS skelbimai ( 
     id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
     pavadinimas VARCHAR(30) not NULL,
     data_ VARCHAR(30) NOT NULL,
     email VARCHAR(30) NOT NULL,
     miestas VARCHAR(30) NOT NULL,
     tipas VARCHAR(30) NOT NULL,
     registracija VARCHAR(30) NOT NULL,
     aprasymas VARCHAR(30) NOT NULL,
     unikalus VARCHAR(30) NOT NULL,
     nuoroda VARCHAR(30) NOT NULL,
     telnr VARCHAR(30) NOT NULL,
     laisvas1 VARCHAR(30) NOT NULL,
     laisvas2 VARCHAR(30) NOT NULL
     );
	 
CREATE TABLE IF NOT EXISTS img ( 
     id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(60) not NULL,
     doctor_id INT(6) NOT NULL
     );

	 
	 
	 CREATE TABLE IF NOT EXISTS articles (
	 id INT(8) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
      title VARCHAR(30) not NULL,
      content VARCHAR(255) NOT NULL,
	  date VARCHAR(30) NOT NULL,
	  user_ID VARCHAR(30) NOT NULL
	 );
	 
	 
	 INSERT INTO articles VALUES ('', 'Akistata', 'Kriminalai SUCKS Kriminalai SUCKS Kriminalai 
	 SUCKS Kriminalai SUCKS Kriminalai SUCKS Kriminalai SUCKS  Kriminalai SUCKS ', '2000-02-03', 'Detektyve_Birute');
	 
	 
	 
	 
	 CREATE TABLE IF NOT EXISTS articles;
	 
	 
	 
	 
	 
	 
	 
// -------SQL komandos----------------------
` - geros kabutes
' - geros kabutes
‘  - blogos kabutes    


SELECT column1, column2, ...
FROM table_name
WHERE condition1 AND condition2 AND condition3 ...;
WHERE condition1 OR condition2 OR condition3 ...;
WHERE NOT condition;
WHERE CustomerName LIKE 'a%';  // PRASIDEDA "a" zodis
ORDER BY column1, column2, ... ASC|DESC;
ORDER BY Country ASC, CustomerName DESC;

INSERT INTO table_name
	VALUES (value1, value2, value3, ...);

INSERT INTO Customers (CustomerName, City, Country)
	VALUES ('Cardinal', 'Stavanger', 'Norway');


	
	
	

//-------------DOCTORS----------
INSERT INTO doctors  VALUES  ('', 'Tom', 'Opsa');
INSERT INTO doctors  VALUES  ('', 'Paul', 'Tor');
//-------------PACIENTS---------------
INSERT INTO pacients  VALUES  ('', 'Ari', 'Amon', '3');
INSERT INTO pacients  VALUES  ('', 'Tim', 'Taros', '2');
INSERT INTO pacients  VALUES  ('', 'Ana', 'Tomson', '2');
INSERT INTO pacients  VALUES  ('', 'Tom', 'Alis', '3');
INSERT INTO pacients  VALUES  ('', 'Karis', 'Katis', '1');
INSERT INTO pacients  VALUES  ('', 'Jo', 'Oporas', '5');
//-------------IMG---------------
INSERT INTO img  VALUES  ('', 'pic-46.jpg', '5');
INSERT INTO img  VALUES  ('', 'pic-46.PNG', '1');
INSERT INTO img  VALUES  ('', 'pic-456.jpg', '3');
INSERT INTO img  VALUES  ('', 'pic-4234234.GIF', '2');
INSERT INTO img  VALUES  ('', 'pic-4622.GIF', '4');

// uzduotis 1: istrinti gydytoja "Sara"
// uzduotis 2 : Pakeisti "Timo" varda i "Tomas"
// uzduotis 3 : visu pacientu, kurius vardas prasideda "T" -  daktarus pakeisti i "6"
// uzduotis 4: gauti paciento "Tomo" daktaro pavarde









//=====Ats.:=======
3) sprendimas
UPDATE pacients
  SET doctor_id = 6
  WHERE name like 'T%';

4) sprendimas
SELECT doctors.lname
FROM pacients, doctors
WHERE pacients.name = 'Tom' AND pacients.doctor_id = doctors.id;

// OR

SELECT doctors.lname
FROM doctors
INNER JOIN pacients ON pacients.doctor_id = doctors.id
WHERE pacients.name = 'Tom' AND pacients.password = $pass;
