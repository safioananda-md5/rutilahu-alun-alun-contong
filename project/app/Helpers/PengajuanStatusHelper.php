<?php

namespace App\Helpers;

class PengajuanStatusHelper
{
    public static function Status($status)
    {
        $list = [
            1 => '<span class="badge text-bg-danger">Pengajuan Dibatalkan</span>',
            2 => '<span class="badge text-bg-warning">Menunggu Verifikasi RT</span>',
            3 => '<span class="badge text-bg-danger">Pengajuan ditolak oleh RT</span>',
            4 => '<span class="badge text-bg-warning">Menunggu Verifikasi RW</span>',
            5 => '<span class="badge text-bg-danger">Pengajuan ditolak oleh RW</span>',
            6 => '<span class="badge text-bg-warning">Menunggu Verifikasi Kelurahan</span>',
            7 => '<span class="badge text-bg-danger">Pengajuan ditolak oleh Kelurahan</span>',
            8 => '<span class="badge text-bg-primary">Disetujui (Calon Penerima)</span>',
            9 => '<span class="badge text-bg-success">Penerima Bantuan Rutilahu</span>',
        ];

        return $list[$status] ?? 'Status Tidak Dikenal';
    }
}
