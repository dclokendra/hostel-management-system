
<?php 
$title="Student Reports";
include_once"header.php"; 
	$data=$student->lists();
?>
<link rel="stylesheet" type="text/css" href="css/dashboard.css">	
	<div class="rightbar">
		<h2>Student Reports</h2>
		<div class="reptbl">
			 <table border="1px">
        <thead>
            <tr>
                <th>SN</th>
                <th>Full Name</th>
                <th>Photo</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Address</th>
                <th>Created By</th>
                <th>Created Date</th>
                <th>Updated By</th>
                <th>Updated Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($data as $d) {?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d->fullName; ?></td>
                <td><?php echo $d->photo; ?></td>
                <td><?php echo $d->mobile; ?></td>
                <td><?php echo $d->email; ?></td>
                <td><?php echo $d->dob; ?></td>
             	<td><?php echo $d->address; ?></td>   
                <td><?php echo $d->created_by; ?></td>
                <td><?php echo $d->created_date; ?></td>
                <td><?php echo $d->updated_by; ?></td>
                <td><?php echo $d->updated_date; ?></td>
                <td><a href="editstudent.php?id=<?php echo $d->studentID;?>">Edit </a><a onclick="return confirm('Are you sure to delete')" href="deletestudent.php?id=<?php echo $d->studentID;?>"> Delete</a><a href="student_room.php?id=<?php echo $d->studentID;?>"> AddRoom</a></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
		</div>
		</div>
	<?php include_once"footer.php"; ?>

