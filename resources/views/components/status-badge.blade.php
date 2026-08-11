
@if (strtoupper($type) === 'TIDAK AKTIF')
    <span class="inline-flex items-center gap-2 rounded-full border border-red-200
     bg-red-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-red-700">
        Tidak Aktif
    </span>
@else
    <span class="inline-flex items-center gap-2 rounded-full border border-emerald-200
     bg-emerald-100 px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-emerald-700">
        Aktif
    </span>
@endif