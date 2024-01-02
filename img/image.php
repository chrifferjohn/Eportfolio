<!DOCTYPE html>
<html>

<head>
  <style>
    body {
      background-color: #f1f1f1;
      padding: 20px;
      font-family: Arial;
    }

    /* Center website */
    .main {
      max-width: 1000px;
      margin: auto;
    }

    h1 {
      font-size: 50px;
      word-break: break-all;
    }

    .row {
      margin: 8px -16px;
    }

    /* Add padding BETWEEN each column (if you want) */
    .row,
    .row>.column {
      padding: 8px;
    }

    /* Create four equal columns that float next to each other */
    .column {
      float: center;
      width: 25%;
    }

    /* Clear floats after rows */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Content */
    .content {
      background-color: white;
      padding: 10px;
    }

    /* Responsive layout - makes a two-column layout instead of four columns */
    @media screen and (max-width: 900px) {
      .column {
        width: 50%;
      }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
      }
    }

    
    * {
      box-sizing: border-box;
    }

    body {
      background: white;
      font-family: Times New Roman;
    }

    .container {
      display: block;
      max-width: 800px;
      min-height: 20px;
      margin: auto;
    }

    .notepad {
      background: #BFBFBF;
      display: block;
      min-height: 100px;
      width: 100%;
      padding: 4px;
      -webkit-box-shadow: 5px 5px 5px 1px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 5px 5px 5px 1px rgba(0, 0, 0, 0.75);
      box-shadow: 3px 3px 5px 1px rgba(0, 0, 0, 0.75);
      border: 1.4px solid white;
    }

    .notepad-bar {
      width: 100%;
      background: #01007A;
      height: 23px;
    }

    .notepad-title {
      color: white;
      letter-spacing: .5px;
      word-spacing: .5px;
      padding-left: 5px;
      float: left;
      font-weight: 600;
    }

    .notepad-minimize,
    .notepad-maximize,
    .notepad-exit {
      height: 100%;
      display: block;
      float: right;
      padding-top: 3px;
      padding-bottom: 3px;
    }

    .notepad-exit {
      padding-left: 5px;
      padding-right: 5px;
    }

    .button-minimize,
    .button-maximize,
    .button-exit {
      background: #BFBFBF;
      height: 100%;
      width: 19px;
      border-right: 2px solid black;
      border-bottom: 2px solid black;
      border-left: 1px solid white;
      border-top: 1px solid white;
    }

    .button-exit {
      font-size: 55%;
      margin: auto;
      text-align: center;
    }

    .notepad-icon {
      height: 100%;
      float: left;
      padding-top: 1px;
    }

    .notepad-icon img {
      object-fit: fill;
      display: block;
      height: 19px;
      width: 19px;
    }

    .icon-maximize {
      border-bottom: 1px solid black;
      border-top: 3px solid black;
      border-left: 1px solid black;
      border-right: 1px solid black;
      height: 80%;
      width: 80%;
      display: block;
      margin: auto;
      margin-top: 1.2px;
    }

    .icon-minimize {
      border-bottom: 2px solid black;
      width: 80%;
      height: 80%;
      display: block;
      margin: auto;
      margin-left: 1.5px;
    }

    .notepad-settings {
      width: 100%;
      float: left;
      display: inline-flex;
      margin-left: 10px;
      margin-bottom: 5px;
    }

    .settings-text {
      padding-right: 15px;
    }

    .underline {
      text-decoration: underline;
    }

    .notepad-content {
      height: 400px;
      width: 100%;
      background: white;
      clear: both;
      border-radius: 1px;
      border: 1.2px solid black;
      overflow: auto;
      padding: 5px;
    }

	#backToDashboardButton {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

#backToDashboardButton:hover {
    background-color: #2980b9;
}

  </style>
</head>

<body>
	<center>
  <h2>My SCORE </h2>
  <p>Act 1 Hands-on </p>

  <!-- Portfolio Gallery Grid -->
  <div class="main">
    <div class="row">
      <div class="column">
        <div class="content">
          <img src="/img/image.php" alt="" style="width:200%">
          <h3></h3>
          <p></p>
        </div>
      </div>
    </div>
  </div>
  ></center>

  <div class="container">
    <div class="notepad">
      <div class="notepad-bar">
        <div class="notepad-icon">
          <img src="http://www.milk.com.hk/sites/default/files/imagecache/largebanner/sites/default/files/notepad_1.png" alt="notepad icon">
        </div>
        <div class="notepad-title">Programs - Notepad</div>
        <div class="notepad-exit">
          <div class="button-exit">&#10060;</div>
        </div>
        <div class="notepad-maximize">
          <div class="button-maximize">
            <div class="icon-maximize"></div>
          </div>
        </div>
        <div class="notepad-minimize">
          <div class="button-minimize">
            <div class="icon-minimize"></div>
          </div>
        </div>
      </div>
      <!-- notepad bar -->
      <div class="notepad-settings">
        <div class="settings-text"><span class="underline">F</span>ile</div>
        <div class="settings-text"><span class="underline">E</span>dit</div>
        <div class="settings-text"><span class="underline">S</span>earch</div>
        <div class="settings-text"><span class="underline">H</span>elp</div>
      </div>
      <!-- notepad settings -->
      <div class="notepad-content">
        <h1>CORRECT – OUTPUT </h1>
        <p>
          ACT1 HANDS ON 

        </p>
      </div>
      <!-- notepad content -->
    </div>
    <!-- notepad -->
  </div>
  <!-- container -->
  <button id="backToDashboardButton">Back to Dashboard</button>

  <script>
    document.getElementById('backToDashboardButton').addEventListener('click', function() {
    // Redirect to the dashboard page
    window.location.href = 'dashboard.php'; // Replace '/dashboard' with the actual URL of your dashboard
});
</script>
</body>

</html>
