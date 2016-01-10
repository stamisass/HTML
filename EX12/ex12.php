<!DOCTYPE HTML>
<HTML>
<HEAD></HEAD>
<BODY>
<?php
    /* script to create a table
      variables:
         $sqlQuery - a query string
         $dbResult - result of a SQL query
         $rows     - number of rows
   */
 // connect to the mysql system and select the database
   $mysite ="localhost";
   $myuser ="student1";
   $mypasswd = "shenkar1";
   mysql_connect($mysite, $myuser, $mypasswd)
      or die("Error connecting to the mySQL .... use the browsers BACK button");
   mysql_select_db("students") or die("Error opening the database .... use the browsers BACK button");
   // drop table if exist
     $sqlQuery="DROP TABLE tamir" ;
         mysql_query ($sqlQuery) ;

   $sqlQuery="CREATE TABLE tamir (fname VARCHAR(10),mname VARCHAR(10),lname VARCHAR(10),age INTEGER)" ;
     mysql_query ($sqlQuery) ;

   $sqlQuery="INSERT INTO  tamir (fname,mname,lname,age) VALUES ('shachar','efes','efes','20'),('moshe','momi','shayo','29')" ;
   mysql_query ($sqlQuery) ;


     mysql_free_result($dbResult);
   mysql_close();
   print "table created"
?>

</body>