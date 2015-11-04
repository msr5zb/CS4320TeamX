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

--Create Admissions table
CREATE TABLE admissions(
	requestID BIGINT PRIMARY KEY,
	act bit NOT NULL DEFAULT '0',
	sat bit NOT NULL DEFAULT '0',
	gre bit NOT NULL DEFAULT '0',
	gmat bit NOT NULL DEFAULT '0',
	tofel bit NOT NULL DEFAULT '0',
	ielts bit NOT NULL DEFAULT '0',
	lsat bit NOT NULL DEFAULT '0',
	mcat bit NOT NULL DEFAULT '0',
	ap bit NOT NULL DEFAULT '0',
	clep bit NOT NULL DEFAULT '0',
	ged bit NOT NULL DEFAULT '0',
	millers bit NOT NULL DEFAULT '0',
	prax bit NOT NULL DEFAULT '0',
	plamu bit NOT NULL DEFAULT '0',
	base bit NOT NULL DEFAULT '0',
	FOREIGN KEY (requestID) REFERENCES AccessZou.request(requestID)
	);

--Create Reserved table
CREATE TABLE reserved(
	requestID BIGINT PRIMARY KEY,
	immunizationView bit NOT NULL DEFAULT '0',
	immunizationUpdate bit NOT NULL DEFAULT '0',
	transferCreditAdmissionView bit NOT NULL DEFAULT '0',
	transferCreditAdmissionUpdate bit NOT NULL DEFAULT '0',
	relationshipsView bit NOT NULL DEFAULT '0',
	relationshipsUpdate bit NOT NULL DEFAULT '0',
	studentGroupsView bit NOT NULL DEFAULT '0',
	studentGroupsUpdate bit NOT NULL DEFAULT '0',
	accommodateSHealthUpdate bit NOT NULL DEFAULT '0',
	supportStaffView bit NOT NULL DEFAULT '0',
	supportStaffUpdate bit NOT NULL DEFAULT '0',
	advanceStandingReportView bit NOT NULL DEFAULT '0',
	advanceStandingReportUpdate bit NOT NULL DEFAULT '0',
	FOREIGN KEY (requestID) REFERENCES AccessZou.request(requestID)
	);

--Create Student Financial Cashier Table
CREATE TABLE studentFinancialCashier(
	requestID BIGINT PRIMARY KEY,
	generalInquiryView bit NOT NULL DEFAULT '0',
	cashGroupPostView bit NOT NULL DEFAULT '0',
	cashGroupPostUpdate bit NOT NULL DEFAULT '0',
	FOREIGN KEY (requestID) REFERENCES AccessZou.request(requestID)
	);

--Create Student Financial Aid table
CREATE TABLE studentFinancialAid(
	requestID BIGINT PRIMARY KEY,	
	cashView bit NOT NULL DEFAULT '0',
	nonFinancialAidStaff bit NOT NULL DEFAULT '0',
	FOREIGN KEY (requestID) REFERENCES AccessZou.request(requestID)
	);