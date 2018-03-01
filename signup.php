<?php
    require_once 'login_meta_data.php';

    $conn = new mysqli($hostname,$username,$password,$database);

    if(!$conn) die($conn->connect_error);
    

?>

<html>
    <head>
        <title>
            Alpha Blog
        </title>
        <?php
        require_once 'header_metadata.php';
        ?>
        
    </head>

    <body>
        <?php
        require_once 'header.php';
        ?>
    

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                        
                </div>

                <div class="col-12 col-sm-8 col-md-4 col-lg-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 signup-form-card">
                            <form action="signup.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm Password</label>
                                    <input type="text" class="form-control" id="confirmpassword" placeholder="Confirm Password">
                                </div>


                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                </div>

            </div>

        </div>

        <?php
        require_once 'footer.php';
        require_once 'script_link.php'
        ?>
    </body>
</html>