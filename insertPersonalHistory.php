<html lang="en">
<head>
    <title>Personal History</title>
    <?php
    include "connect.php"; //ดึงไฟล์connectมารัน
    if(!empty($_REQUEST['submit']) && $_REQUEST['submit'] == 'submit'){
        $sql = "INSERT INTO Personal_History( first_name , last_name , height , weight , age , sex , food_allergy , physical_portability , identity_disease) values('" . $_REQUEST['first_name']."','" . $_REQUEST['last_name']."','" . $_REQUEST['height']."','" . $_REQUEST['weight']."','" . $_REQUEST['age']."','".$_REQUEST['sex']."','".$_REQUEST['food_allergy']."','".$_REQUEST['physical_portability']."','".$_REQUEST['identity_disease']."' )";
        $r = $conn->query($sql);
        if(!$r){
            print("error [".$conn->errno."] " . $conn->error);
            $first_names = $_REQUEST['first_name'];
            $last_names = $_REQUEST['last_name'];
            $heights = $_REQUEST['height'];
            $weights = $_REQUEST['weight'];
            $ages = $_REQUEST['age'];
            $sexs = $_REQUEST['sex'];
            $food_allergys = $_REQUEST['food_allergy'];
            $physical_portabilitys = $_REQUEST['physical_portability'];
            $identity_diseases = $_REQUEST['identity_disease'];
        }else{
            echo "<h2>complete!!!!!! <br> Click <a href='index.php'>Back</a> to home page<h2>";
            exit;
        }
        
    }
?>
 
</head>
<body>
    <h1>Personal History</h1>
    <h2>      
            <a href="index.php">Back To Home</a>   
    </h2>
    
    <form action="insertPersonalHistory.php" method="get">
        <table>

            <tr>
                <th>first name</th>
                <td><input type="text" name="first_name" value="" /></td>
            </tr>
            
            <tr>
                <th>last name</th>
                <td><input type="text" name="last_name" value=""/></td>
            </tr>
 
            <tr>
                <th>height</th>
                <td><input type="text" name="height" value="" /></td>
            </tr>
            
            <tr>
                <th>weight</th>
                <td><input type="text" name="weight" value=""/></td>
            </tr>
 
            <tr>
                <th>age</th>
                <td><input type="text" name="age" value=""/></td>
            </tr>
 
            <tr>
                <th>sex</th>
                <td><input type="text" name="sex" value=""/></td>
            </tr>
 
            <tr>
                <th>food allergy</th>
                <td><input type="text" name="food_allergy" value=""/></td>
            </tr>

            <tr>
                <th>physical portability</th>
                <td><input type="text" name="physical_portability" value=""/></td>
            </tr>

            <tr>
                <th>identity disease</th>
                <td><input type="text" name="identity_disease" value=""/></td>
            </tr>
 
            <tr>
                <th></th>
                <td><input type="submit" value="submit" name='submit'></td>
            </tr>
        
        </table>
    </form>
</body>
</html>
