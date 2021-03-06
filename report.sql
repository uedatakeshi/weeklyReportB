CREATE DATABASE report_db DEFAULT CHARACTER SET utf8;
GRANT ALL ON report_db.* TO coedo_user@localhost IDENTIFIED BY 'pass123';

CREATE DATABASE test_report_db DEFAULT CHARACTER SET utf8;
GRANT ALL ON test_report_db.* TO coedo_user@localhost IDENTIFIED BY 'pass123';

CREATE TABLE reports(
	id INT AUTO_INCREMENT,
    report_date DATE,
	employee VARCHAR(255),
    activity TEXT,
    comments TEXT,
	created DATETIME,
	modified DATETIME,
	PRIMARY KEY  (id)
);

engine = InnoDB;

CREATE TABLE employees(
	id INT AUTO_INCREMENT,
    employee_number VARCHAR(255),
	name VARCHAR(255),
	created DATETIME,
	modified DATETIME,
	PRIMARY KEY  (id)
);
