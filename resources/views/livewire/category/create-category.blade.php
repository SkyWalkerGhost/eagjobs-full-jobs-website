<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-plus"></i>
            {{ addNewCategoryTitle() }} 
        </h3>
    </div>

    <form wire:submit.prevent='store'>
        @csrf
        <div class="card-body">
            
            <div class="form-group">
                <label for="exampleInputEmail1"> {{ categoryName() }} </label>
                <input
                    wire:model.defer='name'
                    type="text"
                    class="form-control"
                    placeholder="სახელი"/>

                @error('name')
                    <span class="font-weight-bold text-red text-muted"> 
                        {{ $message }}
                    </span>
                @enderror
            </div>

        </div>

        <div class="card-footer">
            <button wire:click.prevent="store" 
                    class="btn btn-primary">
                <i class="fa fa-check"></i> 
                {{ successButton() }} 
            </button>
        </div>

    </form>

</div>
