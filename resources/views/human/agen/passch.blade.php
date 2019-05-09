<!-- DONE -->
<!-- TAMBAH KARYAWAN -->
@extends('layouts.master')

@section('title')
Ganti password
@endsection

@section('content')
@endsection


@section('content2')



<!-- Section 2 -->
<br><br><br><br><br>
<div class="w3-container w3-blue-gray w3-padding-32">
    <div class="W3-container" style="color:#000 !important">
        <h3>Ganti Password</h3>
        
        <form class="w3-container" action="{{ route('Human.Agen.Passsimpan') }}" method="post">
            <p>
                <label>Password Baru</label>
                <input class="w3-input" name="password" type="password" required></p>


            <input type="submit" class="w3-button w3-red w3-round-large" name="submit" value="Ganti Password">
            {{ csrf_field() }}
        </form>

    </div>
</div>
</div>


@endsection
