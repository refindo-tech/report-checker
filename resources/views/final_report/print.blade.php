<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mikroskill</title>
    <style>
        body {
            font-family: Times New Roman, Times, serif;
            font-size: 10px;
            margin: 0;
            padding: 20px;
        }

        .header-table {
            width: 100%;
            border-bottom: 1px solid black;
        }

        .header-table td {
            vertical-align: middle;
        }

        .header-table .left {
            width: 20%;
            text-align: center;
        }

        .header-table .left img {
            max-width: 100px;
            height: auto;
        }

        .header-table .center {
            width: 80%;
            text-align: center;
        }

        .header-table .center h1,
        .header-table .center h2 {
            margin: 5px 0;
        }

        .content {
            width: 100%;
            font-size: 12px;
            margin: 20px 0;
            text-align: center;
        }

        .content h2 {
            text-decoration: underline;
        }

        .biodata-table,
        .penilaian-table {
            font-size: 12px;
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .biodata-table td {
            padding: 2px 5px; /* Mengurangi padding agar teks lebih dekat */
        }

        .biodata-table td:first-child {
            width: 25%;
            text-align: left;
            white-space: nowrap;
        }

        .biodata-table td:last-child {
            width: 75%;
            text-align: left;
        }

        .penilaian-table th,
        .penilaian-table td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        .penilaian-table th {
            background-color: #d3d3d3;
        }
        .penilaian-table tr:last-child {
            font-weight: bold;
            background-color: #f0f0f0;
            /* Warna abu-abu muda agar tampak lebih jelas */
        }
    </style>
</head>

<body>
    <table class="header-table">
        <tr>
            <td class="left">
                <img src="{{ $path_img }}" alt="Logo Kampus">
            </td>
            <td class="center">
                <h1>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h1>
                <h1>UNIVERSITAS SULTAN AGENG TIRTAYASA</h1>
                <h2>Jl. Jendral Sudirman KM 03, Cilegon 42435</h2>
                <h2>Telp. (0254) 395502, 376712, Fax. (0254) 395440, 376712</h2>
                <h2>Website: www.ft.untirta.ac.id</h2>
            </td>
        </tr>
    </table>

    <div class="content">
        <h2>PENILAIAN MIKROSKILL KEGIATAN MBKM</h2>
        
        <table class="biodata-table">
            <tr><td>Nama Reviewer</td><td>: ...........................................</td></tr>
            <tr><td>NIP</td><td>: ...........................................</td></tr>
            <br>
            <tr><td>Nama Mahasiswa</td><td>: ...........................................</td></tr>
            <tr><td>NIM</td><td>: ...........................................</td></tr>
            <tr><td>Fakultas</td><td>: ...........................................</td></tr>
            <tr><td>Program Studi</td><td>: ...........................................</td></tr>
            <br>
            <tr><td>Nama Mitra MBKM</td><td>: ...........................................</td></tr>
            <tr><td>Alamat Mitra MBKM</td><td>: ...........................................</td></tr>
            <tr><td>Waktu Kegiatan</td><td>: ...........................................</td></tr>
            <tr><td>Jenis Kegiatan</td><td>: ...........................................</td></tr>
        </table>

        <table class="penilaian-table">
            <tr>
                <th>NO</th>
                <th>Capaian Mikroskill</th>
                <th>SKS</th>
            </tr>
            <tr>
                <td>1</td>
                <td>...........................................</td>
                <td>...........................................</td>
            </tr>
            <tr>
                <td>2</td>
                <td>...........................................</td>
                <td>...........................................</td>
            </tr>
            <tr>
                <td>3</td>
                <td>...........................................</td>
                <td>...........................................</td>
            </tr>
            <tr>
                <td colspan="2" style="font-weight: bold; text-align: center;">Jumlah SKS</td>
                <td>...........................................</td>
            </tr>
        </table>
    </div>
</body>

</html>
