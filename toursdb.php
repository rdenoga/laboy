<!DOCTYPE html>
<?php 
include ('config/init.php');

$res = mysqli_query($con, "SELECT * from tbl_tours");

?>
<html>
<head>
	<title></title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="table-responsive" id="disp_data">
        <table border="1px" cellpadding="5px" cellspacing="5px" class="table table-hover">
          <tr>
              <th>Tour ID</th>
              <th>Tour Type ID</th>
              <th>Tour Name</th>
              <th>Tour Itinerary</th>
              <th>Tour Price</th>

          </tr>
          <?php  while($row = mysqli_fetch_array($res)){?>

            <tr>
                <td><?php echo $row['itourid'] ?></td>
                <td><?php echo $row['itourtypeid'] ?></td>
                <td><?php echo $row['cdescription'] ?></td>
                <td><?php echo $row['citinerary'] ?></td>
                <td><?php echo $row['famount'] ?></td>
                <td><button class="btn btn-success"><a class="edit_btn" href="admin.php?page=update_tours.php?edit=<?php echo $row['itourid']; ?>">Update</button></a></td>
                
            </tr>

        <?php  } ?>


        </table>
      </div>
    <?php echo "<div class='alert bg-green'>SUCCESS</div>"; ?>
</body>
</html>