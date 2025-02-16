<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Order</title>
    <style>
        body {
            font-family: Times New Roman, Times, serif;
            /* padding: 20px;
            border: solid 3px #000; */
            font-size: 10px;
        }

        /* Mengatur border dan layout secara keseluruhan */
        .header {
            display: flex;
            justify-content: space-between;
            /* Menyusun elemen kiri dan kanan */
            align-items: center;
            /* Menyusun elemen agar sejajar secara vertikal */
            border: 2px solid black;
            /* Menambahkan border di sekitar header */
            padding: 10px;
            /* Memberikan ruang di dalam header */
        }

        /* Gaya untuk elemen kiri (logo) */
        .header .left img {
            max-width: 100px;
            /* Ukuran gambar logo yang sesuai */
            height: auto;
            /* Menjaga rasio aspek gambar */
            margin-right: 20px;
            /* Memberikan jarak antara logo dan teks */
        }

        /* Gaya untuk elemen tengah (teks) */
        .header .center {
            text-align: center;
            /* Menyusun teks di tengah */
            flex-grow: 0;
            /* Mencegah teks mengisi ruang yang tersisa */
            margin-left: 20px;
        }

        /* Gaya untuk setiap elemen heading di bagian tengah */
        .header .center h1,
        .header .center h2,
        .header .center h3 {
            margin: 0;
            /* Menghapus margin default untuk heading */
        }

        .address {
            color: #504f4f;
        }

        .purchase {
            text-align: center;
            text-decoration: underline;
            border-top: solid 4px;
            background-color: #adabab;
        }

        .border {
            border: 1px solid #000;
            padding: 10px;
            margin-bottom: 20px;
        }

        .th-3 {
            background-color: #adabab;
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            font-size: 12px;
        }

        .table-3 {
            width: 100%;
            border: 4px solid black;
            border-collapse: collapse;
            border-top: none;
        }
    </style>
</head>

<body>
    <table style="border: solid 4px; border-collapse: collapse;">
        <tr>
            <td style="border-right: none; padding: 10px;" colspan="1">
                <img src="{{ $path_img }}" alt="Logo Kampus"
                    style="max-width: 90px; height: auto;">
            </td>
            <td style="text-align: center; padding: 10px;" colspan="5">
                <h1 style="color: #0054a4; margin: 0; padding: 0; font-weight: normal;">KEMENTERIAN PENDIDIKAN DAN
                    KEBUDAYAAN</h1>
                <h1 style="color: #0054a4; margin: 0; padding: 0;">UNIVERSITAS SULTAN AGENG TIRTAYASA</h1>
                <h2 style="margin: 0; padding: 0; font-weight: normal;">Jl. Jendral Sudirman KM 03, Cilegon 42435</h2>
                <h2 style="margin: 0; padding: 0; font-weight: normal;">Telp. (0254) 395502, 376712, Fax. (0254) 395440,
                    376712</h2>
                <p class="address" style="margin: 0;">Specialist Body Builder Vehicle, Dump Truck, Tank and Other
                    Special Purpose Vehicle
                    Kp. Bungaok, Desa Caringin, Kec. Legok, Tangerang Banten, 15820</p>
                <div class="contact-info">
                    <a href="https://wa.me/6285283951109" style="color: black;"> No. HP (WA) : +62 852-8395-1109 |</a>
                    <a href="mailto:trirestubersama@gmail.com" style="color: red;">Email : trirestubersama@gmail.com</a>
                </div>
            </td>
        </tr>
        <tr class="purchase">
            <td colspan="6">
                <h1 style="text-align: center;"><b>PURCHASE ORDER</b></h1>
            </td>
        </tr>
    </table>

</body>

</html>
