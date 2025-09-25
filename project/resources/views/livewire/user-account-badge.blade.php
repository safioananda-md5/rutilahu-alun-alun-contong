<li class="dropdown" wire:poll.10s>
    <a href="javascript:void(0)">
        <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
        <span>Akun Pengguna</span>

        @if ($countVerification > 0)
            <iconify-icon icon="mdi:circle" class="text-danger ms-3" width="10" height="10"></iconify-icon>
        @endif
    </a>
    <ul class="sidebar-submenu">
        <li>
            <a href="{{ route('admin.verification.account_verify_admin') }}">
                <i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>
                Daftar Verifikasi Akun

                @if ($countVerification > 0)
                    <span class="badge bg-danger ms-3">{{ $countVerification }}</span>
                @endif
            </a>
        </li>
    </ul>
</li>
