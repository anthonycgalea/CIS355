<?php
    function readAll($from_record_num, $records_per_page){ //Function Declaration - this first line of code declares the method, readAll(), with 2 parameters, $from_record_num and $records_per_page, both of which are initially set in core.php
  
		//Creating query to send to database
		//SELECT Statement to pull products from database  - Select statement determines the items that will identify the product on the page, the from pulls it from the correct table
		//ORDER BY orders the results by name, in ascending (alphabetical) order
		//LIMIT decides how many to return, decided by the parameters passed in
        $query = "SELECT 
                    id, name, description, price, category_id 
                FROM 
                    " . $this->table_name . " 
                ORDER BY
                    name ASC 
                LIMIT //limit the 
                    {$from_record_num}, {$records_per_page}";
		//prepare the statement to be sent to the db
        $stmt = $this->conn->prepare( $query );
		//send the statement to the db, and record the result in $stmt
        $stmt->execute();
      
		//return the resulting indexes
        return $stmt;
    }
?>