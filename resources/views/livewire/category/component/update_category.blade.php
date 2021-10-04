<button type="button" 
        class="btn btn-primary btn-sm" 
        data-toggle="modal" 
        data-target="#edit_{{ $category->id }}">
        <i class="fa fa-edit"></i>
</button>

<div    wire:ignore.self 
        class="modal fade" 
        id="edit_{{ $category->id }}"
        data-backdrop="static"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true" 
        tabindex="-1" 
        role="dialog">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel"> 
                    კატეგორიის განახლება 
                </h4>
            </div>

            <div class="modal-body">
                <form   wire:submit.prevent="update({{ $category->id }})" 
                        method="POST">
                    @csrf

                    <div class="row">

                        @if(Session::has('success'))
                            <script> toastr.success("{{ session('success') }}"); </script>
                        @endif

                        @if(Session::has('info'))
                            <script> toastr.info("{{ session('info') }}"); </script>
                        @endif
                        
                        <div class="col-md-6 mb-1">

                            <div class="form-group">
                                <div class="form-line">
                                    <input  wire:model.defer='name' 
                                            type="text" 
                                            class="form-control"
                                            value="{{ $category->name }}" 
                                            placeholder="კატეგორიის სახელი">
                                </div>
                                @error('name') 
                                    <span class="text-danger font-weight-bold"> 
                                        {{ $message }} 
                                    </span> 
                                @enderror
                            </div>

                        </div>

                        <div class="col-md-6 mb-1">
                            <div class="form-group">
                                <div class="form-line disabled">
                                    <input  type="text" 
                                            class="form-control"
                                            placeholder="{{ $category->name }}"
                                            disabled
                                            style="background: #e9ecef; text-indent: 10px;">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="button" 
                                    class="btn btn-danger" 
                                    data-dismiss="modal"> 
                                <i class="fa fa-times"></i>
                                დახურვა 
                            </button>
                            
                            <button wire:click.prevent="update({{ $category->id }})"
                                type="button" 
                                class="btn btn-success">
                                <i class="fa fa-check"></i>
                                განახლება
                            </button>
                        </div>
                    
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>