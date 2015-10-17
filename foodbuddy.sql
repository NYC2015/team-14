CREATE DATABASE IF NOT EXISTS endhunger_db ;
USE endhunger_db ;


CREATE TABLE IF NOT EXISTS receiver (
	receiver_id INT PRIMARY KEY AUTO_INCREMENT,
	SNAP_id TEXT,
	username_receiver TEXT NOT NULL,
	password_receiver TEXT NOT NULL,
	SNAP_plan TEXT NOT NULL,
	account_balance INT NOT NULL,
	fname TEXT,
	lname TEXT
) ;

CREATE TABLE IF NOT EXISTS food (
	donation_id INT PRIMARY KEY AUTO_INCREMENT,
	weight INT NOT NULL,
	type TEXT NOT NULL,
	name TEXT NOT NULL,
	safe_by_date DATETIME NOT NULL
) ;

CREATE TABLE IF NOT EXISTS dietary_prefs (
	receiver_id INT PRIMARY KEY AUTO_INCREMENT,
	preferences SET('vegan', 'vegetarian', 'dairy free', 'kosher', 'gluten free', 'low carb', 'paleo', 'n/a')
) ;

CREATE TABLE IF NOT EXISTS health_restrictions (
	receiver_id INT PRIMARY KEY AUTO_INCREMENT,
	restrictions SET('celiacs disease', 'diabetes', 'crohns disease', 'colitis', 'hypoglycemia', 'irrtable bowel syndrome', 'N.A.')
) ;

CREATE TABLE IF NOT EXISTS reserve (
	order_num INT PRIMARY KEY AUTO_INCREMENT,
	receiver_id TEXT,
	donation_id INT,
	order_exp_time DATETIME NOT NULL,
	quantity INT NOT NULL
) ;

CREATE TABLE IF NOT EXISTS vendor (
	vendor_store_id INT PRIMARY KEY AUTO_INCREMENT,
	username_vendor TEXT NOT NULL,
	password_vendor TEXT NOT NULL,
	vendor_name TEXT,
	coordinates_lat DOUBLE NOT NULL,
	coordinates_lon DOUBLE NOT NULL,
	approval INT NOT NULL
) ;

CREATE TABLE IF NOT EXISTS ftc (
	user_id_ftc INT PRIMARY KEY AUTO_INCREMENT,
	username_ftc TEXT NOT NULL,
	password_ftc TEXT NOT NULL
) ;

INSERT INTO vendor (username_vendor, password_vendor, vendor_name, coordinates_lat, coordinates_lon, approval)
VALUES ('food store a', '1234', 'best foods', 40.755465, -73.977836, 1) ,
('food store b', '1234', 'best foods too', 40.814434, -73.817171, 1) ;


