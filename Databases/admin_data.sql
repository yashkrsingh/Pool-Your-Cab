CREATE TABLE ADMIN(
ADMINID INT(5) NOT NULL,
USERNAME VARCHAR(20),
PASSWORD_HASH CHAR(32),
PRIMARY KEY (ADMINID)
);

INSERT INTO ADMIN VALUES('1','admin1','7c6a180b36896a0a8c02787eeafb0e4c');
INSERT INTO ADMIN VALUES('2','admin2','6cb75f652a9b52798eb6cf2201057c73');
INSERT INTO ADMIN VALUES('3','admin3','819b0643d6b89dc9b579fdfc9094f28e');

