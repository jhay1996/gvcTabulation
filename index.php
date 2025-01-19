 

<!DOCTYPE html>
<html lang="en">
  
  <?php
  include('header2.php');
  ?>
<head>
  <style>
    .navbar-inner{
background-color: green;
    }

    .footer{
background-color: green;
    }

    .pull-left{
      color: white;
    }

#overview{
  background-color: green;
}

   
  </style>
</head>
  <body>
    
    
    <!-- Navbar
    ================================================== -->

    
    
<header class="jumbotron subhead" id="overview">
  <div class="container">
    <h1 style="text-align:center"><img src="img/gvc.png" alt="">GVCFI | Tabulation System <img src="img/cet.png" alt="" style="width:150px; height:150px;"></h1>
    <p class="lead"></p>
  </div>
</header>




    <div class="container">
    
      
   <form method="POST" action="login.php" >
 <br />  
 <table cellpadding="10" cellspacing="0" border="0" align="center">
 <thead>
 <th align="center" style="background-color: green; text-indent: 7px; color: white; "><h4>USER LOGIN</h4></th>
 </thead>
 
 <tr style="background-color: green;">
 
 <td>
 
 
  <h5 style="color: white;"> <i class="icon-user" ></i>  USERNAME:</h5>
  <input style="font-size: large; height: 35px !important; text-indent: 7px !important;" class="form-control btn-block" type="text" name="username" placeholder="Username" required="true" autofocus="true" />
 
 <h5 style="color: white;"><i class="icon-lock"></i>  PASSWORD:</h5>
  <input style="font-size: large; height: 35px !important; text-indent: 7px !important;" class="form-control btn-block" type="password"  name="password" placeholder="Password" required="true" autofocus="true" />
<br /><br />
 
  <button style="width: 160px !important;" type="submit" class="btn btn-primar pull-right" ><i class="icon-ok"></i> <strong>LOGIN</strong></button>
  <strong style="color: white;">Register <a href="create_account.php" style="color: white;">here &raquo;</a></strong> &nbsp;&nbsp;&nbsp; 
  
 </td>
 </tr>
 
 
 </table>
 
 

   </form>
 
 
    
            </div>
 
   


    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
      
        <font size="2" class="pull-left"><strong>Tabulation System &COPY; <?= date("Y") ?>  </strong></font> <br />
        
      </div>
    </footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js"></script>
    
  </body>
</html>
