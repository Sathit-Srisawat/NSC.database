<html lang="en">
<head>
    <title>Personal History</title>
<?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){
        $sql = "INSERT INTO today_food( name , amount) values('" . $_REQUEST['name']."','" . $_REQUEST['amount']."')";
        $sqls = "INSERT INTO historyEaten( Hname , Hamount) values('" . $_REQUEST['name']."','" . $_REQUEST['amount']."')";
        $r = $conn->query($sql);
        $rs = $conn->query($sqls);
        //$rs = $conn->query($sqls);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $names = $_REQUEST['H.name'];
            $amounts = $_REQUEST['H.amount'];
        }else{
            echo "<h2>add food today complete!!!!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
    }
?>

</head>
<body>
    <h1>what your eaten today</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="insertEatenToday.php" method="get">
        <table>

            <tr>
                <th>Food name</th>
                <td><input type="text" name="name" value="" /></td>
            </tr>
            
            <tr>
                <th>amount</th>
                <td><input type="text" name="amount" value=""/></td>
            </tr>
 
            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>
