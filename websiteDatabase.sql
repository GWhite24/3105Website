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
	description VARCHAR(200) 	NOT NULL,
	poster    	VARCHAR(50) 	NOT NULL,
	rating		INT 			DEFAULT 0,
	ratingCount INT 			DEFAULT 0,
	PRIMARY KEY(movieID)
);

CREATE TABLE reviews(
	username 	INT 		NOT NULL,
	movieID 	INT 		NOT NULL,
	rating		INT 		NOT NULL,
	review 		VARCHAR(200) NOT NULL,
	FOREIGN KEY (userID) REFERENCES userInfo(username),
	FOREIGN KEY (movieID) REFERENCES movies(movieID),
	PRIMARY KEY (userID, movieID)
);

INSERT INTO userInfo(email, username, password, role) VALUES
('test@test.com', 'admin', 'pass', 'admin'),
('test2@test.com', 'user', 'pass', 'user');

GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO spoiled_user@localhost
IDENTIFIED BY 'password';