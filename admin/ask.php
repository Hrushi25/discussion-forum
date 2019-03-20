<html>
<head>
    <title>Ask Question</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="ask.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="navbar.css" type="text/css">
</head>
    <body>
        <nav class="navbar">
            <ul>
                <a href="#" class="side-open" onclick="OpenSideMenu()">
                    <li>
                        <svg width="30" height="30">
                        <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                        <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                        <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                        </svg>
                    </li>
                </a>
                <a class="link-nav" href="dashboard.php"><li>Dashboard</li></a>
                <a class="link-nav" href="ask.php"><li>Have a Question?</li></a>
                <a class="link-nav" href="profile.php"><li>Profile</li></a>
                
            </ul>
            
        </nav>
        
        <div class="side-nav" id="side-menu">
                
                <a href="dashboard.php">Dashboard</a>
                <a href="ask.php">Have a Question?</a>
                <a href="profile.php">Profile</a>
            
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form method="post" action="insert-question.php" class=" card box">
                <input class="question" placeholder="Your Question" type="text" name="question" required>
                <p></p>
                <input class="details" placeholder="Details about your question here..." type="text" name="details">
                <p></p>
                <input type="submit" name="submit" value="Submit">
                </form>
            </div>
            <div class="col-md-2"></div>
        <script>
            var i=0;
            function OpenSideMenu()
            {
                if(i==0)
                {
                //document.getElementById('side-menu').style.display = 'inherit';
                document.getElementById('side-menu').style.width = '250px';
                //document.getElementById('main-body').style.marginLeft = '250px';
                    i=1;
                }
                else
                {
                //document.getElementById('side-menu').style.display = 'none';
                document.getElementById('side-menu').style.width = '0px';
                //document.getElementById('main-body').style.marginLeft = '0px';
                    i=0;
                }
            }
            
        </script>
        
    </body>
</html>