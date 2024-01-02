<?php
session_start();

if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'instructor') {
    header('location:login.php');
}
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

    </style>
</head>
<body>
    <input type="checkbox" id="checkbox">
    <header class="header">
        <h2 class="u-name">e <b>portfolio</b>
            <label for="checkbox">
                <i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
            </label>
        </h2>
        <i class="fa fa-user" aria-hidden="true"></i>
    </header>

    <div class="body">
        <nav class="side-bar">
            <div class="user-p">
                <img src="img/free.png" alt="User Image">
                <h2>instructor</h2>
               
            </div>
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <span>IT307</span>
                    </a>
                    
                </li>
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <span>back to dashboard</span>
                    </a>
                </li>
            </ul>
        </nav>
        <section class="section-1">
        
			<?php
				require 'users2/users2.php';

				$users2 = getUsers2();

				include 'partials/header.php';
			?>

			<div class="container">
				

				
						<?php foreach ($users2 as $user2): ?>
								
                                <div class="folder"><a href="view2.php?id=<?php echo $user2['id'] ?>" class="btn btn-sm btn-outline-info"  style="color:black"><?php echo $user2['name'] ?>..</a><p</p></div>
                    
									
								
						<?php endforeach; ?>
					
			</div>
			<?php include 'partials/footer.php' ?>
 
    
    
    </body>
</html>
