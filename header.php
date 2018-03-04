

<nav class="navbar navbar-default custom-style">
          <div class="container-fluid custom-container-styles">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Alpha Blog</a>
            </div>
        
           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
              <?php

              if($login==true){
              echo<<<_END

              <li><a href="user_home.php">Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Articles <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="viewmyarticles.php">View Articles</a></li>
                    <li><a href="create_articles.php">Create Articles</a></li>
                   


                  </ul>


                </li>


_END;
              }
              ?>
                
              </ul>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
              </form>
              
              <ul class="nav navbar-nav navbar-right">
                  <?php 
                    if($login==false){
                        echo<<<_END

                <li> <button id="login" class="btn btn-success login">&nbsp;&nbsp;Login&nbsp;&nbsp;</button></li>
                <li> <button id="signup"  class="btn btn-primary signup">Sign Up</button></li>

_END;

                    }else{
echo<<<_END
                    <form action="signout.php" method="post">
                  <li> <button type="submit" id="signout"  class="btn btn-primary signout">Log Out</button></li>
                  <input type="hidden" value="logout" name="logout">
                    </form>
_END;
                    }
                  ?>
                
              </ul>
            </div>
          </div>
        </nav>