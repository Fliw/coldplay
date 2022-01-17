@extends('admin.master')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Info:</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="tim-icons icon-simple-remove"></i>
                                </button>
                            </div>
                        @endif
                        <span class="card-title" style="font-size:40px"> Tabel Album</span>
                        <button class="btn btn-primary float-right btn-lg" data-toggle="modal" data-target="#modalAdd"
                            data-backdrop="true">Baru</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table tablesorter " id="">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            NO.
                                        </th>
                                        <th>
                                            JUDUL
                                        </th>
                                        <th>
                                            DESKRIPSI
                                        </th>
                                        <th>
                                            TANGGAL RILIS
                                        </th>
                                        <th>
                                            LINK YOUTUBE
                                        </th>
                                        <th>
                                            GAMBAR COVER
                                        </th>
                                        <th>
                                            GENRE
                                        </th>
                                        <th>
                                            AKSI
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 0; ?>
                                    @foreach ($albums as $album)
                                        <?php $num++; ?>
                                        <tr>
                                            <td>
                                                {{ $num }}
                                            </td>
                                            <td>
                                                {{ $album->title }}
                                            </td>
                                            <td>
                                                {{ $album->description }}
                                            </td>
                                            <td>
                                                {{ $album->release }}
                                            </td>
                                            <td>
                                                {{ $album->youtube_link }}
                                            </td>
                                            <td>
                                                {{ $album->cover_image }}
                                            </td>
                                            <td>
                                                {{ $album->genre }}
                                            </td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm" data-toggle="modal"
                                                    data-target="#modalEdit" data-backdrop="true"
                                                    onclick="changeField('{{ $album }}')"><i
                                                        class="tim-icons icon-pencil"></i> Edit</button>
                                                <a href="album/delete/{{ $album->id }}">
                                                    <button class="btn btn-sm btn-danger"><i
                                                            class="tim-icons icon-trash-simple"></i>Delete</button></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.components.albums.modal-add')
            @include('admin.components.albums.modal-edit')
        @endsection
        @section('scripts')
            <script>
                var id = 0;

                function changeField(data) {
                    data = JSON.parse(data);
                    id = data.id;
                    $('#title').val(data.title);
                    $('#description').val(data.description);
                    $('#release').val(data.release);
                    $('#youtube_link').val(data.youtube_link);
                    $('#cover_image').val(data.cover_image);
                    $('#genre').val(data.genre);
                }

                function changeUrl() {
                    $('#formEdit').attr('action', 'album/update/' + id);
                    $('#formEdit').submit();
                }
            </script>
        @endsection
