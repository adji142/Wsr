<html>
    <head>
        <style>
            html {margin: 50mm; padding: 50mm;}
            body {margin: 50mm; padding: 50mm;}

            @page {
                /*size: 8.3in, 5.8in;*/
                /* {8.3in, 5.8in}  'em' 'ex' and % are not allowed; length values are width height */
                size: 8.3in, 5.8in;  
                /*sheet-size: 8.3in, 5.8in;*/
                /*sheet-size: A5-L;*/
                margin: 45mm 8mm 10mm 8mm;
                margin-header: 5mm; 
                margin-footer: 5mm;
                header: html_MyHeader1;
                footer: html_MyFooter1;
                marks: cross; /*crop | cross | none*/
                border: 1;
            }

            /* page kalau no-sheet-size
            page {

                size: 8.3in, 5.8in;  

                margin: 0.3cm;  
                margin-top: 5.1cm;
                margin-bottom: 0.1cm;  
                margin-header: 1cm; 
                margin-footer: 3cm; 
                header: html_MyHeader1;
                footer: html_MyFooter1;
                marks: none; 
            }
            */

            @page noheader {
                odd-header-name: _blank;
                even-header-name: _blank;
                odd-footer-name: _blank;
                even-footer-name: _blank;
            }
        </style>
    </head>
    <body> 
        <htmlpageheader name="MyHeader1">
            <div>
                <h1>PICKING LIST ({PAGENO} of {nbpg})</h1>
                <table width="100%" cellspacing="0" cellpadding="2">
                    <tr>
                        <td width="15%">Tgl. Picking List</td>
                        <td>: {{$cetak->tglpickinglist}}</td>
                        <td width="11%">Toko</td>
                        <td>: {{ $cetak->toko ? $cetak->toko->namatoko : ''}} {{($cetak->toko) ? $cetak->toko->id : ''}}</td>
                    </tr>
                    <tr>
                        <td>No. Picking List</td>
                        <td>: {{$cetak->nopickinglist}}</td>
                        <td colspan="2" rowspan="2" style="vertical-align: top;">{{ $cetak->toko ? $cetak->toko->alamat.', '.$cetak->toko->kota.', '.$cetak->toko->kecamatan.', '.$cetak->toko->customwilayah : ''}}</td>
                    </tr>
                    <tr>
                        <td>Expedisi</td>
                        <td>: {{ $cetak->expedisi ? $cetak->expedisi->namaexpedisi : ''}} </td>
                    </tr>
                    <tr>
                        <td>Kode Salesman</td>
                        <td>: {{ $cetak->salesman ? $cetak->salesman->kodesales : ''}} </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>Catatan Penjualan</td>
                        <td>: {{ $cetak->catatanpenjualan}} </td>
                        <td colspan="2"></td>
                    </tr>
                </table>
            </div>
        </htmlpageheader>
        <htmlpagefooter name="MyFooter1">
            <table width="100%" cellspacing="0" cellpadding="0" style="border-top: 1px solid #000;">
                <tr>
                    <th width="25%" height="40px"></th>
                    <th width="25%"></th>
                    <th width="25%"></th>
                    <th width="25%"></th>
                </tr>
                <tr>
                    <td style="text-align: center;">Piutang</td>
                    <td style="text-align: center;">Penjualan</td>
                    <td style="text-align: center;">Stock</td>
                    <td style="text-align: center;">Checker</td>      
                </tr>
            </table>
            <i>{{$user->name.', '.date('d-m-Y h:i:s').', cetakan ke-'.$cetak->print}}</i>
        </htmlpagefooter>

        <table width="100%" cellspacing="0" cellpadding="2">
            <h1 style="margin-top: 5%;">PICKING LIST ({PAGENO} of {nbpg})</h1>
                <table width="100%" cellspacing="0" cellpadding="2">
                    <tr>
                        <td width="15%">Tgl. Picking List</td>
                        <td>: {{$cetak->tglpickinglist}}</td>
                        <td width="11%">Toko</td>
                        <td>: {{ $cetak->toko ? $cetak->toko->namatoko : ''}} {{($cetak->toko) ? $cetak->toko->id : ''}}</td>
                    </tr>
                    <tr>
                        <td>No. Picking List</td>
                        <td>: {{$cetak->nopickinglist}}</td>
                        <td colspan="2" rowspan="2" style="vertical-align: top;">{{ $cetak->toko ? $cetak->toko->alamat.', '.$cetak->toko->kota.', '.$cetak->toko->kecamatan.', '.$cetak->toko->customwilayah : ''}}</td>
                    </tr>
                    <tr>
                        <td>Expedisi</td>
                        <td>: {{ $cetak->expedisi ? $cetak->expedisi->namaexpedisi : ''}} </td>
                    </tr>
                    <tr>
                        <td>Kode Salesman</td>
                        <td>: {{ $cetak->salesman ? $cetak->salesman->kodesales : ''}} </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>Catatan Penjualan</td>
                        <td>: {{ $cetak->catatanpenjualan}} </td>
                        <td colspan="2"></td>
                    </tr>
                </table>
            <thead>
                <tr>
                    <th width="5%" style="border-bottom: 1px solid #000;">No.</th>
                    <th width="10%" style="border-bottom: 1px solid #000;">Kode Area</th>
                    <th width="45%" style="border-bottom: 1px solid #000;">Barang</th>
                    <th width="10%" style="border-bottom: 1px solid #000;">Qty. SO</th>
                    <th width="20%" colspan="2" style="border-bottom: 1px solid #000;">Dikirim</th>
                    <th width="10%" style="border-bottom: 1px solid #000;">Qty. Gd.</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
            <tbody>
                @foreach($details as $detail)
                <tr>
                    <td style="text-align: center;">{{$loop->iteration}}.</td>
                    <td>{{$detail->barang->area1}}</td>
                    <td>{{$detail->barang->namabarang}}</td>
                    <td style="text-align: center;">{{$detail->qtysoacc ? $detail->qtysoacc : '0'}}</td>
                    @if($loop->iteration%2 == 0)
                    <td></td>
                    <td style="border-bottom: 1px solid #DDD;">{{$loop->iteration}}.</td>
                    @else
                    <td style="border-bottom: 1px solid #DDD;">{{$loop->iteration}}.</td>
                    <td></td>
                    @endif
                    <td style="text-align: center;">{{$detail->qtystockgudang ? $detail->qtystockgudang : '0'}}</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </body>
</html>
{{-- <sethtmlpagefooter name="MyFooter" page="ALL"/> --}}

{{-- <sethtmlpageheader name="MyHeader1" value="on" show-this-page="1"/> --}}