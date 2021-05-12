	<?php
		$brandName = $_GET['brand']; 
 		try {		
			$dbhandle = new PDO('sqlite:../../db/test1.db', 'user', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false,));

			$sql = 'SELECT * FROM Model_3D WHERE brand = "'. $brandName. '"';

			$stmt = $dbhandle->query($sql);
		
			$result = null;

			$i=0;	

			while ($data = $stmt->fetch()) {

				$result[$i]['brand'] = $data['brand'];

				$i++;
			}
		}
		catch (PDOEXception $e) {
        	print new Exception($e->getMessage());
    	}

		$dbhandle = NULL;
		
		echo json_encode($result);

 ?>