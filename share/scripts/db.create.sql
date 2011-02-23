create database sticky;

create user 'stickyemp'@'localhost' identified by 'stickyemp11';

grant all privileges on `sticky`.* to 'stickyemp'@'localhost' with grant option; 

use sticky;

create table gets (
	id MEDIUMINT NOT NULL AUTO_INCREMENT,
	ts_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	valid BOOL NOT NULL,
	app VARCHAR(16),
	uid VARCHAR(64),
	ip VARCHAR(64),
	useragent VARCHAR(255),
	PRIMARY KEY (id)
) ENGINE=MyISAM;