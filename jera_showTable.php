<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Exercise 7.1 - Count</title>
    <?php
    
        include '../connection.php';

        $sql = "SELECT count(*),departmentName FROM `tbl_jeramay` INNER JOIN `hr_department` ON tbl_jeramay.departmentId=hr_department.departmentId GROUP BY departmentName";

        $result= mysqli_query($db,$sql);

       
    ?>
</head>
<body>
    <div>        
    
    
   

    <table>
    <tr>
        <th>Department</th>
        <th>Count</th>
        
    </tr>
    <?php
        if($res = $result->num_rows > 0)
        {
            ?>
            <form action="#" method="POST">
                <tbody>
            
                <?php
                    $i = 0;
                    while($row = $result->fetch_assoc())    
                    {
                    ?>

               
                        <tr>
                           
                            
                           
                            
                            <td><?php echo $row["departmentName"];?></td>
                            <td><?php echo $row["count(*)"]; ?></td>                    
                            
                            
                        </tr>
                   <?php
                    }
                
                ?>
                   
        
        </tbody>
    </form>
    </table>

</body>
</html>


<!-- "F d, Y", strtotime -->


<?php
    $sql = "SELECT * FROM hr_department ";
    $result= mysqli_query($con,$sql);

    if($res = $result->num_rows > 0)
    {
      ?>


        <table class="">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Department Name</th>
            </tr>
          </thead>
          <tbody>

          <tr>
              <th scope=""><?php echo ++$i; ?></th>
              <td><?php echo $row["departmentName"];?></td>
            </tr>
          <?php
        }
            
            ?>
            </tbody>
        </table>
            <?php
          
      
    }
      
?>