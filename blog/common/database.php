<?php
	/*
		create database ouyangta_xukang;
		use ouyangta_xukang;

		create table article (
		id int not null auto_increment primary key,
		user int(4),
		category int(4),
		title varchar(100),
		content longtext,
		keyword varchar(100),
		status int(4),
		addTime datetime
		);

	*/

	define(DATABASE_SERVERNAME, "localhost");
	define(DATABASE_USERNAME, "root");
	define(DATABASE_PASSWORD, "123456");
	define(DATABASE_DATABASE, "ouyangta_xukang");

	class Database{
		private $con = NULL;

		public function connect(){
			$this->con = mysql_connect(DATABASE_SERVERNAME, DATABASE_USERNAME, DATABASE_PASSWORD);
			mysql_query("use ".DATABASE_DATABASE);
			return $this->con;
		}
		
		public function close(){
			mysql_close($this->con);
			$this->con = NULL;
		}
	}
?>