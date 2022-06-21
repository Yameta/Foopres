
CREATE TABLE Authorization
(
	ID_Authorization  VARCHAR(255) NOT NULL,
	Forename  VARCHAR(255) NOT NULL,
	Surname  VARCHAR(255) NOT NULL,
	Telephone  VARCHAR(255) NOT NULL,
	Authorization_Email  VARCHAR(255) NOT NULL,
	Company_name  VARCHAR(255) NOT NULL,
	Password  VARCHAR(255) NOT NULL,
	ID_Roles  VARCHAR(255) NULL
)
;



ALTER TABLE Authorization
	ADD  PRIMARY KEY (ID_Authorization)
;



CREATE TABLE Database_of_vacancies
(
	ID_Database_of_vacancies  VARCHAR(255) NOT NULL,
	Vacancy_title  VARCHAR(255) NOT NULL,
	Vacany_description  VARCHAR(255) NULL,
	ID_Authorization  VARCHAR(255) NOT NULL,
	ID_Vacancy_category  VARCHAR(255) NOT NULL
)
;



ALTER TABLE Database_of_vacancies
	ADD  PRIMARY KEY (ID_Database_of_vacancies)
;



CREATE TABLE Desired_work_schedule
(
	ID_Desired_work_schedule  VARCHAR(255) NOT NULL,
	Name_of_the_work_schedule  VARCHAR(255) NOT NULL
)
;



ALTER TABLE Desired_work_schedule
	ADD  PRIMARY KEY (ID_Desired_work_schedule)
;



CREATE TABLE Education
(
	ID_Education  VARCHAR(255) NOT NULL,
	Education_Level  VARCHAR(255) NULL
)
;



ALTER TABLE Education
	ADD  PRIMARY KEY (ID_Education)
;



CREATE TABLE Feedback
(
	ID_Feedback  VARCHAR(255) NOT NULL,
	File  VARCHAR(255) NOT NULL,
	Feedback_Email  VARCHAR(255) NOT NULL,
	ID_Roles  VARCHAR(255) NOT NULL
)
;



ALTER TABLE Feedback
	ADD  PRIMARY KEY (ID_Feedback)
;



CREATE TABLE Resume_database
(
	Work_experience  VARCHAR(255) NOT NULL,
	Desired_salary  VARCHAR(255) NULL,
	ID_Resume_Database  VARCHAR(255) NOT NULL,
	ID_Authorization  VARCHAR(255) NOT NULL,
	ID_Desired_work_schedule  VARCHAR(255) NULL,
	ID_Skills  VARCHAR(255) NOT NULL,
	ID_Education  VARCHAR(255) NOT NULL
)
;



ALTER TABLE Resume_database
	ADD  PRIMARY KEY (ID_Resume_Database)
;



CREATE TABLE Roles
(
	ID_Roles  VARCHAR(255) NOT NULL,
	Role_Name  VARCHAR(255) NOT NULL
)
;



ALTER TABLE Roles
	ADD  PRIMARY KEY (ID_Roles)
;



CREATE TABLE Skills
(
	ID_Skills  VARCHAR(255) NOT NULL,
	Skill_name  VARCHAR(255) NOT NULL
)
;



ALTER TABLE Skills
	ADD  PRIMARY KEY (ID_Skills)
;



CREATE TABLE Vacancy_category
(
	ID_Vacancy_category  VARCHAR(255) NOT NULL,
	Vacancy_category_name  VARCHAR(255) NOT NULL
)
;



ALTER TABLE Vacancy_category
	ADD  PRIMARY KEY (ID_Vacancy_category)
;



ALTER TABLE Authorization
	ADD FOREIGN KEY R_27 (ID_Roles) REFERENCES Roles(ID_Roles)
;



ALTER TABLE Database_of_vacancies
	ADD FOREIGN KEY R_22 (ID_Authorization) REFERENCES Authorization(ID_Authorization)
;


ALTER TABLE Database_of_vacancies
	ADD FOREIGN KEY R_23 (ID_Vacancy_category) REFERENCES Vacancy_category(ID_Vacancy_category)
;



ALTER TABLE Feedback
	ADD FOREIGN KEY R_14 (ID_Roles) REFERENCES Roles(ID_Roles)
;



ALTER TABLE Resume_database
	ADD FOREIGN KEY R_18 (ID_Authorization) REFERENCES Authorization(ID_Authorization)
;


ALTER TABLE Resume_database
	ADD FOREIGN KEY R_19 (ID_Desired_work_schedule) REFERENCES Desired_work_schedule(ID_Desired_work_schedule)
;


ALTER TABLE Resume_database
	ADD FOREIGN KEY R_20 (ID_Skills) REFERENCES Skills(ID_Skills)
;


ALTER TABLE Resume_database
	ADD FOREIGN KEY R_21 (ID_Education) REFERENCES Education(ID_Education)
;


