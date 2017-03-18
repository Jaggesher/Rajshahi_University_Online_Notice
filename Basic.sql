
CREATE table user_type(
	ID int PRIMARY KEY,
	CatagoryName varchar(20));

insert into user_type VALUES(1,'Faculty Members');
insert into user_type VALUES(2,'Officers');
insert into user_type VALUES(3,'Student');
insert into user_type VALUES(4,'Staff');
    
CREATE TABLE account(
	ID int AUTO_INCREMENT PRIMARY key,
	UserID varchar(10) NOT NULL  UNIQUE,
	Name varchar(30) not null,
	Pass varchar(30) not null,
	Birth date not null,
	Dept varchar(50) not null,
	Hall varchar(50),
	Type int not null,
    Status varchar(10) not null,
	FOREIGN KEY(Type) REFERENCES user_type(ID));

CREATE TABLE admin_up_table(
	ID int PRIMARY KEY,
	UserID varchar(10) not null,
	Pass varchar(10) not null,
	Name varchar(30) not null,
	Type varchar(10) not null);


CREATE TABLE general_ntc(
    ID int PRIMARY KEY,
    Message varchar(1000) not null,
    StartDat date not null,
    EndDat date not null,
    Type int not null,
    UploaderID int not null,
    FOREIGN KEY(Type) REFERENCES user_type(ID),
    FOREIGN KEY(UploaderID) REFERENCES admin_up_table(ID));


CREATE TABLE admin_ntc(
    ID int PRIMARY KEY,
    Message varchar(1000) not null,
    StartDat date not null,
    EndDat date not null,
    Type int not null,
    UploaderID int not null,
    FOREIGN KEY(Type) REFERENCES user_type(ID),
    FOREIGN KEY(UploaderID) REFERENCES admin_up_table(ID));

CREATE TABLE faculty_ntc(
    ID int PRIMARY KEY,
    Message varchar(1000) not null,
    StartDat date not null,
    EndDat date not null,
    Type int not null,
    Faculty varchar(50) not null,
    Dept varchar(50) not null,
    UploaderID int not null,
    FOREIGN KEY(Type) REFERENCES user_type(ID),
    FOREIGN KEY(UploaderID) REFERENCES admin_up_table(ID));

CREATE TABLE hall_ntc( ID int PRIMARY KEY,
	Message varchar(1000) not null,
	StartDat date not null,
	EndDat date not null,
	Type int not null,
	Hall varchar(50) not null, 
	UploaderID int not null,
    FOREIGN KEY(Type) REFERENCES user_type(ID),
    FOREIGN KEY(UploaderID) REFERENCES admin_up_table(ID));

-- INSERT into admin_up_table VALUES(2,'124','123','jkm','212','upload');
-- INSERT INTO admin_up_table VALUES(1,'14015439','14015439','Shabbir Mahmood','admin');
-- INSERT INTO admin_up_table VALUES(2,'14035440','14035440','Hasnain Mahmud','upload');