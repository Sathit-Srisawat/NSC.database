<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){
        $sql = "INSERT INTO today_workout( exercise , min) values('" . $_REQUEST['exercise']."','" . $_REQUEST['min']."')";
        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $exercises = $_REQUEST['exercises'];
            $mins = $_REQUEST['mins'];
        }else{
            echo "<h2>add food today complete!!!!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
    }
    
?>
 
</head>
<body>
    <h1>what your workout today</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="insertWorkoutToday.php" method="get">
        <table>

            <tr>
                <th>Exercise name</th>
                <td><input type="text" name="exercise" value="" /></td>
            </tr>
            
            <tr>
                <th>min??</th>
                <td><input type="text" name="min" value=""/></td>
            </tr>
 
            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>
