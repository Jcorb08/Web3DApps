<?php
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
		// parameter passed if method has no parameter it is ignored
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
		//echo "model name " . $modelName;
		// calls function dependant on model
		$data = $this->model->dbGetModelData($modelName);
		echo json_encode($data);
	}

	// test
	function test()
	{
		$this->load->view('test');
	}

	// creating all tables
	function dbCreateTables()
	{
		$data = $this->model->dbCreateTables();
		$this->load->view('createTables', $data);
	}

	// inserting all data
	function dbInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('insertData', $data);
	}  

	// getting all data
	function dbGetAllData()
	{
		$data = $this->model->dbGetAllData();
		$this->load->view('viewTables', $data);
	}  

	// getting just home table data
	function dbGetHomeData()
	{
		$data = $this->model->dbGetHomeData();
		$this->load->view('viewTables', $data);
	}

	// getting just misc table data
	function dbGetMiscData()
	{
		$data = $this->model->dbGetMiscData();
		$this->load->view('viewTables', $data);
	}
	
	// getting just models table data
	function dbGetModelsData()
	{
		$data = $this->model->dbGetModelsData();
		$this->load->view('viewTables', $data);
	}

}
?>    