<div class="col-12 col-sm-6 col-md-6 col-lg-12 mb-lg-5">
    <h1 class="text-white font-weight-bold">   </h1>
    <div class="custom-breadcrumbs">

        <a href="{{ route('front.index') }}" class="text-white"> 
            <span class="icon-home"></span> 
            <strong> მთავარი </strong> 
        </a> 

        <span class="mx-2 slash text-white">/</span>

        <a href="#" class="text-white"> 
            <strong> ძებნა </strong> 
        </a> 

        <span class="mx-2 slash text-white">/</span>

        <span class="text-white"><strong> მოძებნეთ სასურველი ვაკანსია </strong></span>

    </div>
</div>

    <div class="col-md-12 mb-5"></div>
        
    {{ Form::open(['action' => ['Front\FrontPageController@filter'], 'method' => 'GET', 
    'class' => 'search-jobs-form', 'ng-controller="myCtrl"']) }}
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <input  type="text" 
                        class="form-control" 
                        placeholder="მაგ: დეველოპერი" 
                        name="name"
                        value={{ old('name') }}>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-lg-3">
                <div class="form-group">
         
                    <select name="location_id" 
                            class="selectpicker" 
                            data-style="btn-white btn-xs" 
                            data-width="100%" 
                            data-live-search="true" 
                            title="აირჩიე მდებარეობა">
                        @foreach ($getLocation as $location)
                            <option value="{{ $location->id }}">
                                {{ $location->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-lg-3">
                <div class="form-group">
         
                    <select name="category_id" 
                            class="selectpicker" 
                            data-style="btn-white btn-xs" 
                            data-width="100%" 
                            data-live-search="true" 
                            title="დასაქმების კატეგორია">
                        @foreach ($getCategory as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-lg-3">
                <div class="form-group">
                    <input  type="range" 
                            name="salary" 
                            class="custom-range" 
                            min="@{{min}}" 
                            max="@{{max}}" 
                            step="@{{step}}" 
                            value="@{{value}}" 
                            ng-change="getSalary()" 
                            ng-model="salary">
                    <span class="text-white"> @{{EnteredValue}} </span> 
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-lg-3">
                <div class="form-group">
                    <button type="submit" 
                            class="btn btn-primary btn-xs btn-block text-white btn-search"> 
                            <span class="icon-search icon mr-2"></span> ძიება 
                    </button>
                </div>
            </div>
        </div>
    {{ Form::close() }}
