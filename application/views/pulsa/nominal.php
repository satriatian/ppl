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
                    <form action="pulsa/konfirmasi" method="GET">
                        <div class="form-group">
                            <div class="row">
                            <div class="indomaret-label" >Pilih Nominal Voucher</div>
                                <a href="<?php echo base_url()?>pulsa/konfirmasi/10">
                                    <div class="col-md-3">
                                        <div class="col-md-12  nominal-box">
                                            <?php echo $this->session->userdata('operator') ?><br>
                                            10.000,-
                                            <div class="col-md-12 nominal-jumlah">
                                                IDR 11.000
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url()?>pulsa/konfirmasi/20">
                                    <div class="col-md-3">
                                        <div class="col-md-12  nominal-box">
                                            <?php echo $this->session->userdata('operator') ?><br>
                                            20.000,-
                                            <div class="col-md-12 nominal-jumlah">
                                                IDR 21.000
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url()?>pulsa/konfirmasi/50">
                                    <div class="col-md-3">
                                        <div class="col-md-12  nominal-box">
                                            <?php echo $this->session->userdata('operator') ?><br>
                                            50.000,-
                                            <div class="col-md-12 nominal-jumlah">
                                                IDR 51.000
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="<?php echo base_url()?>pulsa/konfirmasi/100">
                                    <div class="col-md-3">
                                        <div class="col-md-12  nominal-box">
                                            <?php echo $this->session->userdata('operator') ?><br>
                                            100.000,-
                                            <div class="col-md-12 nominal-jumlah">
                                                Rp 101.000
                                            </div>
                                        </div>
                                    </div>
                                </a>      
                                                   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <?php echo $footer ?>    


</body>

</html>