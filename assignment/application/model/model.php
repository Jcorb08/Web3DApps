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
		$returnstr = $this->dbCreateHomeTable() . " ";
		$returnstr += $this->dbCreateModelTable() . " ";
		$returnstr += $this->dbCreateMiscTable(). " ";
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
		$json = json_decode(file_get_contents("assets/db/data.json"),true);
		// [table][id-1][name]
		var_dump($json);
		$returnstr = $this->dbInsertHomeData($json["Home"]) . " ";
		$returnstr += $this->dbInsertModelData($json["Model"]) . " ";
		$returnstr += $this->dbInsertMiscData($json["Misc"]) . " ";
		$this->dbhandle = NULL;
		return $returnstr;
	}

	private function dbInsertHomeData($dataIn)
	{
		try{
			foreach($dataIn as $value){
				$stmt = $this->dbhandle->prepare("INSERT INTO Home (Title, Subtitle, Paragraph) VALUES (?, ?, ?)");
				$stmt->bindParam(1,$value['title']);
				$stmt->bindParam(2,$value['subtitle']);
				$stmt->bindParam(3,$value['paragraph']);
				$stmt->execute();		
			}
			return "Home data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
	}

	private function dbInsertModelData($dataIn)
	{
		try{
			foreach($dataIn as $value){
				$stmt = $this->dbhandle->prepare("INSERT INTO Model (x3dTitle, x3dMethod, HomeID) VALUES (?, ?, ?)");
				$stmt->bindParam(1,$value['x3dtitle']);
				$stmt->bindParam(2,$value['x3dmethod']);
				$stmt->bindParam(3,$value['HomeID']);
				$stmt->execute();		
			}
			return "Model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
	}

	private function dbInsertMiscData($dataIn)
	{
		try{
			foreach($dataIn as $value){
				$stmt = $this->dbhandle->prepare("INSERT INTO Misc (GalleryTitle, GalleryText, CameraTitle, CameraText, AnimationTitle, AnimationText, RenderTitle, RenderText) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
				$stmt->bindParam(1,$value['gallerytitle']);
				$stmt->bindParam(2,$value['gallerytext']);
				$stmt->bindParam(3,$value['cameratitle']);
				$stmt->bindParam(4,$value['cameratext']);
				$stmt->bindParam(5,$value['animationtitle']);
				$stmt->bindParam(6,$value['animationtext']);
				$stmt->bindParam(7,$value['rendertitle']);
				$stmt->bindParam(8,$value['rendertext']);
				$stmt->execute();		
			}
			return "Misc data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
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