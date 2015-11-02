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

--Create Academic Careers table
CREATE TABLE academicCareers(
	requestID BIGINT PRIMARY KEY,
	ugrd bit NOT NULL DEFAULT '0',
	grad bit NOT NULL DEFAULT '0',
	med bit NOT NULL DEFAULT '0',
	vetMed bit NOT NULL DEFAULT '0',
	law bit NOT NULL DEFAULT '0',
	FOREIGN KEY (requestID) REFERENCES AccessZou.request(requestID)
	);

--Create Student Records table
CREATE TABLE studentRecords(
	requestID BIGINT PRIMARY KEY,
	basicInquiryView bit NOT NULL DEFAULT '0',
	advancedInquiryView bit NOT NULL DEFAULT '0',
	advancedInquiryUpdate bit NOT NULL DEFAULT '0',
	threeCsView bit NOT NULL DEFAULT '0',
	threeCsUpdate bit NOT NULL DEFAULT '0',
	advisorUpdate bit NOT NULL DEFAULT '0',
	departmentSOCUpdate bit NOT NULL DEFAULT '0',
	serviceIndicatorsView bit NOT NULL DEFAULT '0',
	serviceIndicatorsUpdate bit NOT NULL DEFAULT '0',
	studentGroupView bit NOT NULL DEFAULT '0',
	studyListView bit NOT NULL DEFAULT '0',
	registerEnrollmentView bit NOT NULL DEFAULT '0',
	registerEnrollmentUpdate bit NOT NULL DEFAULT '0',
	advisorStudentCenterView bit NOT NULL DEFAULT '0',
	classPermissionView bit NOT NULL DEFAULT '0',
	classPermissionUpdate bit NOT NULL DEFAULT '0',
	classRosterView bit NOT NULL DEFAULT '0',
	blockEnrollmentsView bit NOT NULL DEFAULT '0',
	blockEnrollmentsUpdate bit NOT NULL DEFAULT '0',
	reportManagerView bit NOT NULL DEFAULT '0',
	selfServiceAdvisorUpdate bit NOT NULL DEFAULT '0',
	fiscalOfficerView bit NOT NULL DEFAULT '0',
	acadmenicAdvisingProfileUpdate bit NOT NULL DEFAULT '0',
	FOREIGN KEY (requestID) REFERENCES AccessZou.request(requestID)
	);
