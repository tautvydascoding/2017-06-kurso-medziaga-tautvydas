<?php




      define('HOST', 'localhost');
      define('DB_USERNAME', 'zygis');
      define('DB_PASSWORD', 'ponaipizonai');
      define('DB_NAME', 'urban_wedding');
        

    function connection(){
 
        $connect = mysqli_connect(HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        mysqli_set_charset($connect, "utf8");

        return $connect;
    }
    
    
    //Get the total number of results
    $sql = "SELECT COUNT(id) FROM blog_posts";


    $query = mysqli_query(connection(), $sql);
    $row = mysqli_fetch_row($query);

    //total row count
    $rows = $row[0];
    //number of results per page
    $page_rows = 1;
    
    //page number of our last page
    $last = ceil($rows/$page_rows);

    //maske sure $last can't be less than 1
    if($last < 1){
        $last = 1;
    }

    //establish $pagenum variable - 
    $pagenum = 1;

    //get pagenu, from URL variables if it's present, if not, it will be equal to 1
    if(isset($_GET['pn'])){
        $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
    }
    
    //makes sure that the page number isn't below 1, or more than our $last page
    if($pagenum < 1){
        $pagenum = 1;
    } else if ($pagenum > $last){
        $pagenum = $last;
    }


    //sets the range of rows to query the chosen $pagenum
    $limit = 'LIMIT ' . ($pagenum - 1) * $page_rows . ',' .$page_rows; //no need, limit is always 1



//    mysqli_query(connection(),"SET NAMES utf8");
//    mysqli_query(connection(),"SET CHARACTER_SET utf8");
//    


    //another query, selects only one page worth of rows from table by applying $limit
    $sql = "SELECT * FROM blog_posts ORDER BY id DESC $limit";


//    mysqli_set_charset(connection(), "utf8");

    $query = mysqli_query(connection(), $sql);

    
    //shows user what page they are on and the total number of pages
    $textline1 = "blog posts: <b>$rows</b>";
    $textline2 = "Page <b>$pagenum</b> of <b>$last<b/>";


    //establish $paginationCtrls variable
    $paginationCtrls = '';

    //if theres more than one page worth of results
    if($last != 1){
        //first we check if we're on page 1, if we are, we don't need links to previous page or the first page, so we do nothing. If we aren't then we generate links to the first page and to the previous page
        if ($pagenum > 1){
            $previous = $pagenum - 1;
            $paginationCtrls .='<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Naujesnis įrašas</a> &nbsp; &nbsp; ';
            
            
        }
            //======================PAGE NUMBERS GENERATION=================================
            
//            
//            //render clickable number links that should appear on the left of the target page
//            for($i = $pagenum - 4; $i < $pagenum; $i++){
//                if($i > 0){
//                    $paginationCtrls .= '<a href = "'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp;';
//                }
//            }
//            
//            
//            
//        }
//        //render the target page number, but without it being the link
//        $paginationCtrls .=''.$pagenum.'&nbsp;';
//        //render clickable number links that should appear on the RIGHT of the target page
//        for($i = $pagenum + 1; $i <= $last; $i++){
//            $paginationCtrls .='<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
//            if ($i >= $pagenum + 4){
//                break;
//            }
//        }
//        
//        
        
        //======================PAGE NUMBERS GENERATION END=================================
        
        //does the same as above, only checking if we are on the last page and generating the "Next" button
        if($pagenum != $last){
            $next = $pagenum + 1;
            $paginationCtrls .= '&nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Ankstesnis įrašas</a>';
        }
    }

    $list = '';
    while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        $id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $author = $row['author'];
        $date = $row['date_added'];
//         $list .= '<p><a href=blog.php?id='.$id.'">'.$author.' '.$title.' Straipsniukas</a> - paspausk</p>'; 
    }
   

//close database connection
mysqli_close(connection());

?>
