<!DOCTYPE html>
<html lang="en">

<head>

    <?php echo $header ?>    

</head>

<body>

    <?php echo $navbar ?>

    <div class="col-md-8 col-md-offset-2">
        <h2>Konfirmasi Pembelian Voucher Pulsa</h2>         
        <div class="col-md-12" id="konfirmasi-pulsa">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">No Hp
                        </div>
                        <div class="col-md-3"><?php echo $this->session->userdata('nomor')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">Operator
                        </div>
                        <div class="col-md-3"><?php echo $this->session->userdata('operator')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">Nominal
                        </div>
                        <div class="col-md-3"><?php echo $this->session->userdata('nominal')?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-2" style="text-align: center;margin-top:20px">
                            <div class="row">
                                <div class="col-md-12">Total Bayar
                                </div>
                                <div class="col-md-12"><?php echo $this->session->userdata('jumlah_bayar')?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" style="margin-top:200px;">
                    <button type="submit" class="btn btn-primary btn-lg text-center">Next</button>
                </div>
            </div>
        </div>
    </div>


    <?php echo $footer ?>    


</body>

</html>