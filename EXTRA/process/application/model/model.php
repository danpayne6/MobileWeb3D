<?php
class Model {
	public $dbhandle;
	
	public function __construct()
	{
		$dsn = 'sqlite:./db/test1.db';

		try {	

			$this->dbhandle = new PDO($dsn, 'user', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false,));
		}
		catch (PDOEXception $e) {
			echo "Cannot connect to the database!";
        	print new Exception($e->getMessage());
    	}
	}
	

	public function dbGetBrand()
	{
		return array("-", "McDonalds","Fanta", "Duff");
	}

	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, brand) 
				VALUES (1, 'McDonalds'); " .
			"INSERT INTO Model_3D (Id, brand) 
				VALUES (2, 'Fanta'); " .
			"INSERT INTO Model_3D (Id, brand) 
				VALUES (3, 'Duff'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			$sql = 'SELECT * FROM Model_3D';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;	
			while ($data = $stmt->fetch()) {
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelTitle'] = $data['modelTitle'];
				$result[$i]['modelSubtitle'] = $data['modelSubtitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return $result;
	}

}
?>