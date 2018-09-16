<header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="http://localhost/loanmaster/index.php/page_loader/index" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>

          <div class="navbar-brand">
            <a href="http://localhost/loanmaster/index.php/page_loader/index"><h2>Farmer Friendly Corporation</h2></a>
            <p>
              <img src="<?php echo base_url(); ?>assets/images/abcd.png" alt="Innovation through automation">
             <span><font size="4"><em><b>Innovation through automation</b></em></font></span>
            </p>
          </div>

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li>
              <a href="http://localhost/loanmaster/index.php/page_loader/loan_services_points">
               <br class="hidden-xs"> Loan Services</a>
            </li>
            <li>
              <a href="http://localhost/loanmaster/index.php/page_loader/renting_services">
                <br class="hidden-xs"> Renting Services</a>
            </li>
            <li id="phone" class="hidden-xs">
              <a href="tel:410-602-5008">
                <span>011-23383370</span></a><div>* Contact Us</div>
            </li>
            <li>
              <a href="<?php echo base_url('index.php/user_authentication/logout')?>"><br class="hidden-xs">Logout</a>
            </li>
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>