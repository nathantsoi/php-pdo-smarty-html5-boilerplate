create database $$$DbName$$$;

create user '$$$DbUser$$$'@'localhost' identified by '$$$DbPass$$$';

grant all privileges on `$$$DbName$$$`.* to '$$$DbUser$$$'@'localhost' with grant option; 

use $$$DbName$$$;

create table $$$SomeTable$$$ (
	id MEDIUMINT NOT NULL AUTO_INCREMENT,
	ts_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	valid BOOL NOT NULL,
	somedata VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=MyISAM;
