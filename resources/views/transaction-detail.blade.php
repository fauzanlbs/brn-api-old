<!DOCTYPE html>
<html>

<head>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Faktur No#{{ $payment->id }}</title>
    <link rel="stylesheet" media="all" href="{{ asset('css/invoice.css') }}" />
    <style>
        .template-london .info-block .client>div,
        .template-london .info-block .user>div {
            line-height: 22px;
            padding-bottom: 1px !important;
        }

        body {
            background-color: white;
        }

        .template-london .info-block h1 {
            color: #2765EB;
        }

        .template-london .table-top {
            border-bottom: 2px solid #2765EB;
        }

    </style>
</head>

<body>
    <header></header>
    <main role='main'>
        <div class='container'>
            <div class='main'>
                <div class='invoice-preview'>
                    <div class='flex-line preview-header'>
                        <div class='title-block'>
                            <h3>#{{ $payment->id }}</h3>
                        </div>
                    </div>
                    <div class='template-london'>
                        <div class='block-line invoice-info'>
                            <table class='table-top'>
                                <tr class='info-block'>
                                    <td class='description-right'>
                                        <div class='invoice-date'>
                                            <div class='item-title'>Hari/Tanggal:</div>
                                            <div class='item-value'>
                                                {{ $payment->date_paid->translatedFormat('l, d-m-Y') }}</div>
                                        </div>
                                        <div class='due-date'>
                                            <div class='item-title'>Siswa:</div>
                                            <table style="margin-left: -2px">
                                                <tr>
                                                    <td>NIS</td>
                                                    <td> &nbsp;&nbsp;&nbsp;{{ $payment->student->nis }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td> &nbsp;&nbsp;&nbsp;{{ $payment->student->user->name }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kelas</td>
                                                    <td> &nbsp;&nbsp;
                                                        {{ $payment->student->academyClassStudent->name }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td class='description-left'>
                                    </td>
                                    <td class='total-value'>
                                        <div class='item-title'>
                                            Total
                                        </div>
                                        <div class='item-value'>
                                            <h1>
                                                Rp. {{ number_format($payment->amount, 2, ',', '.') }}
                                            </h1>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class='invoice-items-table'>
                            <table class='lines-table'>
                                <thead>
                                    <tr>
                                        <th class='th-item'>Keterangan</th>
                                        <th class='th-quantity'>Tahun SPP</th>
                                        <th class='th-cost'>Bulan Dibayar</th>
                                        <th class='th-price'>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='invoice-line'>
                                        <td class='td-item'>
                                            {{ $payment->note }}
                                        </td>
                                        <td class='td-quantity'>
                                            {{ $payment->schoolFee->year }}
                                        </td>
                                        <td class='td-cost'>
                                            @php
                                                switch ($payment->month) {
                                                    case 1:
                                                        echo 'January';
                                                        break;
                                                    case 2:
                                                        echo 'February';
                                                        break;
                                                    case 4:
                                                        echo 'March';
                                                        break;
                                                    case 4:
                                                        echo 'April';
                                                        break;
                                                    case 5:
                                                        echo 'May';
                                                        break;
                                                    case 6:
                                                        echo 'June';
                                                        break;
                                                    case 7:
                                                        echo 'July';
                                                        break;
                                                    case 8:
                                                        echo 'August';
                                                        break;
                                                    case 9:
                                                        echo 'September';
                                                        break;
                                                    case 10:
                                                        echo 'October';
                                                        break;
                                                    case 11:
                                                        echo 'November';
                                                        break;
                                                    case 12:
                                                        echo 'December';
                                                        break;
                                                
                                                    default:
                                                        echo 'December';
                                                        break;
                                                }
                                            @endphp
                                        </td>
                                        <td class='td-price'>
                                            Rp. {{ number_format($payment->amount, 2, ',', '.') }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <table class='invoice-total'>
                            <tr class='total-row'>
                                <td class='total-title'>
                                    Sub Total:
                                </td>
                                <td class='total-value'>
                                    Rp. {{ number_format($payment->amount, 2, ',', '.') }}
                                </td>
                            </tr>
                        </table>
                        <div class='row'></div>
                        <div class='notes'>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</body>

</html>
