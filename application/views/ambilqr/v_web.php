<head>
    <style>
        button{

border: none;

}

a{

text-decoration: none;

}

input, textarea{

display: block;

width: 80%;

padding: 15px;

margin-top: 10px;

margin-bottom: 40px;

border: none;

border-bottom: 2px solid green;

font-family: sans-serif;

font-size: 16px;

}

label{

font-family: sans-serif;

}

.exampleModalLong{

border-radius: 10px;

padding: 50px;

margin-left:  30%;

margin-right: 30%;

box-shadow: 1px 1px 5px;

background-color: white;

visibility: hidden;

}

.exampleModalLong h1{

text-align: center;


font-family: sans-serif;

}

form{
    padding: 10%;
}

.exampleModalLong p{

position: relative;

left: 107%;

bottom: 65px;

font-size: 20px;

background-color: white;

display: inline;

padding: 10px;

border-radius: 50%;

}

.btn2{

color: white;

width: 40%;

height: 40px;

margin-left: 20%;

background-color: #007bff;

border: none;

border-radius: 10px;

font-size: 20px

}

.btn2:hover{

background-color: #0F549B;

}

.exampleModalLong{

transition: 0.56s;

transform: translateY(30px);

position: relative;

align-content: center;

visibility: visible;

}
    </style>
</head>
<body class="hold-transition skin-blue layout-top-nav" onLoad="pindah()">
    
<div class="container">
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">GENERATE QRCODE</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">INPUT NAMA DI SINI</label>
                                <input type="text" onChang="ready()" id="id"  name="id_karyawan" class="form-control" placeholder="Masukkan Nama yang terdaftar di Data Karyawan">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button onClick="ready()" onFocus="ready()" type="button" class="btn  btn-primary btn-lg btn3d">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">INFORMASI QRCODE AKAN MUNCUL DISINI</h3>
                        </div>
                        <div class="box-body ajax-content" id="showR"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/jQueryUI/css/jquery-ui.css">
    <script  src="<?php echo base_url() ?>assets/plugins/jQueryUI/js/jquery-ui.js"></script>

    <script type="text/javascript">
        function pindah() {
            $('#id').focus();
        };

        function ready() {
            var id = $('#id').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('/GenBar/showw') ?>',
                data: `id=${id}`,
                beforeSend: function(msg) {
                    $('#showR').html('<h1><i class="fa fa-spin fa-refresh" /></h1>');
                },
                success: function(msg) {
                    $('#showR').html(msg);
                    $('#id_karyawan').focus();
                }
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#id').autocomplete({
                source: "<?php echo site_url('GenBar/get_autocomplete'); ?>",
                select: function(event, ui) {
                    $('[name="qr"]').val(ui.item.label);
                }
            });
        });
    </script>
</body>

</html>