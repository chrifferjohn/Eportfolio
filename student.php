<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles.css">
    <style>
		body {
			overflow-y: scroll; /* Add scrollbar for vertical overflow */
		}

        .footer {
    background-color: #333; /* Dark background color for the footer */
    color: #fff; /* Light text color for the footer */
    text-align: center; /* Center-align text in the footer */
    padding: 10px; /* Add padding to the footer */
    position: fixed; /* Fix the footer to the bottom of the viewport */
    width: 100%; /* Make the footer span the entire width of the viewport */
    bottom: 0; /* Position the footer at the bottom of the viewport */
}

.footer p {
    margin: 0; /* Remove default margin for the paragraph inside the footer */
}

/* Additional styles for section-1 */
.section-1 {
            padding: 20px; /* Add padding to the section */
            background-color: #f5f5f5; /* Set a background color for the section */
            border: 1px solid #ddd; /* Add a border around the section */
            border-radius: 8px; /* Add border radius for a rounded appearance */
            margin: 20px; /* Add margin to the section */
        }

        .section-1 h1 {
            color: #333; /* Set text color for the heading */
        }

        .section-1 p {
            color: #666; /* Set text color for the paragraph */
        }

        .container {
            margin-top: 20px; /* Add margin to the container */
        }

        .btn-success {
            background-color: #28a745; /* Set background color for success button */
            color: #fff; /* Set text color for success button */
        }

        .thumbnail {
    width: 40px;
    height: 40px;
    object-fit: cover;
    border-radius: 50%;
}

.container {
    margin-top: 10px;
}

.table {
    width: 10%;
    margin-top: 10px;
    border-collapse: collapse;
}

.table th, .table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.table th {
    background-color: #f2f2f2;
}

.btn {
    padding: 5px 10px;
    font-size: 12px;
    margin-right: 5px;
}

.btn-success {
    background-color: #28a745;
    color: #fff;
}

.btn-info {
    background-color: #17a2b8;
    color: #fff;
}

.btn-secondary {
    background-color: #6c757d;
    color: #fff;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
}

        

    </style>
</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name">e<b>portfolio</b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/student2.jpg">
				<h4>student</h4>
			</div>
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span> IT307 Dashboard</span>
					</a>
				</li>
				<li>
					<a href="index.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>IT304</span>
					</a>
				</li>
				
				<li>
					<a href="index.php">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>back</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			
			<!-- Insert your PHP code here -->
			<?php
				require 'users2/users2.php';

				$users2 = getUsers2();

				include 'partials/header.php';
			?>

			<div class="container">
				<p>
					<a class="btn btn-success" href="create2.php">Create new</a>
				</p>

				<table class="table">
					<thead>
						<tr>
							<th>Image</th>
							<th>activity number</th>
							<th>type:</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($users2 as $user2): ?>
							<tr>
								<td>
									<?php if (isset($user2['extension'])): ?>
										<img style="width: 60px" src="<?php echo "users2/images/${user2['id']}.${user2['extension']}" ?>" alt="">
									<?php endif; ?>
								</td>
								<td><?php echo $user2['name'] ?></td>
								<td><?php echo $user2['username'] ?></td>

								<td>
									
									<a href="update2.php?id=<?php echo $user2['id'] ?>" class="btn btn-sm btn-outline-secondary">Update</a>
									<form method="POST" action="delete2.php">
										<input type="hidden" name="id" value="<?php echo $user2['id'] ?>">
										<button class="btn btn-sm btn-outline-danger">Delete</button>
									</form>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<p><a href="index.php">Back</a></p>
			<?php include 'partials/footer.php' ?>
		</section>
        
        <!-- Repeat the section as needed -->
        

	</div>
</body>
</html>
