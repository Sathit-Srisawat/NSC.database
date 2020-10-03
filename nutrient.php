<html>
    <?php
        include "connect.php";
    ?>
    <body> 
    <table border=1 width="100%">
        <body>
        <button><a href="index.php">Back to Home</a></button>
            <?php
                $sql = "select * from food";
                $rs = $conn->query($sql);
                while($row = $rs->fetch_array()){
            ?>    
            <tr>
                <td><?php echo $row['menu'];?> <h4> &nbsp&nbsp <h><?php echo $row['nutrient'];?></td>
            </tr>   
            <?php
                }
                $conn->close();
            ?>
        </body>
    </table>          
    </body>
</html>