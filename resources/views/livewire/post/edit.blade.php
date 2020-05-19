<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="update">
                <input type="hidden" wire:model="postId">
                <div class="form-group">
                    <label>TITLE</label>
                    <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Title">
                    @error('title')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>KONTEN</label>
                   <textarea wire:model="content" class="form-control @error('content') is-invalid @enderror" rows="4" placeholder="Masukkan Konten"></textarea>
                   @error('content')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
</div>
