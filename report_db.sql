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

CREATE TABLE users(
	id INT AUTO_INCREMENT,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	role VARCHAR(20) NOT NULL,
	created DATETIME,
	modified DATETIME,
	PRIMARY KEY  (id)
);
