<?php
session_start();

if (!isset($_SESSION['user_type'])) {
    header('location:login.php');
}


$user_type = $_SESSION['user_type'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Add any additional styles here */
        /*------------- folder box----------- */
.folder {
    width: 150px;
    height: 105px;
    margin: 50px 50px;
    float: left;
    position: relative;
    background: rgb(110,166,239);
    background: linear-gradient(183deg, rgba(110,166,239,1) 11%, rgba(30,92,172,1) 100%);
    border-radius: 0 6px 6px 6px;
    transition: 0.10s ease-out;
    /* box-shadow: 4px 4px 7px rgba(0, 0, 0, 0.59); */
}
/*-------------folder box----x------- */
.folder:hover{
  transform: scale(1.2);
}
/*-------------file opener----------- */
.folder:before {
    content: '';
    width: 46%;
    height: 21px;
    clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
    border-radius: 4px 0px 0 0;
    background-color: #1e5cac;
    position: absolute;
    top: -10.3px;
    left: 0px;
}
/*-------------file opener----x------- */

/*------------- Document ----------- */
.folder:after {
    content: '';
    width: 29%;
    height: 5px;
    border-radius: 2px 2px 0 0;
    background-color: #ffffff;
    position: absolute;
    top: 5.6px;
    left: 4px;
}
/*-------------Document ----x------- */

/*------------- text  ----------- */
p{
  position: absolute;
  left: 124px;
  top: 10px;
  margin: 0%;
  font-family: 'Courier New', Courier, monospace;
  font-size: 20px;
  color: black;
    
}
.scroll-container {
            overflow-x: auto;
            white-space: nowrap;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .section-1 {
            text-align: center;
        }
       .section-1 {
            text-align: center;
        }

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
        <h2 class="u-name">E <b>portfolio</b>
            <label for="checkbox">
                <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
            </label>
        </h2>
        <i class="fa fa-user" aria-hidden="true"></i>
    </header>

    <div class="body">
        <nav class="side-bar">
            <div class="user-p">
                <img src="img/free.png" alt="">
                <h4><?php echo $user_type; ?></h4>
            </div>
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <span>IT304 Dashboard</span>
                    </a>
                </li>
                <?php if ($user_type == 'instructor') { ?>
                    <li>
                        <a href="activity.php">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <span>IT307</span>
                        </a>
                    </li>
                <?php } else if ($user_type == 'student') { ?>
                <?php } ?>
                <li>
                    <a href="activity2.php">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span>Correct CODE</span>
                    </a>
                </li>
                
                <li>
                    <a href="logout.php">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        
   
   <section class="section-1">
			<!-- Insert your PHP code here -->
			<?php
				require 'users/users.php';

				$users = getUsers();

				include 'partials/header.php';
			?>

			<div class="container">
				

				
						<?php foreach ($users as $user): ?>
								
                                <div class="folder"><a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info"style="color:black"><?php echo $user['name'] ?>View</a><p</p></div>
                    
									
								
						<?php endforeach; ?>
					
			</div>
			<?php include 'partials/footer.php' ?>

   
   </section>

 
</body>
</html>
