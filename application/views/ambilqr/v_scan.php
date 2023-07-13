<div class="box box-widget">
    <?php
    $params['data'] = $id_karyawan;
    $params['level'] = 'H';
    $params['size'] = 4;
    $params['savename'] = FCPATH . "uploads/qr_image/" . $id_karyawan . 'code.png';
    $this->ciqrcode->generate($params);
    ?>

    <div id="print-area">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
                <div class="widget-user-image">
                    <img class="img-responsive qrcode" id="qrcode" name="qrcode" src="<?php echo base_url('uploads/qr_image/') . $id_karyawan . 'code.png'; ?>" />
                </div>     
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username" name="id_karyawan"><?php echo $id_karyawan ?></h3>
                <h5 class="widget-user-desc" name="nama_karyawan"><?php echo $nama_karyawan; ?></h5>
            </div>
        </div>
    </div>
    <button onclick="printDiv('print-area')" class='pull-left'><i class='fa fa-print'></i> Print</button>
    <br>
            <div class="box-footer no-padding">
                <ul class="nav nav-stacked">
                    <li><a href="#">NAMA JABATAN : <?php echo $nama_jabatan; ?> </a></li>
                    <li><a href="#">SHIFT : <?php echo $nama_shift; ?> </a></li>
                    <li><a href="#">PENEMPATAN : <?php echo $nama_gedung; ?> </a></li>
                </ul>
                <br />
                <div style="margin-bottom: 20px;">
                <!-- <button onclick="JavaScript:window.location.href='../../controllers/download/download filename=<?php echo base_url() . $id_karyawan . 'code.png'; ?>';"> Download Image</button><br /> -->
                <!-- <a href="<?php echo site_url('download/download')?>">Download Image</a><br /> -->
                <?php $fname= $id_karyawan . 'code.png'; ?>
                <a href="<?php echo base_url(); ?>download/download/<?php echo $fname; ?>">Download Gambar</a> 
                <!-- <a href="<?php echo base_url(); ?>download/download/<?php echo base_url(). $id_karyawan . 'code.png'; ?>">Download</a> -->
                </div>
                <button style="padding-left: 5%;padding-right: 5%;"  type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModalLong">
                    <h5> Kirim Gmail <i class='glyphicon glyphicon-envelope'></i></h5></button>
            </div>
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div style="padding: 5px 50px;">
                        <center>
                            <h1>Kirim Email</h1> 
                            <hr />
                        </center>
                            <?php echo form_open('email/send/', ['method'=>'post', 'enctype'=>'multipart/form-data']) ?>
                            <div style="margin-bottom: 10px;">
                            <label>Kepada</label><br />
                            <input type="email" name="email_penerima" value="<?php echo $email?>" placeholder="Email Penerima" style="margin-top: 5px;width: 400px" />
                            </div>
                            <div style="margin-bottom: 10px;">
                            <label>Subjek</label><br />
                            <input type="text" name="subjek" value="Abesensi QR Code kelurahan gandasuli" placeholder="Subjek" style="margin-top: 5px;width: 400px"/>
                            </div>
                            <div style="margin-bottom: 10px;">
                            <label>Pesan</label><br />
                            <textarea name="pesan" placeholder="Pesan" rows="3" style="margin-top: 5px;width: 400px">
                            <?php echo "ID Karyawan = " .$id_karyawan. "
                            Nama Karyawan = " .$nama_karyawan ?>
                            </textarea>
                            </div>
                            <div style="margin-bottom: 20px;">
                            <h4><?php echo ('') . $id_karyawan . 'code.png'; ?></h4>
                            <label>Attachment</label><br />
                            <input type="file" src="<?php echo ('') . $id_karyawan . 'code.png'; ?>" id="attachment" name="attachment" style="margin-top: 5px;width: 400px" />
                            </div>
                            <hr />
                            <button type="submit">KIRIM EMAIL</button>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>