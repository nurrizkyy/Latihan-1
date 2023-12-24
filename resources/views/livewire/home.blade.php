<div class="content-wrapper">

    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><small>Hi, {{Auth::user()->name}}</small></h1>
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

{{-- {-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

    {{-- <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"> --}}

                    {{-- <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Form</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title"></h6>
                            <p class="card-text"></p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogForm" 
                                wire:click.prevent="create">
                                Create Data
                            </button> --}}
                        
                            {{-- <form 
                                @if ($id) wire:submit="update" @else wire:submit="save" @endif>
                                <div class="form-group">
                                    <label for="nip">NIP</label>
                                    <input wire:model="nip" type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" 
                                    placeholder="Your Nip">
                                    @error('nip')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">NAME</label>
                                    <input wire:model="name" type="text" class="form-control" id="name" 
                                    placeholder="Your Name">
                                </div>

                                <div class="form-group">
                                    <label for="phone">PHONE</label>
                                    <input wire:model="phone" type="text" class="form-control" id="phone" 
                                    placeholder="Phone Number">
                                </div>

                                <div class="form-group">
                                    <label for="gender">GENDER</label>
                                    <input wire:model="gender" type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" 
                                    placeholder="Gender">
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button class="btn btn-primary btn-block" type="submit">
                                    @if ($id)
                                        update
                                    @else
                                        save
                                    @endif
                                </button>   --}}
                            </form> 

                        </div>
                    </div>
                </div>
</div>
