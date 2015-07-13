<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Courses</title>
	<style>
		label {
			display: block;
			margin-top: 20px;
		}
		label p,textarea {
			display: inline-block;
		}
		label p {
			vertical-align: top;
		}
		td {
			padding: 0 10px;
			border: 1px solid black;
		}
		table {
			border: 1px solid black;
			border-collapse: collapse;
		}

		.bottom {
			margin-top: 100px;
		}

		thead td {
			background-color: gray;
			border: 1px solid black;
		}
		
	</style>
</head>

<body>
	<div class="top">
		<h2>Add a new course</h2>
		<form action="/courses/add" method="post">
			<label>
				Name: <input type="text" name="name">
			</label> 
			<label>
				<p>Description:</p> <textarea name="description" cols="30" rows="5"></textarea>
			</label>
			<input type="submit" name="add" value="add"/>
		</form>
	</div>
	
	<div class="bottom">
		<h2>Courses</h2>
		<table>
			<thead>
				<td>Course Name</td>
				<td>Description</td>
				<td>Date Added:</td>
				<td>Actions</td>
			</thead>
			<tbody>
				<tr>
					<td>How to be a ninja</td>
					<td></td>
					<td>Dec 1st 2013 5:34pm</td>
					<td><a href="#">remove</a></td>
				</tr>
				
					<?php 
						foreach ($name as $key) 
						{	?>
						<tr>
							<td><?= $key['title'] ?></td>
							<td><?= $key['description'] ?></td>
							<td><?= $key['created_at'] = date("M jS Y, g:i A")?></td>
							<td><a href="/courses/destroy/<?= $key['id']?>">remove</a></td>
						</tr>
					<?php	}	?>
			</tbody>
		</table>
	</div>
</body>
</html>