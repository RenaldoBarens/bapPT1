<div class="form-group {{ $errors->has('kode_mataKuliah') ? 'has-error' : ''}}">
    <label for="kode_mataKuliah" class="control-label">{{ 'Kode Matakuliah' }}</label>
    <input class="form-control" name="kode_mataKuliah" type="text" id="kode_mataKuliah" value="{{ isset($matakuliahrenaldo->kode_mataKuliah) ? $matakuliahrenaldo->kode_mataKuliah : ''}}" >
    {!! $errors->first('kode_mataKuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama_mataKuliah') ? 'has-error' : ''}}">
    <label for="nama_mataKuliah" class="control-label">{{ 'Nama Matakuliah' }}</label>
    <input class="form-control" name="nama_mataKuliah" type="text" id="nama_mataKuliah" value="{{ isset($matakuliahrenaldo->nama_mataKuliah) ? $matakuliahrenaldo->nama_mataKuliah : ''}}" >
    {!! $errors->first('nama_mataKuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sks') ? 'has-error' : ''}}">
    <label for="sks" class="control-label">{{ 'Sks' }}</label>
    <input class="form-control" name="sks" type="number" id="sks" value="{{ isset($matakuliahrenaldo->sks) ? $matakuliahrenaldo->sks : ''}}" >
    {!! $errors->first('sks', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
