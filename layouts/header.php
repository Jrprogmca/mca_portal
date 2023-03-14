<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "MCA Portal";?>
    </title>
    <link rel="icon" type="image/x-icon" href="libs/images/mca.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
  </head>
  <body>
    <script>function display_ct6() {
      const monthNames = ["January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];
    var x = new Date()
    var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
    hours = x.getHours( ) % 12;
    hours = hours ? hours : 12;
    hours = hours <= 9 ? '0' + hours : hours;
    var x1=monthNames[x.getMonth()] + " " +x.getDate() + "," + " " + x.getFullYear();
    var seconds = x.getSeconds() <= 9 ? '0' + x.getSeconds() : x.getSeconds();
    var minutes = x.getMinutes() <= 9 ? '0' + x.getMinutes() : x.getMinutes();
    x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds  + " " + ampm;
    document.getElementById('ct6').innerHTML = x1;
    display_c6();
     }
     function display_c6(){
    var refresh=60; // Refresh rate in milli seconds
    mytime=setTimeout('display_ct6()',refresh)
    }
    display_c6()
    </script>
    <header id="header">
      <div class="logo pull-left"> MCA Portal</div>
      <div class="header-content">
      <div class="header-date pull-left">
        <strong><?php// echo date("F j, Y, g:i a");?><span id='ct6' ></span></strong>
      </div>
      <?php  if ($session->isUserLoggedIn(true)): ?>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
              <span><?php echo remove_junk(ucfirst($user['name'])); ?> <i class="caret"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="profile.php?id=<?php echo (int)$user['id'];?>">
                      <i class="glyphicon glyphicon-user"></i>
                      Profile
                  </a>
              </li>
              <li>
                  <a href="users.php">
                      <i class="glyphicon glyphicon-indent-left"></i>
                      User
                  </a>
              </li>
              <li>
                  <a href="academic_year.php">
                      <i class="glyphicon glyphicon-list-alt"></i>
                      Year
                  </a>
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Settings
                 </a>
             </li>
             <li class="last">
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Logout
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
    <?php else: ?>
      <div class="pull-right clearfix">

        <ul class="info-menu list-inline list-unstyled">
          <li class="profile" style="margin-top:20;">
            <a href="login.php"  class="btn btn-xs btn-primary" data-toggle="tooltip" title="Login">
              Admin Login
            </a>


          </li>
        </ul>
      </div>



<?php endif;?>

     </div>
    </header>
    <div class="sidebar">
        <!-- admin menu -->
      <?php include_once('admin_menu.php');?>


   </div>


<div class="page">
  <div class="container-fluid">
