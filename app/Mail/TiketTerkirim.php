<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\PesanTiket;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;

class TiketTerkirim extends Mailable
{
    use Queueable, SerializesModels;

    public $pesanan;

    public function __construct(PesanTiket $pesanan)
    {
        $this->pesanan = $pesanan;
    }

    public function build()
{
    // Generate PNG
    $html = view('emails.tiket_html', ['pesanan' => $this->pesanan])->render();
    $fileName = 'tiket-' . $this->pesanan->nomor_tiket . '.png';
    $filePath = storage_path('app/public/tiket/' . $fileName);

    if (!file_exists(dirname($filePath))) {
        mkdir(dirname($filePath), 0755, true);
    }

    Browsershot::html($html)
        ->windowSize(600, 600)
        ->waitUntilNetworkIdle()
        ->save($filePath);

    return $this->subject('Tiket Anda Berhasil Dipesan')
                ->view('emails.notif_text') 
                ->attach($filePath, [
                    'as' => 'Tiket-MuseumKami.png',
                    'mime' => 'image/png',
                ])
                ->with([
                    'pesanan' => $this->pesanan,
                ]);
}
}
