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

    public static function Legality($certificate)
    {
        $list = [
            1 => 'Hilang/ Tidak Bisa Menunjukan',
            2 => 'SHPL',
            3 => 'Sewa/ Milik Pihak Lain',
            4 => 'Letter C',
            5 => 'Petok D',
            6 => 'SHGB',
            7 => 'SHM',
        ];
        return $list[$certificate] ?? 'Surat Legalitas Tidak Dikenal';
    }

    public static function Roof($condition)
    {
        $list = [
            1 => 'Rusak Ringan (genteng bocor, pecah, genteng sebagian)',
            2 => 'Rusak Sedang (rangka kayu lapuk / keropos, atap asbes / seng)',
            3 => 'Rusak Berat (roboh, tidak memiliki atap)',
        ];
        return $list[$condition] ?? 'Kondisi Tidak Dikenal';
    }

    public static function Wall($condition)
    {
        $list = [
            1 => 'Dinding Tidak Diplester',
            2 => 'Dinding Kurang Tinggi',
            3 => 'Bata Kualitas Rendah/ Dinding Lembab',
            4 => 'Tidak Ada Tembok/ Tumpang Tetangga',
        ];
        return $list[$condition] ?? 'Kondisi Tidak Dikenal';
    }

    public static function Floor($condition)
    {
        $list = [
            1 => 'Lantai Keramik Sebagai',
            2 => 'Lantai Non Keramik',
            3 => 'Lantai Rendah Keramik',
            4 => 'Lantai Rendah Non Keramik',
        ];
        return $list[$condition] ?? 'Kondisi Tidak Dikenal';
    }
}
