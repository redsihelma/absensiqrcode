<!-- Main content -->
<style media="screen">
    table,
    th,
    tr {
        text-align: center;
    }

    .dataTables_wrapper .dt-buttons {
        float: none;
        text-align: center;
    }

    .sfwal2-popup {
        font-family: inherit;
        font-size: 1.2rem;
    }

    div.dataTables_wrapper div.dataTables_length label {
        padding-top: 5px;
        font-weight: normal;
        text-align: left;
        white-space: nowrap;
    }

    .swal2-popup {
        font-family: inherit;
        font-size: 1.2rem;
    }
</style>
<section class='content'>
    <div class='row'>
        <div class='col-xs-12'>
            <div class='box box-primary'>
                <div class='box-header  with-border'>
                    <h3 class='box-title'>DATA KARYAWAN</h3>
                    <div class="pull-right">
                        <?php echo anchor(site_url('tambah_anggota'), ' <i class="fa fa-plus"></i> &nbsp;&nbsp; Tambah Baru', ' class="btn btn-unique btn-lg btn-create-data btn3d" hidden="true"'); ?>
                    </div>
                </div>
                <div class="box-body">
                    <div class="actionPart">
                        <div class="actionSelect">
                            <div class="col-md-3">
                                <select id="exportLink" class="form-control">
                                    <option>Pilih Metode Ekspor Data</option>
                                    <option id="csv">Ekspor menjadi CSV</option>
                                    <option id="print">Cetak Data</option>
                                    <option id="pdf">Ekspor menjadi PDF</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <table id="mytable" class="table table-bordered table-hover display" style="width:100%;">
                        <thead>
                            <tr>
                                <th class="all">No.</th>
                                <th class="all">Kode Karyawan.</th>
                                <th class="all">Nama Karywan</th>
                                <th class="desktop">Jabatan</th>
                                <th class="desktop">Shift</th>
                                <th class="desktop">Email</th>
                                <th class="desktop">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $start = 0;
                            foreach ($karyawan_data as $karyawan) { ?>
                            <tr>
                                <td><?php echo ++$start ?></td>
                                <td><?php echo $karyawan->id_karyawan ?></td>
                                <td><?php echo $karyawan->nama_karyawan ?></td>
                                <td><?php echo $karyawan->nama_jabatan ?></td>
                                <td><?php echo $karyawan->nama_shift ?></td>
                                <td><?php echo $karyawan->email ?></td>
                                <td>
                                    <?php
                                        echo anchor(site_url('karyawan/lihat/' . $karyawan->id), '<i class="fa fa-eye fa-lg"></i>&nbsp;&nbsp;Lihat', array('title' => 'detail', 'class' => 'btn btn-md btn-success btn3d'));
                                        echo anchor(site_url('karyawan/update/' . $karyawan->id), '<i class="fa fa-pencil-square-o fa-lg"></i>&nbsp;&nbsp;Edit', array('title' => 'edit', 'class' => 'btn btn-md btn-warning btn-edit-data btn3d'));
                                        echo anchor(site_url('karyawan/delete/' . $karyawan->id), '<i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Hapus', 'title="delete" class="btn btn-md btn-danger btn-remove-data btn3d"');
                                        ?>
                                </td>
                            </tr> <?php } ?>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
<script type="text/javascript">
    let base_url = '<?= base_url() ?>';
</script>
<script type="text/javascript">
    let checkLogin = '<?= $result ?>';
</script>
<!-- <script src="<?php echo base_url() ?>assets/app/datatables/karyawan.js" charset="utf-8"></script> -->
<script>
$(document).ready(function () {
    $('#mytable').addClass('nowrap').DataTable({
        initComplete: function () {
            let api = this.api();
            $('#karyawan_filter input')
                .off('.DT')
                .on('keyup.DT', function (e) {
                    api.search(this.value).draw();
                });
        },
        responsive: true,
        processing: true,
        colReorder: true,
        oLanguage: {
            sProcessing: "loading..."
        },
        lengthMenu: [
            [10, 25, 50, -1],
            ['10', '25', '50', 'Show all'],
        ],
        dom: 'Blfrtip',
        buttons: [
            'colvis',
            {
                extend: 'csv',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5],
                },
            },
            {
                extend: 'excel',
                title: 'Data Karyawan',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5],
                },
            },
            {
                extend: 'copy',
                title: 'Data Karyawan',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5],
                },
            },
            {
                extend: 'pdf',
                oriented: 'portrait',
                pageSize: 'legal',
                title: 'Data Karyawan',
                download: 'open',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5],
                },
                customize: function (doc) {
                    doc.content[1].table.widths = Array(doc.content[1].table.body[0].length + 1).join('*').split('');
                    doc.styles.tableBodyEven.alignment = 'center';
                    doc.styles.tableBodyOdd.alignment = 'center';
                },
            },
            {
                extend: 'print',
                oriented: 'portrait',
                pageSize: 'A4',
                title: 'Data Karyawan',
                download: 'open',
                exportOptions: {
                    columns: [0, 1, 2, 3, 4, 5],
                },
            },
        ],
        initComplete: function () {
            var $buttons = $('.dt-buttons').hide();
            $('#exportLink').on('change', function () {
                var btnClass = $(this).find(":selected")[0].id
                    ? '.buttons-' + $(this).find(":selected")[0].id
                    : null;
                if (btnClass) $buttons.find(btnClass).click();
            })
        },
        rowId: function (a) {
            return a;
        },
        rowCallback: function (row, data, iDisplayIndex) {
            var info = this.fnPagingInfo();
            var page = info.iPage;
            var length = info.iLength;
        },
    });
    });
    table.on('order.dt search.dt', function () {
        table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1;
            table.cell(cell).invalidate('dom');
        });
    }).draw();

    if (checkLogin == 0) {
        $('.btn-create-data').hide();
        $('.btn-warning').css("display", "none");
    }
</script>