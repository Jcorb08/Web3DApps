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
	function __construct($pageURI = null, $parameter = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI($parameter);
	}
    // home page function
	function home()
	{
		// load php file for homepage
		$this->load->view('homepage');
	}

	function getHomeData()
	{
		// get text data for cards
		$data = $this->model->dbGetHomeData();
		echo json_encode($data);
	}

	function getMiscData()
	{
		// get text data for MiscItems on model page
		$data = $this->model->dbGetMiscData();
		echo json_encode($data);
	}

	function getModelData($modelName){
		echo "model name " . $modelName;
		// calls function dependant on model (parameter?)
		$data = $this->model->dbGetModelData($modelName);
		echo json_encode($data);
	}

	function test()
	{
		$this->load->view('test');
	}

	function dbCreateTables()
	{
		$data = $this->model->dbCreateTables();
		$this->load->view('createTables', $data);
	}
	function dbInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('insertData', $data);
	}  
	function dbGetAllData()
	{
		$data = $this->model->dbGetAllData();
		$this->load->view('viewTables', $data);
	}  
	function dbGetHomeData()
	{
		$data = $this->model->dbGetHomeData();
		$this->load->view('viewTables', $data);
	}
	function dbGetMiscData()
	{
		$data = $this->model->dbGetMiscData();
		$this->load->view('viewTables', $data);
	}
	function dbGetModelsData()
	{
		$data = $this->model->dbGetModelsData();
		$this->load->view('viewTables', $data);
	}

}
?>    