<?php

class createDBcomplaint{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $tablename;
    public $con;

    //constructor
    public function __construct(
        $dbname = "Newdb", $tablename = "Productdb", $servername = "localhost",
        $username="root", $password=""
        ){
            $this->dbname = $dbname;
            $this->tablename = $tablename;
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;

            //
            $this->con = mysqli_connect($servername,$username,$password);

            if(!$this->con){
                die("Connection failed:".mysqli_connect_error());
            }

            // create query

            $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

            //execute

            if(mysqli_query($this->con,$sql)){

                //echo"CREATING DATABASE BUT SOME ERROR";

                $this->con = mysqli_connect($servername,$username,$password, $dbname);

                // sql to create new table

                $sql = "CREATE TABLE IF NOT EXISTS $tablename 
                (id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                user_namee VARCHAR(200) NOT NULL,
                user_phone int(10),
                user_email VARCHAR(100),
                user_subject VARCHAR(100),
                seller_name VARCHAR(100),
                product_name VARCHAR(100),
                complaint_details VARCHAR(10000)
                );";

                if(!mysqli_query($this->con,$sql)){
                    echo "Error creating table:".mysqli_error($this->con);
                }

            }else{
                
            }
        }
        //get product from the database.
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";
        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result)>0){
            return $result;
        }
        
    }

}
?>