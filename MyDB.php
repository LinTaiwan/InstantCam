<?php
	class MyDB
	{
		var $linkID;
		var $resultPtr;

		function __construct($dbName){
			$this -> linkID = mysql_connect('localhost', 'root', 'student');
			mysql_select_db($dbName);
			mysql_query('SET CHARACTER SET UTF8;');
		}
		function __destruct(){
			mysql_close($this -> linkID);
		}
		//Insert DB -> mysql_query("INSERT INTO TableName ( , ) VALUES('".$_POST['xxx']."', ' ')", $link_ID)
		function insert($tableName, $values){
			$queryHead = "INSERT INTO " . $tableName . " (";
			$queryMid = " ) VALUES ( ";
			$queryTail = " );";
			$isFirstKey = true;
			foreach ($values as $key => $value) {
				if (is_string($value))
					$value="'$value'";
				if($isFirstKey){
					$queryHead .=" $key ";
					$queryMid .=" $value ";
					$isFirstKey = false;
				}else{
					$queryHead .= ", $key ";
					$queryMid .= ", $value ";
				}
			}
			$query = $queryHead . $queryMid . $queryTail;
			//echo $query;
			return mysql_query($query, $this->linkID);
		}
		//Update DB ->  mysql_query("UPDATE TableName SET KEY = 'VALUE';", $link_ID);
		function update($tableName, $values, $whereClause = NULL){
			$queryHead = "UPDATE " . $tableName . " SET ";
			$isFirstKey = true;
			foreach ($values as $key => $value) {
				if (is_string($value))
					$value="'$value'";
				if($isFirstKey){
					$queryHead .="$key = $value";
					$isFirstKey = false;
				}else{
					$queryHead .= ", $key = $value";
				}
			}
			if ($whereClause)
				$queryHead .= "WHERE" . $whereClause; 
			$query = $queryHead.";";
			return mysql_query($query, $this->linkID);
		}
		//Delete DB ->  mysql_query("DELETE FROM TableName WHERE KEY = 'VALUE' ;", $link_ID);
		function delete($tableName, $whereClause = NULL){
			$queryHead = "DELETE FROM " . $tableName ;
			if ($whereClause)
				$queryHead .= "WHERE" . $whereClause; 
			$query = $queryHead.";";
			return mysql_query($query, $this->linkID);
		}
		//Select DB ->  mysql_query("SELECT * FROM TableName WHERE KEY = 'VALUE' ;", $link_ID);
		function select($tableName, $columns, $whereClause = NULL){
			$query = "SELECT ";
			if ($columns == "*")
				$query .= "* ";
			else{
				for ($i=0; $i<sizeof($columns); $i++)
					$query .= ($i==0) ? " $columns[$i]" : ", $columns[$i]";
			} 
			$query .= " FROM $tableName";
			if($whereClause)
				$query .= "WHERE" . $whereClause; 
			$this->resultPtr = mysql_query($query, $this->linkID);
			return $this->resultPtr;
		}
		//把select的內容裝成陣列
		function fetchAllResult(){
			if(!$this->resultPtr)
				return NULL;
			$returnArray = array();
			$dataCounter = 0;
			while($record= mysql_fetch_array($this->resultPtr)){
				$returnArray[$dataCounter] = $record;
				$dataCounter++;
			}
			return $returnArray;
		}
	}
?>