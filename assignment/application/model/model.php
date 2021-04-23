<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./assets/db/data.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn);
			$this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo 'Database connection created!';
		}
		catch (PDOEXception $e) {
			echo "I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	//Creates all the tables in succession
	public function dbCreateTables()
	{
		$returnstr = "";
		$returnstr += dbCreateHomeTable();
		$returnstr += dbCreateModelTable();
		$returnstr += dbCreateMiscTable();
		$this->dbhandle = NULL;
		return $returnstr;
	}

	//Creating the Table Home for the Homepage content
	private function dbCreateHomeTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Home (  ". 
									"ID	INTEGER NOT NULL UNIQUE, " .
									"Title	TEXT NOT NULL, " .
									"Subtitle	TEXT NOT NULL, " .
									"Paragraph	TEXT NOT NULL, " . 
									"PRIMARY KEY('ID' AUTOINCREMENT) );");
			return "Home table is successfully created inside data.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
	}

	//Creating the Table Model for the Modelpage content
	private function dbCreateModelTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Models ( " .
				"ID	INTEGER NOT NULL UNIQUE, " .
				"Brand	TEXT NOT NULL, " .
				"x3dTitle	TEXT NOT NULL, " .
				"x3dMethod	TEXT NOT NULL, " . 
				"HomeID	INTEGER NOT NULL, " .
				"FOREIGN KEY('HomeID') REFERENCES Home('ID') ON UPDATE CASCADE, " .
				"PRIMARY KEY('ID' AUTOINCREMENT));");
			return "Model table is successfully created inside data.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
	}

	//Creating the Table Model for the Modelpage content
	private function dbCreateMiscTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Misc ( " . 
				"ID	INTEGER NOT NULL UNIQUE, " .
				"GalleryTitle	TEXT NOT NULL, " .
				"GalleryText	TEXT NOT NULL, " .
				"CameraTitle	TEXT NOT NULL, " .
				"CameraText	TEXT NOT NULL, " .
				"AnimationTitle	TEXT NOT NULL, " .
				"AnimationText	TEXT NOT NULL, " .
				"RenderTitle	TEXT NOT NULL, " .
				"RenderText	TEXT NOT NULL, " .
				"PRIMARY KEY('ID' AUTOINCREMENT));");
			return "Misc table is successfully created inside data.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
	}

	//Inserts all data required in sucession
	public function dbInsertData()
	{
		$jsondata = file_get_contents("assets/db/data.json");
		var_dump($jsondata);
	}

	private function dbInsertHomeData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Home (Title, Subtitle, Paragraph) 
				VALUES ('X3D Coke Model', 'string_2', 'string_3'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'X3D Sprite Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'X3D Pepper Model', 'string_2', 'string_3','string_4','string_5'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	private function dbInsertModelData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'X3D Coke Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'X3D Sprite Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'X3D Pepper Model', 'string_2', 'string_3','string_4','string_5'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Model_3D';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
}
?>