<div class="card-body p-0 d-flex flex-column" wire:poll.10s>
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-1 mb-8">
        <div class="d-flex align-items-center gap-2">
            <span
                class="mb-0 w-48-px h-48-px bg-lilac-100 text-lilac-600 flex-shrink-0 text-white d-flex justify-content-center align-items-center rounded-circle h6 mb-0">
                <i class="ri-award-fill"></i>
            </span>
            <div>
                <h6 class="fw-semibold mb-2">{{ $submissionreceived }}</h6>
                <span class="fw-medium text-secondary-light text-sm">Total Bantuan
                    Diterima</span>
            </div>
        </div>
    </div>
    <p class="text-sm mb-0 mt-auto px-3 pb-2">
        <span class="text-lilac-600">{{ $yearsubmissionreceived }}</span>
        Bantuan diterima tahun ini.
    </p>
</div>
