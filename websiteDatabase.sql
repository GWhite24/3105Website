/********************************
*Spoiled bananas database script
********************************/
DROP DATABASE IF EXISTS movieReviews;
CREATE DATABASE movieReviews;

USE movieReviews;
CREATE TABLE userInfo(
	email 	VARCHAR(50) ,
	username 	VARCHAR(50) NOT NULL,
	password 	VARCHAR(50) NOT NULL,
	userID 		INT 		NOT NULL 	AUTO_INCREMENT,
	birthday 	DATE,
	role 		VARCHAR(50) NOT NULL,
	PRIMARY KEY (userID)
);

CREATE TABLE movies(
	movieID		INT 			NOT NULL 	AUTO_INCREMENT,
	trailer		VARCHAR(50),
	releaseDate	VARCHAR(50),
	director 	VARCHAR(50),
	title		VARCHAR(50) 	NOT NULL,
	description VARCHAR(500) 	NOT NULL,
	poster    	VARCHAR(50) 	NOT NULL,
	rating		INT 			DEFAULT 0,
	ratingCount INT 			DEFAULT 0,
	PRIMARY KEY(movieID)
);

CREATE TABLE reviews(
	userID 		INT		NOT NULL,
	movieID 	INT 		NOT NULL,
	rating		INT 		NOT NULL,
	review 		VARCHAR(200) NOT NULL,
	FOREIGN KEY (userID) REFERENCES userInfo(userID),
	FOREIGN KEY (movieID) REFERENCES movies(movieID),
	PRIMARY KEY (userID, movieID)
);

INSERT INTO userInfo(email, username, password, role) VALUES
('test@test.com', 'admin', 'pass', 'admin'),
('test2@test.com', 'user', 'pass', 'user');

INSERT INTO movies(trailer, releaseDate, director, title, description, poster) VALUES
('https://www.youtube.com/watch?v=frRFOrbPfNc', 'February 12, 2016', 'Tim Miller', 'Deadpool', 'Wade Wilson (Ryan Reynolds) is a former Special Forces operative who now works as a mercenary. His world comes crashing down when evil scientist Ajax (Ed Skrein) tortures, disfigures and transforms him into Deadpool. The rogue experiment leaves Deadpool with accelerated healing powers and a twisted sense of humor. With help from mutant allies Colossus and Negasonic Teenage Warhead (Brianna Hildebrand), Deadpool uses his new skills to hunt down the man who nearly destroyed his life.', 'https://upload.wikimedia.org/wikipedia/en/4/46/Deadpool_poster.jpg');

GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO spoiled_user@localhost
IDENTIFIED BY 'password';