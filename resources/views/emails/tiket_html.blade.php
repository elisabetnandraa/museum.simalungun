<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Anda Berhasil Dipesan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        .ticket {
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .ticket-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .ticket-header h2 {
            color: #A91B0D;
            font-size: 24px;
        }
        .ticket-content {
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }
        .ticket-content .row {
            margin-bottom: 10px;
        }
        .ticket-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <div class="ticket-header">
            <h2>Ticket for Museum Kami</h2>
            <p>Nomor Tiket: {{ $pesanan->nomor_tiket }}</p>
        </div>
        <div class="ticket-content">
            <div class="row">
                <strong>Nama:</strong> {{ $pesanan->nama_lengkap }}
            </div>
            <div class="row">
                <strong>Jumlah Tiket:</strong> {{ $pesanan->jumlah }}
            </div>
            <div class="row">
                <strong>Tanggal Pemesanan:</strong> {{ $pesanan->tanggal_pemesanan }}
            </div>
        </div>
        <div class="ticket-footer">
            <p>Terima kasih telah memesan tiket di Museum Kami!</p>
        </div>
    </div>
</body>
</html>
