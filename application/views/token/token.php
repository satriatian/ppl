<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $header ?>    

</head>

<body>

    <?php echo $navbar ?>

    <div id="wrapper">
        <div class="col-md-8 col-md-offset-2">
            <div id="welcome-msg" class="text-center"> i-Pulsa</div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="token/nominal" method="POST">
                        <div class="form-group">
                            <label class="indomaret-label" for="exampleInputEmail1">Masukkan Nomor Meter / ID PLN Anda</label>
                            <input type="text" name="nomor" class="form-control" placeholder="No Meter / ID PLN">
                        </div>
                        <button type="submit" class="btn btn-primary">Next</button>
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