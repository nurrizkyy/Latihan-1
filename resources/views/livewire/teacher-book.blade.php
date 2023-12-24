<div class="content-wrapper">

    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Teacher Book </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Layout</a></li>
                        <li class="breadcrumb-item active">Top Navigation</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Form</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Special title treatment</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>


                            <form
                                @if ($id) wire:submit="update" @else wire:submit="save" @endif>
                                <div class="form-group">
                                    <label for="teacher_id">Pemilik :</label><br>
                                    <select wire:model="teacher_id">
                                        <option value="" disabled>-Pilih-</option>
                                        @foreach ($teacher as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="title">Judul Buku</label>
                                    <input wire:model="title" type="text" class="form-control" id="title"
                                        placeholder="Judul Buku">
                                </div>

                                <div class="form-group">
                                    <label for="total_page">Total Halaman</label>
                                    <input wire:model="total_page" type="text" class="form-control" id="total_page"
                                        placeholder="Total Halaman">
                                </div>

                                <div class="form-group">
                                    <label for="author">Penulis</label>
                                    <input wire:model="author" type="text" class="form-control" id="author"
                                        placeholder="Penulis">
                                </div>

                                <div class="form-group">
                                    <label for="published">Tanggal Terbit</label>
                                    <input wire:model="published" type="date" class="form-control" id="published">
                                </div>

                                <button class="btn btn-primary btn-block" type="submit">
                                    @if ($id)
                                        update
                                    @else
                                        save
                                    @endif

                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0">Data Teacher</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Special title treatment</h6>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.</p>
                            <table class="table table-sm table-striped">
                                <tr>
                                    <th>Owner</th>
                                    <th>Title Book</th>
                                    <th>Total Halaman</th>
                                    <th>Author</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>

                                @foreach ($data as $item)
                                    <tr>
                                        <td>
                                            {{ $item->teacher_id }} |
                                            {{ $item->teacher->name }}
                                        </td>
                                        <td>{{ $item->title }} </td>
                                        <td>{{ $item->total_page }}</td>
                                        <td>{{ $item->author }}</td>
                                        <td>{{ $item->publlished }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-danger"
                                                wire:click="delete('{{ $item->id }}')"
                                                wire:confirm="Are you sure you want to delete this post?">Delete
                                            </button>

                                            <button class="btn btn-sm btn-outline-primary"
                                                wire:click="edit('{{ $item->id }}')">Edit
                                            </button>
                                        <td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
