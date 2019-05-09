<!-- DONE -->
<!-- Listing list-->
@extends('layouts.master')

@section('title')
Exarweb: Calculator
@endsection


@section('content')
<br>
@endsection



@section('content2')
<div class="row" style="padding:25px;">
    <div class="col-md-6">
        <h4>Calculator</h4>
    </div>
</div>
<hr/>
<!-- Section 2 -->
<div class="w3-container  w3-blue-gray w3-padding-32">
    <!--Awal bagian container-->
    <div class="W3-container">

        <div class="row">
            <div class="col-md-12">
                <p>
                    <label>Harga Rumah</label>
                    <input required class="form-control" type="number" name="price" id="price">
                </p>
                <p>
                    <label>DP / Uang Muka</label>
                    <input required class="form-control" type="number" name="downpayment" id="downpayment">
                </p>
                <p>
                    <label>Bunga (%) / Tahun</label>
                    <input required class="form-control" type="number" name="bunga" id="bunga" maxlength="2">
                </p>
                <p>
                    <label>Tenor (Bulan)</label>
                    <input required class="form-control" type="number" id="tenor" name="tenor">
                    {{-- <select name="tenor" class="form-control" id="tenor">
                        <option value="12">12 Bulan</option>
                        <option value="24">24 Bulan</option>
                        <option value="36">36 Bulan</option>
                        <option value="48">48 Bulan</option>
                        <option value="60">60 Bulan</option>
                        <option value="120">120 Bulan</option>
                    </select> --}}
                </p>
                <br/>
                <p>
                    <button type="button" class="w3-btn w3-green btn-block" id="btn_hitung">Hitung Cicilan</button>
                </p>
                <br/>
                <div id="result" style="color:#000000">

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#btn_hitung').click(function () {
        var sisa_bayar = parseFloat($('#price').val()) - parseFloat($('#downpayment').val());
        var tambah_bunga = parseFloat(sisa_bayar) * (parseFloat($('#bunga').val()) / 100);
        var total_cicilan = parseFloat((sisa_bayar + tambah_bunga) / $('#tenor').val()).toFixed(2);
        $('#result').html('<div class="well"><h4>Cicilan : <b>' + parseFloat(total_cicilan, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString() + '</b> / Bulan</h4></div>');
    });
</script>
@endsection
