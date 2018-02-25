<!DOCTYPE html>
<?php 
include ('config/init.php');

$res = mysqli_query($con, "SELECT tbl_tours.itourid, tbl_lookup_items.clookupitemname, tbl_tours.cdescription, tbl_tours.famount, tbl_tours.citinerary FROM tbl_lookup_items INNER JOIN tbl_tours ON tbl_tours.ilookupitemid = tbl_lookup_items.ilookupitemid");

?>
<html>
<head>
	<title></title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--DISPLAYING TABLE-->
<section class="content">
<div class="table-responsive" id="disp_data">
        <table border="1px" cellpadding="5px" cellspacing="5px" class="table table-hover">
          <tr>
              <th>Tour Name</th>
              <th>Tour Description</th>
              <th>Tour Price</th>
              <th>Tour Itinerary</th>

          </tr>
          <?php  while($row = mysqli_fetch_array($res)){?>

            <tr>
                <td><?php echo $row['clookupitemname'] ?></td>
                <td><?php echo $row['cdescription'] ?></td>
                <td><?php echo $row['famount'] ?></td>
                <td><?php echo $row['citinerary'] ?></td>
                <td><button class="btn btn-success"><a class="edit_btn" href="?page=update_tours&edit=<?php echo $row['itourid']; ?>">Update</button></a></td>
                
            </tr>

        <?php  } ?>


        </table>
      </div>
</section>

<!--END DISPLAY-->
</body>
</html>