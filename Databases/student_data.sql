CREATE TABLE STUDENT(
ROLL_NUMBER BIGINT(10) NOT NULL,
YOURNAME VARCHAR(30),
NAME VARCHAR(30) NOT NULL,
PHONE_NUMBER BIGINT(10) NOT NULL,
EMAIL VARCHAR(30) NOT NULL,
USERNAME VARCHAR(5) UNIQUE NOT NULL,
PASSWORD_HASH CHAR(32) NOT NULL,
PRIMARY KEY (ROLL_NUMBER)
);

LOAD DATA LOCAL INFILE '~/Databases/student_data.txt' INTO TABLE STUDENT
FIELDS TERMINATED BY '\t'  LINES TERMINATED BY '\r\n';

DELETE FROM STUDENT WHERE ROLL_NUMBER='0';

ALTER TABLE STUDENT 
DROP COLUMN YOURNAME;