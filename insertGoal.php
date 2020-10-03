<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){
        $sql = "INSERT INTO Goal( add_more_weight , day) values('" . $_REQUEST['weight']."','" . $_REQUEST['day']."')";
        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $add_more_weights = $_REQUEST['add_more_weight'];
            $dates = $_REQUEST['day'];
        }else{
            echo "<h2>add you goal complete!!!!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
    }
    
?>
 
</head>
<body>
    <h1>Set Your Goal Bro!!</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="insertGoal.php" method="get">
        <table>

            <tr>
                <th>weight</th>
                <td><input type="text" name="weight" value="" /></td>
            </tr>
            
            <tr>
                <th>day</th>
                <td><input type="text" name="day" value=""/></td>
            </tr>
 
            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>
