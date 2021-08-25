<form action="<?=isset($produk->Id) ? site_url('inventory/update/' . $produk->Id) : site_url('inventory/insert')?>" method="post">
    <div class="form-group">
        <label for="nama-barang">Nama Barang:</label>
        <input class="form-control" type="text" id="nama-barang" name="nama-barang" value="<?=isset($produk->Nama_barang) ? $produk->Nama_barang : ''?>">
    </div>
    <div class="form-group">
        <label for="kode-barang">Kode Barang:</label>
        <input class="form-control" type="text" id="kode-barang" name="kode-barang" value="<?=isset($produk->Kode_barang) ? $produk->Kode_barang : ''?>">
    </div>
    <div class="form-group">
        <label for="jumlah-barang">Jumlah Barang:</label>
        <input class="form-control" type="number" id="jumlah-barang" name="jumlah-barang" value="<?=isset($produk->Jumlah_barang) ? $produk->Jumlah_barang : ''?>">
    </div>
    <div class="form-group">
        <label for="tanggal">Tanggal:</label>
        <input class="form-control" type="date" id="tanggal" name="tanggal" value="<?=isset($produk->Tanggal) ? $produk->Tanggal : ''?>">
    </div>
    <div class="form-group">
        <button class="btn p-3 btn-primary" type="submit">
            <?=isset($produk->Id) ? 'Update' : 'Add'?>
        </button>
    </div>
</form>
