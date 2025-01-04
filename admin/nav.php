<?php 
      include('../include/config.php'); 
     $display = "select * from cms";
     $query = mysqli_query($conn,$display);
     $result = mysqli_fetch_array($query);
 
   ?>
<nav id="sidebar">
   <div class="custom-menu">
      <button type="button" id="sidebarCollapse" class="btn btn-primary">
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
      </button>
   </div>
   <div class="p-4">
      <figure class="aaa">
         <img src="../img/<?php echo $result['profile_img'] ?>"  >
      </figure>
      <h1><a style="font-size: 20px;" href="profile.php" class="logo"><?php echo $result['title'] ?> <span><?php echo $result['description'] ?></span></a></h1>
      <ul class="list-unstyled components mb-5 nav-list">
         <li >
            <a href="profile.php"><span class="fa fa-home mr-3"></span> Home</a>
         </li>
         <li>
            <a href="links.php"><span class="fa fa-briefcase mr-3"></span> Social Links</a>
         </li>
         <li>
            <a href="about.php"><span class="fa fa-sticky-note mr-3"></span> About</a>
         </li>
         <li>
            <a href="inbox.php"><span class="fa fa-envelope mr-3"></span> Inbox</a>
         </li>
         <li>
            <a href="setting.php"><span class="fa fa-cog mr-3"></span> Setting</a>
         </li>
         <li>
            <a href="logout.php"><span class="fa fa-sign-out mr-3"></span> Log Out</a>
         </li>
      </ul>
      <div class="footer">
         <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <a style="color: #fff; text-decoration: none;" href="http://faheem.wtf/">Daniel</a>
         </p>
      </div>
   </div>
</nav>
