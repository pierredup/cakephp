<?php
/**
 * Short description for file.
 *
 * PHP 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/view/1196/Testing>
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/view/1196/Testing CakePHP(tm) Tests
 * @package       cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.4667
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Short description for class.
 *
 * @package       cake.tests.fixtures
 */
class SessionFixture extends CakeTestFixture {

/**
 * name property
 *
 * @var string 'Session'
 * @access public
 */
	public $name = 'Session';

/**
 * table property.
 *
 * @var string
 */
	// public $table = 'sessions';

/**
 * fields property
 *
 * @var array
 * @access public
 */
	public $fields = array(
		'id' => array('type' => 'string', 'length' => 128, 'key' => 'primary'),
		'data' => array('type' => 'text','null' => true),
		'expires' => array('type' => 'integer', 'length' => 11, 'null' => true)
	);

/**
 * records property
 *
 * @var array
 * @access public
 */
	public $records = array();
}