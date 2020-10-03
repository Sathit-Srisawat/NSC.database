<html>
    <?php
        include "connect.php";
    ?>
    <head>
        <title>ChangeIt</title>
    </head>
    <style>
        table,th, td {
            border: 1px solid black;
        };
    </style>
    <body>
        <table style= "width:100%">
            <tr>
                <td>
                    <h1 align = 'center'> CHANGE IT</h1><h3 align = 'center' >COME ON BRO!!  &nbsp;&nbsp;&nbsp;    YOU CAN DO THIS!!     &nbsp;&nbsp;&nbsp;  LET MOTHOR DUCKER!!</h3>
                </td>
                <td>
                    <button><a href="insertPersonalHistory.php">PERSONAL INFOMATION</a></button><br>
                    <button><a href="insertGoal.php">SET A GOAL</a></button><br>
                    <button><a href="insertEatenToday.php">EATEN TODAY</a></button><br>
                    <button><a href="insertWorkoutToday.php">WORKOUT TODAY</a></button><br>
                    <button><a href="DeleteGoal.php">DELETEGOAL</a></button><br>
                    <button><a href="UpdateGoal.php">UPDATEGOAL</a></button>
                </td>
            </tr>
        <table>

        <table style="width : 100%">
            <tr>
                <td>
                    <h1 align ="center" >WELCOME BACK</h1>
                </td>
                <?php
                    $sql = "select * from Personal_History";
                    $rs = $conn->query($sql);
                    while($row = $rs->fetch_array()){
                        ?>    
                            <td align = "center"> <h3>HI !! &nbsp; <?php echo $row['first_name'];?>  <?php echo $row['last_name'];?></h3> </td> 
                        <?php
                    }
                    $conn->close();
                ?>
            </tr>
        </table>
    </body>
    <body>
    <table style="width : 100%">
            <tr align="center">
                <td>
                    <h3>YOUR GOAL</h3>
                </td>
                <td>
                    <h3>EATEN TODAY</h3>
                </td>
                <td>
                    <h3>WORKOUT TODAY</h3>
                </td>
            </tr>
            <tr>
<!--Goal Table-->
            <?php
                include "connect.php";
            ?>

                <?php
                    $sqls = "select * from Goal";
                    $rss = $conn->query($sqls);
                    while($rows = $rss->fetch_array()){
                        ?>    
                            <td align = "center"> <h3>OMG!!!&nbsp; <?php echo $rows['add_more_weight'];?> weight  <?php echo $rows['day'];?> day</h3> </td> 
                        <?php
                    }
                    $conn->close();
                ?>
<!--today_food Table-->
            <?php
                include "connect.php";
            ?>
                <td align = "center">
                <?php
                    $sqls = "select * from today_food";
                    $rss = $conn->query($sqls);
                    
                    while($rows = $rss->fetch_array()){
                        ?>    
                             <h3>menu <?php echo $rows['name'];?>&nbsp;amount&nbsp;<?php echo $rows['amount'];?> </h3> 
                        <?php
                    }
                    $conn->close();
                ?>
                </td> 
<!--today_workout Table-->
            <?php
                include "connect.php";
            ?>
                <?php
                    $sqls = "select * from today_workout";
                    $rss = $conn->query($sqls);
                    while($rows = $rss->fetch_array()){
                        ?>    
                            <td align = "center"> <h3>sukoi !! &nbsp; <?php echo $rows['exercise'];?>  <?php echo $rows['min'];?>min</h3> </td> 
                        <?php
                    }
                    $conn->close();
                ?>
<!--End-->
            </tr>
        </table>

        <table style="width : 100%">
            <tr align="center">
                <td>
                    <h3>RESULT</h3>
                </td>
                <td>
                    <h3>HISTORY FOOD</h3>
                </td>
                <td>
                    <h3>NUTRIENT</h3>
                </td>
            </tr>
            <tr>
<!--Result  Table-->
            <?php
                include "connect.php";
            ?>

                <?php
                    $sqls = "select * from result inner join Personal_History";
                    $rss = $conn->query($sqls);
                    while($rows = $rss->fetch_array()){
                        ?>    
                            <td align = "center"> <h3>befor &nbsp; <?php echo $rows['weight'];?>&nbsp;kg</h3>
                            <h3>now&nbsp; <?php echo $rows['R.weight'];?>&nbsp;kg</h3>
                            </td>
                        <?php
                    }
                    $conn->close();
                ?>
<!--History_food Table-->
            <?php
                include "connect.php";
            ?>
                <td align = "center">
                <?php
                    $sqls = "select * from historyEaten";
                    $rss = $conn->query($sqls);
                    
                    while($rows = $rss->fetch_array()){
                        ?>    
                             <h3>menu <?php echo $rows['hname'];?>&nbsp;amount&nbsp;<?php echo $rows['hamount'];?> </h3> 
                        <?php
                    }
                    $conn->close();
                ?>
                </td> 
<!--link to page history nutrient Table-->
                <td>
                    <button><a href="nutrient.php">ALL NUTRIENT</a></button>
                </td>
<!--End-->
            </tr>
        </table>
    </body>
</html>


