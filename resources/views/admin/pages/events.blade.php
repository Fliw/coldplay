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
                        <span class="card-title" style="font-size:40px"> Tabel Event</span>
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
                                            LOKASI
                                        </th>
                                        <th>
                                            TANGGAL
                                        </th>
                                        <th>
                                            JAM
                                        </th>
                                        <th>
                                            AKSI
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $num = 0; ?>
                                    @foreach ($events as $event)
                                        <?php $num++; ?>
                                        <tr>
                                            <td>
                                                {{ $num }}
                                            </td>
                                            <td>
                                                {{ $event->title }}
                                            </td>
                                            <td>
                                                {{ $event->description }}
                                            </td>
                                            <td>
                                                {{ $event->location }}
                                            </td>
                                            <td>
                                                {{ $event->date }}
                                            </td>
                                            <td>
                                                {{ $event->time }}
                                            </td>
                                            <td>
                                                <button class="btn btn-secondary btn-sm" data-toggle="modal"
                                                    data-target="#modalEdit" data-backdrop="true"
                                                    onclick="changeField('{{ $event }}')"><i
                                                        class="tim-icons icon-pencil"></i> Edit</button>
                                                <a href="event/delete/{{ $event->id }}">
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
            @include('admin.components.events.modal-add')
            @include('admin.components.events.modal-edit')
        @endsection
        @section('scripts')
            <script>
                var id = 0;

                function changeField(data) {
                    data = JSON.parse(data);
                    id = data.id;
                    $('#title').val(data.title);
                    $('#description').val(data.description);
                    $('#location').val(data.location);
                    $('#date').val(data.date);
                    $('#time').val(data.time);
                }

                function changeUrl() {
                    $('#formEdit').attr('action', 'event/update/' + id);
                    $('#formEdit').submit();
                }
            </script>
        @endsection
