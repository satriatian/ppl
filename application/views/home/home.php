<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $header ?>    

</head>

<body>

    <?php echo $navbar ?>

    <div id="wrapper">
        <div class="col-md-8 col-md-offset-2">
            <div id="welcome-msg" class="text-center"> Selamat Datang di iKios Indomaret</div>
            <div class="row">
                <div class="col-md-6">
                    <a href="transaksi/showMenuTransaksi/pulsa"><img src="<?php echo base_url()?>assets/img/pulsa.png" width="100%"></a>
                </div>
                <div class="col-md-6">
                    <a href="transaksi/showMenuTransaksi/token"><img src="<?php echo base_url()?>assets/img/token.png" width="100%"></a>
                </div>
            </div>
        </div>

    </div>


    <?php echo $footer ?>    


</body>

</html>