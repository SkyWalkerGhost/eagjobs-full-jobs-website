{{ Form::open(['action' => ['Front\FrontPageController@filter'], 'method' => 'GET', 'class' => 'search-jobs-form']) }}
    <div class="row mb-5">

        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <input type="text" class="form-control form-control-lg" placeholder="მაგ: მენეჯერი, კონსულტანტი" name="name">
        </div>


        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <select name="location_id" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="აირჩიე მდებარეობა">
                @foreach ($getLocation as $location)
                    <option value="{{ $location->id }}">
                        {{ $location->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <select name="category_id" class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="კატეგორია">
                @foreach ($getCategory as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <button type="submit"
                    class="btn btn-primary btn-lg btn-block text-white btn-search"
                    style="background: #00CC00 !important;">
                <span class="icon-search icon mr-2"></span> სამუშაოს ძიება
            </button>
        </div>

    </div>
{{ Form::close() }}