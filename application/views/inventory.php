
<div class="wrapper-2 p-5 bg-white">
    <p class="h4">List Produk</p><br>
    <?php if ($message = $this->session->flashdata('message')): ?>
        <div class="alert <?=$message['class']?>">
            <p><?=$message['text']?></p>
        </div>
    <?php endif;?>
    <div class="text-right my-2">
        <button class="btn btn-primary" type="button">
        <a class="text-white" href="<?=site_url('inventory/create')?>"> Add Produk </a>
        </button>
    </div>
    <div class="text-right my-2">
        <form action="<?=site_url('/')?>" method="get">
            <label for="search">Search: </label>
            <input class="border border-dark" type="text" name="search" id="search" placeholder="Search Here" value="<?=$search?>">
        </form>
    </div>
    <table class="i-datatable table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Jumlah Barang</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produks as $produk): ?>
            <tr>
                <td><?=$produk->Id?></td>
                <td><?=$produk->Nama_barang?></td>
                <td><?=$produk->Kode_barang?></td>
                <td><?=$produk->Jumlah_barang?></td>
                <td><?=$produk->Tanggal?></td>
                <td>
                    <button class="btn btn-primary" type="submit">
                    <a class="text-white" href="<?=site_url('inventory/edit/' . $produk->Id)?>"> Edit </a>
                    </button>

                    <button class="btn btn-danger" type="submit">
                    <a class="text-white" href="<?=site_url('inventory/destroy/' . $produk->Id)?>"> Delete </a>
                    </button>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>