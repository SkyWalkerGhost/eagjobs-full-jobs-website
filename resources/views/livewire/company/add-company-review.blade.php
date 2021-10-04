<div wire:ignore.self>
    <form wire:submit.prevent='addCompanyReview'>
        @csrf
        <div class="form-group">
            <select wire:model.defer="point" class="form-control">

                @foreach(companyReview() as $key => $value)
                    <option value="{{ $key }}"> 
                        {{ $value }} 
                        (&#9733; {{ $key }}) 
                    </option>
                @endforeach
            </select>

            <input type="hidden" name="vacancy_id" value="{{ $vacancy_id }}">
            @error('point')
                <small class="text-red font-weight-bold"> {{ $message }} </small>
            @enderror

        </div>

        <button wire:click.submit="addCompanyReview"
                class="btn btn-block btn-primary btn-xs"> 
            შეფასება 
        </button>

    </form>
</div>
