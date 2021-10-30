<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale-1.0">
        <meta http-equiv="x-UA-Compatible" content="ie*edge">
        <title>Login</title>
        <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css');?>">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top:45px">
                <div class="col-md-4 col-md-offset-4">
                    <h4>Sign In</h4><hr>
                    <form action="" >
                        <!--<div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" name="txtname" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="">Lastname:</label>
                            <input type="text" class="form-control" name="txtlastname" placeholder="Enter Your Lastname">
                        </div>-->
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="text" class="form-control" name="txtemail" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <label for="">Password:</label>
                            <input type="text" class="form-control" name="txtpasswd" placeholder="Enter Your Password">
                        </div>
                        <!--<div class="form-group">
                            <label for="">Retry-Password:</label>
                            <input type="text" class="form-control" name="txtcpasswd" placeholder="Retry-Password">
                        </div>-->
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit">Sign In</button>
                        </div>
                        <br>
                        <a href="<?=site_url('Auth/registrator');?>">Have no Account, Create new Account</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>