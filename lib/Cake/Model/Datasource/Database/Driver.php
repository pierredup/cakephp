<?php

namespace Cake\Model\Datasource\Database;

/**
 * Represents a database diver containing all specificities for
 * a database engine including its SQL dialect
 *
 **/
abstract class Driver {

/**
 * Establishes a conenction to the databse server
 *
 * @param array $config configuretion to be used for creating connection
 * @return boolean true con success
 **/
	public abstract function connect(array $config);

/**
 * Disconnects from database server
 *
 * @return void
 **/
	public abstract function disconnect();

/**
 * Returns wheter php is able to use this driver for connecting to database
 *
 * @return boolean true if it is valid to use this driver
 **/
	public abstract function enabled();

/**
 * Prepares a sql statement to be executed
 *
 * @param string $sql
 * @return Cake\Model\Datasource\Database\Statement
 **/
	public abstract function prepare($sql);

/**
 * Starts a transaction
 *
 * @return boolean true on success, false otherwise
 **/
	public abstract function beginTransaction();

/**
 * Returns whether this driver supports save points for nested transactions
 *
 * @return boolean true if save points are supported, false otherwise
 **/
	public function supportsSavePoints() {
		true;
	}

/**
 * Returns whether this driver supports save points for nested transactions
 *
 * @return boolean true if save points are supported, false otherwise
 **/
	public function savePointSQL($name) {
		return 'SAVEPOINT LEVEL ' . $name;
	}

}