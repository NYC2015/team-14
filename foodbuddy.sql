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
	quantity INT NOT NULL,
	food_category TEXT NOT NULL,
	name TEXT NOT NULL,
	safe_by_date DATETIME NOT NULL
) ;

CREATE TABLE IF NOT EXISTS reserve (
	order_num INT PRIMARY KEY,
	SNAP_id TEXT,
	donation_id INT,
	order_exp_time DATETIME NOT NULL,
	quantity INT NOT NULL
) ;

CREATE TABLE IF NOT EXISTS vendor (
	vendor_store_id INT PRIMARY KEY,
	username_vendor TEXT NOT NULL,
	password_vendor TEXT NOT NULL,
	vendor_name TEXT,
	coordinates_lat DOUBLE NOT NULL,
	coordinates_lon DOUBLE NOT NULL,
	approval BOOLEAN NOT NULL
) ;

CREATE TABLE IF NOT EXISTS ftc (
	user_id_ftc INT PRIMARY KEY AUTO_INCREMENT,
	username_ftc TEXT NOT NULL,
	password_ftc TEXT NOT NULL
)