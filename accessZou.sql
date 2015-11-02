--Makes Clean
DROP SCHEMA IF EXISTS AccessZou CASCADE;

--Set path
CREATE SCHEMA AccessZou;
SET search_path = AccessZou;

--Create User table
CREATE TABLE user(
	userSSO varchar(6) NOT NULL PRIMARY KEY,
	employeeID int NOT NULL,
	fname varchar(15) NOT NULL,
	lname varchar(25) NOT NULL,
	title varchar(25) NOT NULL,
	address varchar(40) NOT NULL,
	ferpaScore smallint NOT NULL
	);

--Create Request table
CREATE TABLE request(
	requestID SERIAL PRIMARY KEY,
	userSSO varchar(6) NOT NULL,
	requestDescription varchar(100) NOT NULL DEFAULT '',
	pathHash varchar(50) NOT NULL,
	FOREIGN KEY (userSSO) REFERENCES AccessZou.user(userSSO)
	);