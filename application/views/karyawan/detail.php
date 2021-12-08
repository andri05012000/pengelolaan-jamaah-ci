<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pendaftaran Jamaah</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <style>
        @page { size: A4 }
      
        h1 {
            font-weight: bold;
            font-size: 20pt;
            text-align: center;
        }
      
        table {
            border-collapse: collapse;
            width: 100%;
        }
      
        .table th {
            padding: 8px 8px;
            border:1px solid #000000;
            text-align: center;
        }
      
        .table td {
            padding: 3px 3px;
            border:1px solid #000000;
        }
      
        .text-center {
            text-align: center;
        }
    </style>
     <script>
      window.console = window.console || function(t) {};
    </script>
    <script>
      window.print();
    </script>
</head>
<body class="A4">
    <section class="sheet padding-10mm">
     <table style="border-collapse: collapse; width: 100%;" border="0">
      <tbody>
      <tr>
      <td style="width: 76.2699%;">
      <h1 style="text-align: left;">Berkah FTI Untuk Negeri</h1>
      <h3 style="text-align: left;">PT MUSTHAFA ARY TOUR<br />UMROH DAN HAJI PLUS -IZIN PPIU NO.97 TAHUN 2020</h3>
      <p style="text-align: left;">Head Office : Jl. Raya Panemon / PP Tahfidzul Quran Al-Mubarok Yatim-Dhuafa, Kecamatan Kudu,Kabupaten Jombang, Jawa Timur<br />Phone / Whatsapp : 085730050334 Website :www.ftigroup.co.id &ndash;www.ftiberkah.com</p>
      </td>
      <td style="width: 21.6423%;">
      <h1><img style="float: right;" src="<?php echo base_url(); ?>logo.png" width="200" height="200" /></h1>
      </td>
      </tr>
      </tbody>
      </table>
      <h3 style="border-bottom: 1px solid rgba(0, 0, 0, 0.5);">&nbsp;</h3>
      <h1 style="text-align: center;">PENDAFTARAN</h1>
      <table style="border-collapse: collapse; width: 100%;" border="0">
      <tbody>
      <tr>
      <td style="width: 20%;">Tanggal Daftar</td>
      <td style="width: 80%;">:&nbsp;<?=$upload->tanggal?></td>
      </tr>
      <tr>
      <td style="width: 20%;">Nama</td>
      <td style="width: 80%;">:&nbsp;<?=$upload->nama_jamaah?></td>
      </tr>
      <tr>
      <td style="width: 20%;">NIK</td>
      <td style="width: 80%;">:&nbsp;<?=$upload->nik?></td>
      </tr>
      <tr>
      <td style="width: 20%;">Jenis Kelamin</td>
      <td style="width: 80%;">:&nbsp;<?=$upload->jenis_kelamin?></td>
      </tr>
      <tr>
      <td style="width: 20%;">No Handphone</td>
      <td style="width: 80%;">:&nbsp;<?=$upload->no_hp?></td>
      </tr>
      <tr>
      <td style="width: 20%;">Jenis Pembayaran</td>
      <td style="width: 80%;">:&nbsp;<?=$upload->jenis_pembayaran?>.<?=$upload->idtabel_jamaah?></td>
      </tr>
      </tr>
      <tr>
      <td style="width: 20%;">No Rekening</td>
      <td style="width: 80%;">:&nbsp;<?=$upload->no_rek?></td>
      </tr>
      </tr>
      <tr>
      <td style="width: 20%;">Nama Bank</td>
      <td style="width: 80%;">:&nbsp;<?=$upload->nama_bank?></td>
      </tr>
      <tr>
      <td style="width: 20%;">Verifikasi</td>
      <td style="width: 80%;">:&nbsp;<?=$upload->verifikasi?></td>
      </tr>
      <tr>
      <td style="width: 20%;">Bukti Pembayaran</td>
      <td style="width: 80%;">:</td>
      </tr>
      </tbody>
      </table>
      <img src="<?=base_url()?>assets/upload/images/<?=$upload->image?>" width="40%" height="40%" alt="<?=$upload->image?>"></td>
      <p>&nbsp;</p>
    </section>
</body>
</html>

