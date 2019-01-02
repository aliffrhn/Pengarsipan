@extends('master')

@section('title', 'index')

@section('grandtitle', 'Entri')
@section('subtitle', 'Surat Keluar')

@section('breadkiri', 'Surat Keluar')
@section('breadkanan', 'Entri Baru')

@section('content')
<form action="/action_page.php" enctype="multipart/form-data">
  <div class="form-group">
   <label for="noagenda">No. Agenda:</label>
   <input type="text" class="form-control" id="noagenda">
  </div>
  <div class="form-group">
   <label for="nmrsurat">Nomor Surat:</label>
   <input type="text" class="form-control" id="nmrsurat">
 </div>
 <div class="form-group">
  <label for="tglsrt">Tanggal Surat:</label>
  <input type="date" class="form-control" id="tglsrt">
 </div>
 <div class="form-group">
  <label for="tgltrm">Tanggal Terima:</label>
  <input type="date" class="form-control" id="tgltrm">
 </div>
 <div class="form-group">
  <label for="sumber">Sumber Surat:</label>
  <input type="text" class="form-control" id="sumber">
 </div>
 <div class="form-group">
  <label for="prhl">Perihal:</label>
  <textarea class="form-control" rows="5" id="prhl"></textarea>
 </div>
 <div class="form-group">
  <label for="krtgn">Keterangan:</label>
  <textarea class="form-control" rows="5" id="krtgn"></textarea>
 </div>
 <div class="form-group">
  <label for="imgInp">File Surat:</label>
  <input type="file" name="file" id="imgInp">
  <img id="blah" src="#" alt="Your Image">
 </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection
