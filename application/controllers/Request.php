<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {
	function getUsers() {
		$users = [
            1 => ['id' => 1, 'name' => 'John', 'email' => 'john@example.com', 'fact' => 'Loves coding'],
            2 => ['id' => 2, 'name' => 'Jim', 'email' => 'jim@example.com', 'fact' => 'Developed on CodeIgniter'],
            3 => ['id' => 3, 'name' => 'Jane', 'email' => 'jane@example.com', 'fact' => 'Lives in the USA', ['hobbies' => ['guitar', 'cycling']]],
        ];

        echo json_encode($users);
	}
}
