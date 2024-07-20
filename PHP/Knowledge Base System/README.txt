Create Databases:

Tables - Accounts, articles

Accounts - 
id INT(11) AUTO_INCREMENT,
name VARCHAR(255),
username VARCHAR(255),
email VARCHAR(255),
password VARCHAR(255),
createDate TIME_STAMP(6)

Articles - 
id INT(11) AUTO_INCREMENT,
username VARCHAR(255),
title VARCHAR(255),
arttext VARCHAR(1500),
createDate TIME_STAMP(6),
liked INT(11),
disliked INT(11),
last_update TIME_STAMP(6)
