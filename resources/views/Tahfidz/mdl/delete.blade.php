<div class="modal fade" id="delete{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tahfidz.delete') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p class="text-center">Hapus Kelas Tahfidz <strong style="color: red;">{{ $t->nama_tahfidz }}</strong> ?</p>
                    <input type="hidden" name="id" value="{{ $t->id }}">         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
    </form>
    </div>
</div>