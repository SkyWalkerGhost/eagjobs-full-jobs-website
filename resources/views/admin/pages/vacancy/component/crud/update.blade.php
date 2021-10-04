<div class="card">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i>
			{{ updateVacancy() }}
		</h3>
	</div>

	<div class="card-body">

		{{ Form::open(['action' => ['VacancyController@update', 'vacancy_id' => $editVacancy->id], 'method' => 'PUT']) }}

			<div class="row">
				
				<div class="col-md-8">
					<div class="form-group">
						<label> {{ vacancyName() }} </label>
						
						{{ Form::text('name', $editVacancy->name, [ 'class' => 'form-control', 'placeholder' => vacancyPlaceholder()]) }}

						@error('name')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
						
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
	                  	<label> {{ vacancyTypeTitle() }} - 
	                  		(<span class="text-danger"> {{ $editVacancy->vacancy_type }} </span>)
	                  	</label>
                  		<select name="vacancy_type" 
                  				class="form-control select2 select2-danger" 
                  				data-dropdown-css-class="select2-danger" 
                  				style="width: 100%;">
                  			@foreach($getVacancyType as $type)
                    			<option value="{{ $type->name }}"> 
                    				{{ $type->name }} 
                    			</option>
                    		@endforeach
                  		</select>

                  		@error('vacancy_type')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
						
	                </div>
				</div>


				<div class="col-md-8">
					<div class="form-group">
						<label> {{ educationTitle() }} </label>
						
						{{ Form::text('education', $editVacancy->education, [ 'class' => 'form-control', 'placeholder' => educationPlaceholder()]) 
						}}

						@error('education')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
						
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
	                  	<label> 
	                  		{{ categoryTitle() }}
	                  		(<span class="text-danger"> {{ $editVacancy->category->name }} </span>)
	                  	</label>
                  		<select name="category_id" 
                  				class="form-control select2 select2-danger" 
                  				data-dropdown-css-class="select2-danger" 
                  				style="width: 100%;">
                  			
                  			<option value="{{ $editVacancy->category->id }}">
                  				{{ $editVacancy->category->name }}
                  			</option>

                  			@foreach($getCategory as $category)
                    			<option value="{{ $category->id }}"> 
                    				{{ $category->name }} 
                    			</option>
                    		@endforeach
                  		</select>

                  		@error('category_id')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
						
	                </div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label> {{ salaryTitle() }} </label>
						
						<input type="number" name="salary" class="form-control" value="{{ $editVacancy->salary }}" placeholder="მაგ: 1.500">

						@error('salary')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
						
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label> {{ workScheduleTitle() }} </label>
						
						{{ 
							Form::text('work_schedule', $editVacancy->work_schedule, [
								'class' => 'form-control', 
								'placeholder' =>'მაგ: სრული განაკვეთი']) 
						}}

						@error('work_schedule')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
						
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
	                  	<label> 
	                  		{{ locationTitle() }} 
	                  		(<span class="text-danger"> {{ $editVacancy->location->name }} </span>)
	                  	</label>
                  		<select name="location_id" 
                  				class="form-control select2 select2-danger" 
                  				data-dropdown-css-class="select2-danger" 
                  				style="width: 100%;">
                  			
                  			<option value="{{ $editVacancy->location->id }}">
                  				{{ $editVacancy->location->name }}
                  			</option>

                  			@foreach($getLocation as $location)
                    			<option value="{{ $location->id }}"> 
                    				{{ $location->name }} 
                    			</option>
                    		@endforeach
                  		</select>

                  		@error('location_id')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
						
	                </div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
	                  	<label> 
	                  		{{ languageTitle() }} 
	                  		(<span class="text-danger"> {{ $editVacancy->language->name }} </span>)
	                  	</label>
                  		<select name="language_id" 
                  				class="form-control select2 select2-danger" 
                  				data-dropdown-css-class="select2-danger" 
                  				style="width: 100%;">

                  			@foreach($getLanguage as $language)
                    			<option value="{{ $language->id }}"> 
                    				{{ $language->name }} 
                    			</option>
                    		@endforeach
                  		</select>

                  		@error('language_id')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
						
	                </div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
	                  	<label> 
	                  		{{ experienceTitle() }}
	                  		(<span class="text-danger"> {{ $editVacancy->experience->name }} </span>) 
	                  	</label>
                  		<select name="experience_id" 
                  				class="form-control select2 select2-danger" 
                  				data-dropdown-css-class="select2-danger" 
                  				style="width: 100%;">

                  			@foreach($getExperience as $experience)
                    			<option value="{{ $experience->id }}"> 
                    				{{ $experience->name }} 
                    			</option>
                    		@endforeach
                  		</select>

                  		@error('experience_id')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
						
	                </div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label> {{ jobDescriptionAndFunctionDuties() }} </label>
						<textarea name="job_description" class="form-control" rows="10" id="summernote">
							{{ $editVacancy->job_description }}
						</textarea>
						@error('job_description')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<label> {{ qualificationRequirements() }} </label>
						<textarea name="qualification_requirements" class="form-control" rows="10" id="summernote2">
							{{ $editVacancy->qualification_requirements }}
						</textarea>
						@error('qualification_requirements')
							<small class="text-red text-muted font-weight-bold">
								{{ $message }}
							</small>
						@enderror
					</div>
				</div>

				<div class="col-md-12">
					<button class="btn btn-success">
						<i class="fa fa-check"></i>
						{{ updateButton() }}
					</button>
				</div>

			</div>

		{{ Form::close() }}

	</div>
</div>

