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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><center>ID Pembayaran</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($pembayaran as $post){?>
                        <tr>
                            <td><?php echo $post->id;?></a></td>
                            <td><a class="btn btn-primary"  href="<?php echo base_url()?>admin/struk/<?php echo $post->id?>" >Verifikasi</a></td>
                        </tr>     
                        <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


    <?php echo $footer ?>    


</body>

</html>