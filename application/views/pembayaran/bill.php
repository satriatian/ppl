<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $header ?>    

</head>

<body>

    <?php echo $navbar ?>

    <div class="col-md-8 col-md-offset-2">
        <div class="col-md-12 box" id="konfirmasi-pulsa">
            <div class="row">
                <h2>Terima Kasih Telah Membeli</h2>
                <p>Silahkan Lakukan Pembayaran di Kasir</p>     
                <hr>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 header">No Hp
                        </div>
                        <div class="col-md-3"><?php echo $this->session->userdata('nomor')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 header">Operator
                        </div>
                        <div class="col-md-3"><?php echo $this->session->userdata('operator')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 header">Nominal
                        </div>
                        <div class="col-md-3">Rp <?php echo $this->session->userdata('nominal')?>,-
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-8" style="text-align: center;margin-top:20px">
                            <div class="row">
                                <div class="col-md-12 header">Total Bayar
                                </div>
                                <div class="col-md-12">Rp <?php echo $this->session->userdata('jumlah_bayar')?>,-
                                </div>
                                <div class="col-md-12 text-center" style="margin-top:20px;">
                                    <a href="<?php echo base_url()?>pulsa/pembayaran"><button type="submit" class="btn btn-primary btn-lg text-center">Next</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php echo $footer ?>    


</body>

</html>