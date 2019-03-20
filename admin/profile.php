<?php
include('session.php');
?>
<html>
<head>
    
    <link href='profile.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="navbar.css">
    
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
    
<?php

echo "<div class='box'>";
echo "<p>Name: $username</p>";
echo "<p>Email: $email</p>";
if($branch=='i')
{
    $br='Information Technology';
}
if($branch=='c')
{
    $br='Computer Science';
}
if($branch=='p')
{
    $br='Production';
}
if($branch=='e')
{
    $br='Electronics';
}
echo "<p>Branch: $br</p>";
echo "<p>Phone: $phone</p>";
if($user_type=='s')
{
    $usertype='Student';
}
elseif($user_type=='t')
{
    $usertype='Teacher';
}
elseif($user_type=='a')
{
    $usertype='Alumni';
}
echo "<p>User-Type: $usertype</p>";
echo "<p><b id='logout'><a href='logout.php'>Log Out</a></b></p>";
echo "</div>";
?>
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