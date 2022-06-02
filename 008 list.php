<h1>Student List</h1>

<p><a href="form1.html">Add new Student</a></p>

<table border ="1" width="100%">
<thead>
<tr>
	<th>ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>DoB</th>
	<th>Action</th>
</tr>
</thead>

<tbody>

<?php
mysql_connect('localhost','root','');
mysql_select_db('enrollment');
$qry=mysql_query("SELECT * FROM entry");

while($row=mysql_fetch_object($qry))
{
	echo '<tr>
		<td> '.$row->id.'</td>
			<td> '.$row->fname.'</td>
				<td> '.$row->lname.'</td>
					<td> '.$row->dob.'</td>
						<td>
						<a href="Update.php? id='.$row->id.'">Update</a>
						<a href="delete.php? id='.$row->id.'">Update</a>
						</td>
		</tr>';
}
?>
</tbody>
</table>
