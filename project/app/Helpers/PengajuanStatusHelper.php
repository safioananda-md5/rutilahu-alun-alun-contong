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

    public static function Revenue($revenue)
    {
        $revenueValue = 0;
        if ($revenue > 4000000) {
            $revenueValue = 1;
        } elseif ($revenue > 3000000 && $revenue <= 4000000) {
            $revenueValue = 2;
        } elseif ($revenue > 2000000 && $revenue <= 3000000) {
            $revenueValue = 3;
        } elseif ($revenue > 1000000 && $revenue <= 2000000) {
            $revenueValue = 4;
        } elseif ($revenue <= 1000000) {
            $revenueValue = 5;
        }
        return 'Rp ' . number_format($revenueValue, 0, ',', '.') ?? '-- Nomial tidak ditentukan --';
    }

    public static function Asset($asset)
    {
        $assetValue = 0;
        if ($asset > 30000000) {
            $assetValue = 1;
        } elseif ($asset > 15000000 && $asset <= 30000000) {
            $assetValue = 2;
        } elseif ($asset > 5000000 && $asset <= 15000000) {
            $assetValue = 3;
        } elseif ($asset <= 5000000) {
            $assetValue = 4;
        }
        return 'Rp ' . number_format($assetValue, 0, ',', '.') ?? '-- Nomial tidak ditentukan --';
    }

    public static function Dependents($dependents)
    {
        $dependentsValue = 0;
        if ($dependents === 1) {
            $dependentsValue = 1;
        } elseif ($dependents === 2) {
            $dependentsValue = 2;
        } elseif ($dependents === 3) {
            $dependentsValue = 3;
        } elseif ($dependents === 4) {
            $dependentsValue = 4;
        } else {
            $dependentsValue = 5;
        }

        return $dependentsValue ?? '-- Tanggungan tidak ditentukan --';
    }

    public static function BuildingArea($building_area)
    {
        $bulding_areaValue = 0;
        if ($building_area > 120) {
            $bulding_areaValue = 1;
        } elseif ($building_area > 90 && $building_area <= 120) {
            $bulding_areaValue = 2;
        } elseif ($building_area > 60 && $building_area <= 90) {
            $bulding_areaValue = 3;
        } elseif ($building_area > 30 && $building_area <= 60) {
            $bulding_areaValue = 4;
        } elseif ($building_area <= 30) {
            $bulding_areaValue = 5;
        }

        return $bulding_areaValue ?? '-- Luas Bangunan tidak ditentukan --';
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
