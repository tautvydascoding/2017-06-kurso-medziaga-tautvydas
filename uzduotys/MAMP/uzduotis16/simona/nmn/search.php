</<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'karalystes');


if (isset($_GET['term'])){
	$return_arr = array();

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";port=8889;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare('SELECT name FROM aprasymai WHERE name LIKE :term');
	    $stmt->execute(array('term' => '%'.$_GET['term'].'%'));

	    while($row = $stmt->fetch()) {
	        $return_arr[] =  $row['name'];
	    }
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}




    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}




// $connect = mysqli_connect("localhost", "root", "", "karalystes");
// if (isset($_POST["query"]))
// {
//     $output = '';
//     $query = "SELECT * FROM aprasymai WHERE name LIKE '%".
//     $_POST["query"]."%'";
//     $result = mysqli_query($connect, $query);
//     $output = '<ul class="list-unstyled">';
//     if mysqli_num_rows ($result) > 0)
//     {
//       while($row = mysqli_fetch_array($result))
//       {
//         $output .= '<li>'.$row["name"].'</li>'
//       }
//     }
//     else
//     {
//       $output .= '<li>Rusis nerasta</li>';
//     }
//     $output .= '</ul>';
//     echo $output;
// }


 ?>
