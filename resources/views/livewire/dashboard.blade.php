<div>
    <div class="mb-3">
        <span class="app-brand-text demo" style="text-transform:capitalize">Dashboard</span>
    </div>
    <div class="row g-3 mb-3">
        <div class="col-3 ">
            <x-card-dashboard />
        </div>
        <div class="col-6">
            <x-grafik />
        </div>
        <div class="col-3">
            <x-presentase />
        </div>
    </div>
    <div class="mb-3">
        <span class="app-brand-text demo" style="text-transform:capitalize">Data Pengajuan</span>
    </div>
    <div class="row g-3 mb-3">
        <x-card-pengajuan />
        <x-card-pengajuan pengajuan="Pengajuan Dikirim" icon="bx bx-log-in-circle" jumlahan="1"
            persen="100% presentase" />
        <x-card-pengajuan pengajuan="Pengajuan Diproses" icon="bx bx-atom text-info" jumlah="0" persen="0% presentase"
            color="text-info" />
        <x-card-pengajuan pengajuan="Pengajuan Diproses" icon="bx bx-check-shield text-success" jumlah="0"
            persen="0 presentase" color="text-success" />
    </div>
</div>