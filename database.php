// --------------------------------- TRAVEL DATABASE STRUCTURE ----------------------------------//

//------------------- Admin Database ------------------//
create table adminMaster(
id int AUTO_INCREMENT PRIMARY key,
admin_name varchar(255),
admin_password varchar(255),
admin_role varchar(255),
admin_Status enum('0','1') default '0',
admin_createdDate datetime,
admin_modifiedDate datetime    
);

//------------------ Real traveller database -----------//

create table realtraveller(
id int auto_increment primary key,
metatag text,
metaDesc longtext,
url text,
name varchar(255),
birthday date,
state int,
city int,
profession text,
travelplace int,
email varchar(255),
mobile int(11),
facebook varchar(255),
instagram varchar(255),
twitter varchar(255),
linkdin varchar(255),
status enum('0','1') default '0',
createdDate datetime,
modifiedDate datetime
);





CREATE PROCEDURE selectRecord
(
	tablename varchar(255)        
)
BEGIN
    SELECT ('*') from tablename;	
END;