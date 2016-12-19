<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $header ?>    

</head>

<body>

    <?php echo $navbar ?>

    <div id="wrapper">
        <div class="col-md-8 col-md-offset-2">
            <div id="welcome-msg" class="text-center"> Dashboard</div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="admin/login" method="POST">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <?php if($this->session->flashdata("message")) {?>
                    <div class="alert alert-success" role="alert" style="margin-top:20px">
                        <strong>Gagal!</strong> <?php echo $this->session->flashdata("message")?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>


    <?php echo $footer ?>    


</body>

</html>