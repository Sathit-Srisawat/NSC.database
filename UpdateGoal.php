<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){

        $sql = "UPDATE Goal SET add_more_weight ='" . $_REQUEST['weight']."', day ='" . $_REQUEST['date']."'  WHERE no=1";

        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $add_more_weights = $_REQUEST['add_more_weight'];
            $dates = $_REQUEST['date'];
        }else{
            echo "<h2>Update you goal complete!!!!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
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
    
    <form action="UpdateGoal.php" method="get">
        <table>
            <tr>
                <th>weight</th>
                <td><input type="text" name="weight" value="" /></td>
            </tr>

            <tr>
                <th>date</th>
                <td><input type="text" name="date" value="" /></td>
            </tr>
        
            <tr>
                <th>Update where</th>
            </tr>
            <tr>
                <th>weight</th>
                <td><input type="text" name="Wweight" value="" /></td>
            </tr>

            <tr>
                <th>date</th>
                <td><input type="text" name="Wdate" value="" /></td>
            </tr>


            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>
