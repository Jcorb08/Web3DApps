<?php
/*
Some improvements
It would be a good idea to think about creating more controller functions to manipulate the database based on typical CRUD (Create, Read, Update and Delete) functionalities.  For example, think about building controller functions for:
    • Inserting a new field: (i.e. the remaining data elements in your Lab 6 view) as well as other properties
    • Updating a field
    • Getting a single value from a field
    • Getting a single field
    • Getting all fields of the same property, e.g. modelDescriptions.    • …
*/		

// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		// get text data for cards
		//$data = $this->model->homepage_info();
		// load php file for homepage
		$this->load->view('homepage');
	}

	function test()
	{
		$this->load->view('test');
	}

	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  
	
	function dbCreateTable()
	{
		echo "Create Table Function";
	}

	function dbInsertData()
	{
		echo "Data Insert Function";
	}

	function dbGetData()
	{
		echo "Data Read Function";
	}

  

}
?>    