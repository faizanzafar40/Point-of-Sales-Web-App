 <div class="navbar navbar-fixed-top">
      <div>
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  
          </a>
          <a class="brand" href="#"><b>Point of Sales System for <i>Cafe NUST</i></b></a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li><a>Welcome:<strong> <?php echo $_SESSION['SESS_LAST_NAME'];?></strong></a></li>
			 <li><a>
								<?php
								$Today = date('y:m:d',time());
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>

				</a></li>
              <li><a href="../index.php"><font color="red"><i class="icon-off icon-large"></i></font> Logout</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	