<?php 
	// Declaring 'iModel' interface
	// Defines each one of the methods model.php must implement
	interface iModel{
		// GET
		public function get();
		// POST
		public function post();
		// PUT
		public function put();
		// DELETE
		public function delete();
	}
?>