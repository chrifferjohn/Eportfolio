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

        .card {
  width: 500px;
  height: 500px;
  margin: 0 auto;
  background-color: #24233b;
  border-radius: 8px;
  z-index: 1;
  box-shadow: 0px 10px 10px rgb(73, 70, 92);
  transition: 0.5s;
}

.card:hover {
  transform: translateY(-7px);
  box-shadow: 0px 10px 10px black;
}

.top {
  display: flex;
  align-items: center;
  padding-left: 10px;
}

.circle {
  padding: 0 4px;
}

.circle2 {
  display: inline-block;
  align-items: center;
  width: 10px;
  height: 10px;
  padding: 1px;
  border-radius: 5px;
}

.red {
  background-color: #ff605c;
}

.yellow {
  background-color: #ffbd44;
}

.green {
  background-color: #00ca4e;
}




.code-container {
  text-align: center;
}
#code {
  width: 400px;
  height: 350px;
  resize: none;
  background-color: rgb(73, 70, 92);
  border-radius: 5px;
  border: none;
  color: white;
  padding: 10px;
}
#code:focus {
  outline: none !important;
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
            
               
            </div>
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <span>activity code</span>
                    </a>
                    
                </li>
                <li>
					<a href="activity2.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>ACT1</span>
					</a>
				</li>
                <li>
					<a href="image.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>ACT2</span>
					</a>
				</li>
                <li>
					<a href="image2.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>ACT3</span>
					</a>
				</li>
                <li>
					<a href="image3.php">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>ACT4</span>
					</a>
				</li>
                <li>
                    <a href="dashboard.php">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                        <span>back</span>
                    </a>
                </li>
            </ul>
        </nav>
        <section class="section-1">
        <div class="card">
  <div class="header">
    <div class="top">
      <div class="circle">
        <span class="red circle2"></span>
      </div>
      <div class="circle">
        <span class="yellow circle2"></span>
      </div>
      <div class="circle">
        <span class="green circle2"></span>
      </div>
      <div class="title">
        <p id="title2">style.css</p>
      </div>
    </div>
  </div>
  <div class="code-container">
    <textarea readonly="" name="code" id="code" class="area">
.card {
  width: 300px;
  height: 400px;
  margin: 0 auto;
  background-color: #24233b;
  border-radius: 8px;
  z-index: 1;
  box-shadow: 0px 10px 10px rgb(73, 70, 92);
  transition: 0.5s;
}

.card:hover {
  transform: translateY(-7px);
  box-shadow: 0px 10px 10px black;
}

.top {
  display: flex;
  align-items: cente
  padding-left: 10px;
}</textarea
    >
  </div>
</div>

        </section>
</body>
</html>
