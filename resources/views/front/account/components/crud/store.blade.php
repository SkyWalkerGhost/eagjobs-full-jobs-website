{{ Form::open(['action' => ['VacancyController@store'], 'method' => 'POST']) }}

    <div class="row">
        
        <div class="col-md-8">
            <div class="form-group">
                <label> {{ vacancyName() }} </label>
                
                {{ Form::text('name', old('name'), [ 'class' => 'form-control', 'placeholder' => vacancyPlaceholder()]) }}

                @error('name')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
                
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label> {{ vacancyTypeTitle() }} </label>
                <select name="vacancy_type" 
                        class="selectpicker border rounded" 
                        data-style="btn-black" 
                        data-width="100%" 
                        data-live-search="true" 
                        title="ვაკანსიის ტიპი">

                    @foreach($getVacancyType as $type)
                        <option value="{{ $type->name }}"> 
                            {{ $type->name }} / {{ $type->days }} დღე / {{ $type->price }} ₾
                        </option>
                    @endforeach
                </select>

                @error('vacancy_type')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
                
            </div>
        </div>


        <div class="col-md-8">
            <div class="form-group">
                <label> {{ educationTitle() }} </label>
                
                {{ Form::text('education', old('education'), [ 'class' => 'form-control', 'placeholder' => educationPlaceholder()]) 
                }}

                @error('education')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
                
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label> {{ categoryTitle() }} </label>
                <select name="category_id" 
                        class="selectpicker border rounded" 
                        data-style="btn-black" 
                        data-width="100%" 
                        data-live-search="true" 
                        title="{{ categoryTitle() }}">

                    @foreach($getCategory as $category)
                        <option value="{{ $category->id }}"> 
                            {{ $category->name }} 
                        </option>
                    @endforeach
                </select>

                @error('category_id')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
                
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label> {{ salaryTitle() }} </label>
                
                <input type="number" name="salary" class="form-control" placeholder="მაგ: 1.500">

                @error('salary')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
                
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label> {{ workScheduleTitle() }} </label>
                
                {{ 
                    Form::text('work_schedule', old('work_schedule'), [
                        'class' => 'form-control', 
                        'placeholder' =>'მაგ: სრული განაკვეთი']) 
                }}

                @error('work_schedule')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
                
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label> {{ locationTitle() }} </label>
                <select name="location_id" 
                       class="selectpicker border rounded" 
                        data-style="btn-black" 
                        data-width="100%" 
                        data-live-search="true" 
                        title="{{ locationTitle() }}">

                    @foreach($getLocation as $location)
                        <option value="{{ $location->id }}"> 
                            {{ $location->name }} 
                        </option>
                    @endforeach
                </select>

                @error('location_id')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
                
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label> {{ languageTitle() }} </label>
                <select name="language_id" 
                        class="selectpicker border rounded" 
                        data-style="btn-black" 
                        data-width="100%" 
                        data-live-search="true" 
                        title="{{ languageTitle() }}">

                    @foreach($getLanguage as $language)
                        <option value="{{ $language->id }}"> 
                            {{ $language->name }} 
                        </option>
                    @endforeach
                </select>

                @error('language_id')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
                
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label> {{ experienceTitle() }} </label>
                <select name="experience_id" 
                        class="selectpicker border rounded" 
                        data-style="btn-black" 
                        data-width="100%" 
                        data-live-search="true" 
                        title="{{ experienceTitle() }}">

                    @foreach($getExperience as $experience)
                        <option value="{{ $experience->id }}"> 
                            {{ $experience->name }} 
                        </option>
                    @endforeach
                </select>

                @error('experience_id')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
                
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label> {{ jobDescriptionAndFunctionDuties() }} </label>
                <textarea name="job_description" class="form-control" rows="10" id="summernote">
                    {{ old('job_description') }}
                </textarea>
                @error('job_description')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label> {{ qualificationRequirements() }} </label>
                <textarea name="qualification_requirements" class="form-control" rows="10" id="summernote2">
                    {{ old('qualification_requirements') }}
                </textarea>
                @error('qualification_requirements')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>

        <div class="col-md-12">
            <button class="btn btn-block btn-primary btn-md">
                <i class="icon-check"></i>
                {{ successButton() }}
            </button>
        </div>

    </div>

{{ Form::close() }}