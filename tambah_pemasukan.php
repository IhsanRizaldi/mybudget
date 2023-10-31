<div class="container mt-5">
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="d-flex">
            <h3 class="text-center">Tambah Pemasukan</h3>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="proses_tambah_pemasukan" method="post">
                    <div class="mb-3">
                        <label>Nama User</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Nominal</label>
                        <input type="number" name="nominal" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Waktu</label>
                        <input type="datetime-local" name="waktu" class="form-control">
                    </div>
                    <div class="mb-3 d-flex ms-auto">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>