<?php

/**
 * Created by PhpStorm.
 * User: andy
 * Date: 8/2/16
 * Time: 11:21 AM
 */
class Database {
	private $user = 'root';
	private $password = '';
	private $db = 'mdb';
	private $host = 'localhost';
	private $port = 3306;
	private $link, $con;

	/**
	 * Database constructor.
	 *
	 * @param string $user
	 * @param string $password
	 * @param string $db
	 * @param string $host
	 * @param int    $port
	 */
	/*public function __construct($user, $password, $db, $host, $port)
	{
		$this->user = $user;
		$this->password = $password;
		$this->db = $db;
		$this->host = $host;
		$this->port = $port;
	}*/

	public function connect() {
		$this->link = mysqli_init();
		$this->con  = mysqli_connect( $this->host, $this->user, $this->password, $this->db, $this->port );
	}

	public function close() {
		mysqli_close( $this->link );
	}

	public function create_part() {
		$sql = "CREATE TABLE `phpbom`.`part` ( `id` INT NOT NULL AUTO_INCREMENT , 
                `name` VARCHAR(255) NOT NULL , `des` VARCHAR(255) NOT NULL , 
                `cost` DECIMAL(7,2) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

		$var = mysqli_query( $this->con, $sql );

		return $var;
	}

	public function insert($name, $des, $cost) {
		$sql = 'INSERT INTO `part` (`id`, `name`, `des`, `cost`) VALUES (
				NULL, 
				\''. $name . '\', 
				\''. $des . '\', 
				
				\'1\')';

		$var = mysqli_query( $this->con, $sql );

		return $var;
	}


}