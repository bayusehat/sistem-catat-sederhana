<?php $this->load->view('data/head'); ?>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <h2><?= $title;?></h2>
                                <hr>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <a href="<?= base_url();?>admin/penjualan" class="btn btn-success"><i class="mdi mdi-plus-box"></i> Add Penjualan</a>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <a href="#" class="btn btn-info float-right"><i class="mdi mdi-printer"></i> Print</a>
                                        </div>
                                    </div>
                                <hr>
                                    <div class="form-group">
                                        <div class="alert alert-success" id="berhasil"><i class="mdi mdi-check-circle"></i> <span id="text_berhasil"></span></div>
                                    <div class="alert alert-danger" id="gagal"><i class="mdi mdi-close-circle"></i> <span id="text_gagal"></span></div>
                                </div>
                            <table id="tableData" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nomor Penjualan</th>
                                        <th>Tanggal Penjualan</th>
                                        <th>Pembeli</th>
                                        <th>Alamat</th>
                                        <th>Nomor Telepon</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="data_penjualan">
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $this->load->view('data/foot'); ?>