<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class EmployeeModel extends CI_Model {
	public function employeeList() {
		$this->db->select(array('id', 'name', 'email', 'phonenumber', 'password',));
		$this->db->from('user');
		$this->db->limit(20);  
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>