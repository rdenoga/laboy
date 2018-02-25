<!DOCTYPE html>
<?php 
include ('config/init.php');

$res = mysqli_query($con, "SELECT * from tbl_lookup_category");

?>
<html>
<head>
	<title></title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<section class="content">
<div class="table-responsive" id="disp_data">
        <table border="1px" cellpadding="5px" cellspacing="5px" class="table table-hover">
          <tr>
              <th>Lookup Category</th>
              <th><button class="btn btn-success">Add New Category</button></th>


          </tr>
          <?php  while($row = mysqli_fetch_array($res)){?>

            <tr>
                <td><?php echo $row['clookupcatname'] ?></td>
                <td><button class="btn btn-success"><a class="edit_btn" href="?page=update_tours&edit=<?php echo $row['clookupcatname']; ?>">Update</button></a></td>
                
            </tr>

        <?php  } ?>


        </table>
      </div>
</section>
</body>
</html>