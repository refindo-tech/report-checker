<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversis SKS</title>
    <style>
        body {
            font-family: Times New Roman, Times, serif;
            font-size: 10px;
            margin: 0;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            position: relative;
        }

        .header .left {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .header .left img {
            max-width: 100px;
            height: auto;
        }

        .header .center {
            flex: 2;
            text-align: center;
        }

        .header .center h1,
        .header .center h2 {
            margin: 0;
        }

        .header::after {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background-color: transparent;
            margin-top: 5px;
            border-top: 0.5px solid black;
            border-bottom: 0.5px solid black;
            position: relative;
        }

        .page-break {
            margin-top: 5px;
        }

        .biodata-table {
            width: 80%;
            border-collapse: collapse;
        }

        .biodata-table td {
            padding: 2px 5px;
        }

        .biodata-table td:first-child {
            white-space: nowrap;
            padding-right: 3px;
        }

        .penilaian-table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            border: 1px solid black;
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
    <div class="header">
        <div class="left">
            <img src="{{ $path_img }}" alt="Logo Kampus">
        </div>
        <div class="center">
            <h1 style="color: #000000; font-weight: normal;">KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</h1>
            <h1 style="color: #000000;">UNIVERSITAS SULTAN AGENG TIRTAYASA</h1>
            <h2>Jl. Jendral Sudirman KM 03, Cilegon 42435</h2>
            <h2>Telp. (0254) 395502, 376712, Fax. (0254) 395440, 376712</h2>
            <h2>Website: www.ft.untirta.ac.id</h2>
        </div>
    </div>
    <div class="page-break">
        <h2 align="center">PENILAIAN MIKROSKILL KEGIATAN MBKM</h2>
        <table class="biodata-table">
            <tr>
                <td>Nama Reviewer</td>
                <td>: {{ $report->reviewer->name }}</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>: {{ $report->dosen->nip }}</td>
            </tr>
            <br>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>: {{ $report->user->name }}</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>: {{ $report->Mahasiswa->nim }}</td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>: {{ $report->Mahasiswa->fakultas }}</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>: {{ $report->Mahasiswa->prodi }}</td>
            </tr>
            <br>
            <tr>
                <td>Nama Mitra MBKM</td>
                <td>: {{ $report->mitra }}</td>
            </tr>
            <tr>
                <td>Alamat Mitra MBKM</td>
                <td>: {{ $report->addressMitra }}</td>
            </tr>
            <tr>
                <td>Waktu Kegiatan</td>
                <td>: {{ \Carbon\Carbon::parse($report->start_date)->translatedFormat('j F Y') }} -
                    {{ \Carbon\Carbon::parse($report->end_date)->translatedFormat('j F Y') }}</td>
            </tr>
            <tr>
                <td>Jenis Kegiatan</td>
                <td>: {{ $report->JenisKegiatan }}</td>
            </tr>
        </table>

        <table class="penilaian-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Capaian Mikroskill</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
                @php $totalSks = 0; @endphp
                @foreach ($pivotData as $data)
                    @php $totalSks += $data->Mikroskill->sks; @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->Mikroskill->name }}</td>
                        <td>{{ $data->Mikroskill->sks }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2" style="font-weight: bold; text-align: center;">Jumlah SKS Terkonversi</td>
                    <td style="text-align: center; font-weight: bold;">{{ $totalSks }}</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
