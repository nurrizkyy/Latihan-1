<div wire:ignore.self class="modal fade" id="dialogForm" tabindex="-1" role="dialog"
        aria-labelledby="dialogFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dialogFormLabel">
                        @if ($id)
                            Edit Data
                        @else
                            Create New Data
                        @endif
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <form @if ($id) wire:submit="update" @else wire:submit="save" @endif>
                    <div class="modal-body">
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
                    
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-block" type="submit">
                            @if ($id)
                                update
                            @else
                                save
                            @endif
                        </button>  
                    </div>
                </form>
            </div>
        </div>
    </div>