CREATE TABLE CAB(
CAB_NUMBER VARCHAR(10) NOT NULL,
CAB_CARTYPE VARCHAR(10) NOT NULL,
CAB_RATE FLOAT(4,2) NOT NULL,
ALLOCATION CHAR(1) NOT NULL DEFAULT 'N',
PRIMARY KEY (CAB_NUMBER)
);

INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('DL1CAF3026','SEDAN','15.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('DL1B8Q7156','SEDAN','15.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('UP9VNF8626','SEDAN','15.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('UP4ERF2226','SEDAN','15.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('HR5FGF3698','SEDAN','15.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('DL4CAF4758','MINI','09.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('DL6DSW7651','MINI','09.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('DL3EFB5423','MINI','09.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('DL7SCS9652','MINI','09.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('HR3BED1458','MINI','09.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('HR5BFN5124','MINI','09.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('UP8FBY3698','MINI','09.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('UP2AFD3218','MINI','09.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('UP7CFH3625','MINI','09.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('UP6CFH3500','SUV','20.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('UP2DPM1705','SUV','20.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('DL3XPL5112','SUV','20.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('HR9SBT0140','SUV','20.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('DL7NTF3240','TRAVELLER','30.50');
INSERT INTO CAB (CAB_NUMBER,CAB_CARTYPE,CAB_RATE) VALUES('UP1GRD4690','TRAVELLER','30.50');