
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">OLGA <span class="glyphicon glyphicon-cloud-download"></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Available analyses <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <?php 
                    $dates = availableAnalysis(); 
                    for($date=0;$date<count($dates)-2;$date++)
                    {
                      echo "<li><a href=\"maps.php?d=1&date=$dates[$date]&var=pfd_ventus&time=0\">$dates[$date]</a></li>";
                    }
                  ?>   
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

