<div class="modal fade modal-black" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">edit mode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
            <div class="modal-body">
                <h2>Edit Event</h2>
                <form action="/admin/event/update" method="POST" id="formEdit">
                    @csrf
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-pencil"></i>
                            </div>
                        </div>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Nama Event"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Event</label>
                        <textarea id="description" class="form-control" name="description"
                            id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-pin"></i>
                            </div>
                        </div>
                        <input id="location" type="text" class="form-control" name="location" placeholder="Lokasi"
                            required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Tanggal Event</label>
                            <input id="date" type="date" class="form-control" name="date" required>
                        </div>
                        <div class="col">
                            <label for="">Jam Event</label>
                            <input id="time" type="time" class="form-control" name="time" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="changeUrl()" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
