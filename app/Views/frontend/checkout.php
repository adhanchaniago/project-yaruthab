<?= $this->extend('layout/templateCheckout'); ?>
<?= $this->section('content'); ?>
<?php helper('global'); ?>
<main style="height: 500px;">
    <div class="container mt-3">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title"> Nominal donasi :</h5>
                <p class="h5"><b> <?= rupiah($uang->nominal); ?></b></p>
                <p class="card-text">Atas nama <strong><?= $donatur->nama; ?></strong></p>
                <div class="container">
                    <p class="card-text">Silahkan transfer ke rekening berikut :</p>
                    <div class="bank-c">
                        <img src="<?= base_url('/assets/img/bank/mandiri.jpg'); ?>" alt="mandiri syariah">
                        <span>710-7835-808 (kode bank 451)</span>
                    </div>
                    <div class="bank-c">
                        <img src="<?= base_url('/assets/img/bank/muamalat.jpeg'); ?>" alt="bank muamalat">
                        <span>713-0011395 (kode bank 147)</span>
                    </div>
                    <div class="bank-c">
                        <img src="<?= base_url('/assets/img/bank/jatim.jpg'); ?>" alt="bank jatim">
                        <span>0123-662113 (kode bank 114)</span>
                    </div>
                    <div class="bank-c ml-5">
                        <img src="<?= base_url('/assets/img/bank/bri.png'); ?>" alt="bank bri">
                        <span>0073-01-025084-53-3 (kode bank 002)</span>
                    </div>
                </div>
                <div class="my-4">
                    <a href="https://api.whatsapp.com/send?phone=62811331167&text=Assalamualaikum,%20saya%0Aatas%0Anama%0A<?= $donatur->nama ?>%20mengkonfirmasi%0Adonasi%0Adengan%0Anominal%0A<?= rupiah($uang->nominal); ?>" target="blank" class=" btn btn-primary">Konfirmasi pembayaran</a>
                    <a href="/" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
            <div class="card-footer text-muted">
                <p>Terima kasih, semoga donasi Anda mendapat balasan pahala dan barokah Al Qur'an</p>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>