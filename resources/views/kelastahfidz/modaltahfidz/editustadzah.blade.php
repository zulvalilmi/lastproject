
<!-- Modal -->
<div class="modal fade" id="edit{{ $ustadzah->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Ustadzah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ustadzah.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input value="{{ $ustadzah->name }}" type="text" required name="name" class="form-control" id="name">
                        <input type="hidden" name="id" value="{{ $ustadzah->id }}">
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input value="{{ $ustadzah->password }}" type="password" required name="password" class="form-control" id="password">
                        <input type="hidden" name="id" value="{{ $ustadzah->password }}">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>