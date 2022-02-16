<div class="a1">
    <div class="form-group">
        <label for="nip">NIP</label>
        <input type="text" class="form-control" name="nip" id="nip" aria-describedby="nip"  value="{{ $modals->nip }}">
    </div><br>
    <div class="form-group">
        <label for="nama">NAMA</label>
        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="nama"  value="{{ $modals->nama }}">
    </div><br>
    <div class="form-group">
        <label for="divisi">DIVISI</label>
        <input type="text" class="form-control" name="divisi" id="divisi" aria-describedby="divisi"  value="{{ $modals->divisi }}">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onClick="update({{ $modals->id }})" data-dismiss="modal" data-bs-dismiss="modal">Update</button>
    </div>

</div>