<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());  
    mysql_select_db("tnews2") or die(mysql_error());
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
    $query = $_GET['query']; 
     
    $min_length = 3;
     
    if(strlen($query) >= $min_length){ 

        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysql_query("SELECT name,text  FROM news
            WHERE (`name` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());
            
      
        if(mysql_num_rows($raw_results) > 0){ 
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['name']."</h3>".$results['text']."</p>";
                
            }
             
        }
        else{ 
            echo "No results";
        }         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
?>
</body>
</html>