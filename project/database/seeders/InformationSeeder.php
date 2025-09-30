<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    private function generateUniqueSlug($title)
    {
        $slug = Str::slug($title, '-');

        $randomCode = Str::lower(Str::random(5));
        $slug = $slug . '-' . $randomCode;

        $originalSlug = $slug;
        $count = 1;

        while (Information::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }

        return $slug;
    }

    public function run(): void
    {

        DB::table('informations')->truncate();

        DB::table('informations')->insert([
            [
                'title' => 'Serah Terima Kunci Bantuan Renovasi Rumah Tidak Layak Huni',
                'slug' => $this->generateUniqueSlug('Serah Terima Kunci Bantuan Renovasi Rumah Tidak Layak Huni'),
                'body' => '<p>Pemerintah Kabupaten X melalui Dinas Perumahan secara resmi menyerahkan kunci rumah hasil program bantuan perbaikan Rumah Tidak Layak Huni (RTLH) kepada keluarga penerima pada hari ini. Kegiatan serah terima berlangsung secara sederhana namun khidmat di halaman rumah penerima di Desa Sumber Rejeki.</p><h2>Tujuan Program</h2><p>Program bantuan RTLH bertujuan meningkatkan kualitas hunian keluarga kurang mampu agar memenuhi standar keselamatan, kesehatan, dan kenyamanan. Bantuan mencakup perbaikan struktur atap, dinding, lantai, dan fasilitas sanitasi dasar.</p><h2>Pelaksana dan Penerima</h2><p>Serah terima dihadiri oleh perwakilan Dinas Perumahan Kabupaten X, perangkat desa, serta tokoh masyarakat setempat. Salah seorang penerima, Ibu Siti (nama samaran), menyatakan rasa syukur atas bantuan yang diterimanya.</p><blockquote>“Alhamdulillah, saya dan keluarga sangat terbantu. Sekarang anak-anak bisa tidur nyenyak tanpa takut bocor saat hujan,” ujar Ibu Siti usai menerima kunci rumah.</blockquote><p>Kepala Dinas Perumahan, Bapak H. A. Prabowo, mengatakan bahwa program ini dilakukan berdasarkan data rumah prioritas yang diajukan desa dan telah diverifikasi tim teknis.</p><blockquote>“Kami mendorong sinergi antara pemerintah kabupaten, desa, dan masyarakat agar bantuan tepat sasaran dan berdampak besar kepada kesejahteraan keluarga,” jelasnya.</blockquote><h2>Rincian Bantuan</h2><ul><li>Perbaikan struktur atap dan dinding</li><li>Pemasangan lantai beton sederhana</li><li>Penyediaan fasilitas sanitasi (WC sederhana)</li><li>Pembersihan dan pengecatan bagian luar rumah</li></ul><p>Setiap rumah yang menerima bantuan mendapatkan laporan pekerjaan dan kuitansi bahan sebagai dokumen pertanggungjawaban.</p><h2>Pengawasan dan Tindak Lanjut</h2><p>Dinas Perumahan akan melakukan monitoring berkala untuk memastikan kualitas pekerjaan dan menampung masukan dari warga. Program lanjutan akan diarahkan ke pelatihan sanitasi dan perawatan rumah agar manfaat jangka panjang dapat terwujud.</p><p>Untuk informasi lebih lanjut tentang program RTLH atau pengajuan calon penerima pada periode berikutnya, warga dapat menghubungi Dinas Perumahan Kabupaten X melalui:</p><address>Dinas Perumahan Kabupaten X — Jalan Pemuda No. 10, Telp: (031) 123-4567, Email: <a href="mailto:perumahan@kabx.go.id">perumahan@kabx.go.id</a></address><p style="font-size:small;color:#666;">Catatan: Nama penerima dan lokasi tertentu disamarkan demi privasi keluarga.</p>',
                'small_thumbnail' => 'f924fe89-4eaa-417c-92d4-9e8c0d73224d.jpg',
                'big_thumbnail' => '5a7719fe-70ff-4cfd-9c17-b791988c71dc.jpg',
            ],
        ]);

        DB::table('informations')->update([
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
