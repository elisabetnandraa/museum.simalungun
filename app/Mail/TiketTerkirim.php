<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\PesanTiket;

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
        return $this->subject('Tiket Anda Berhasil Dipesan')
                    ->view('emails.tiket_html')
                    ->with([
                        'pesanan' => $this->pesanan,
                    ]);
    }
}
