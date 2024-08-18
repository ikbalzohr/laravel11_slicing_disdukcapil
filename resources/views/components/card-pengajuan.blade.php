@props(['icon' => 'bx-mail-send text-primary', 'pengajuan' => 'Total Pengajuan', 'jumlah' => '1', 'persen' => '0',
'color' => ''])

<div class="col-3">
    <div class="card align-items-center">
        <h5 class="card-title mb-5">{{ $pengajuan }}</h5>
        <i class='bx {{ $icon }} fs-3 mb-5'></i>
        <h3 class="{{ $persen ? 'mb-1' : 'mb-4' }}">{{ $jumlah }}</h3>
        <div class="mb-3 small {{ $color }}">{{ $persen ? $persen : '' }}</div>
    </div>
</div>