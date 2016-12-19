<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $header ?>    

</head>

<body>

    <?php echo $navbar ?>

    <div class="col-md-6 col-md-offset-3">
        <div class="col-md-12 box" id="konfirmasi-pulsa">
            <div class="row">
                <h2>Terima Kasih Telah Membeli</h2>
                <p>Silahkan Lakukan Pembayaran di Kasir</p>     
                <hr>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 header">Nomor Pembayaran
                        </div>
                        <div class="col-md-6"><?php echo $id?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 header">No Meter / ID PLN
                        </div>
                        <div class="col-md-6"><?php echo $this->session->userdata('nomor')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 header">Nominal
                        </div>
                        <div class="col-md-6">Rp <?php echo $this->session->userdata('nominal')?>,-
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