{{ Form::open(['action' => ['Front\CompanyController@update_profile', Crypt::encrypt(0)], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) }}

    <div class="row">

        <div class="col-md-12 mb-3">
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon-info"></i> შეტყობინება </h5>
                    <p>
                        კომპანიის პროფილის განახლება საშულებას მოგცემთ მარტივად გახადოთ თქვენი საკონტაქტო ინფორმაცია ხელმისაწვდომი სამუშაოს მაძიებლებისათვის.
                    </p>
                    <p>
                        თუ კი თქვენი კომპანიის საკონტაქტო ინფორმაცია შეიცვლება, შეგეძლებათ მარტივად შეცვალოთ იგი ქვემოთ მითითებული ველების დახმარებით.
                    </p>
            </div>
        </div>

        <div class="col-md-3 mb-5">
            <i class="icon-link"></i> კომპანიის ვებ-გვერდი:
        </div>

        <div class="col-md-9">
            <div class="form-group">
        
                <input type="text" name="website" class="form-control" placeholder="შეიყვანეთ კომპანიის ვებ-გვერდი: https://www.eagjobs.ge" value="{{ auth()->guard('company')->user()->website }}">
                @error('website')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror           
            </div>
        </div>

        <div class="col-md-3 mb-5">
            <i class="icon-facebook-square"></i> Facebook-ის მისამართი:
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <input type="text" name="facebook" class="form-control" placeholder="მიუთითეთ კომპანიის Facebook-ის პროფილის მისამართი" value="{{ auth()->guard('company')->user()->facebook }}">
                @error('facebook')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>

        <div class="col-md-3 mb-5">
            <i class="icon-align-left"></i> კომპანიის შესახებ:
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <textarea name="about_company" class="form-control" rows="10" id="summernote2">
                    {{ auth()->guard('company')->user()->about_company }}
                </textarea>
                @error('about_company')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>

        <div class="col-md-3">
            <i class="icon-add_a_photo"></i>
            ლოგოს შეცვლა
        </div>

        <div class="col-md-9">
            <div class="form-group">
                <label class="btn btn-primary btn-md btn-file">
                    <i class="icon-add_a_photo"></i> 
                    ლოგოს ატვირთვა
                    <input type="file" name="photo">
                </label>
                @error('photo')
                    <small class="text-red font-size-1 text-muted font-weight-bold">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>

        <div class="col-md-3"></div>

        <div class="col-md-3 mb-2">
            <a href="{{ route('front.account.index') }}" class="btn btn-info mr-2">
                <i class="icon-arrow-left"></i> 
                უკან დაბრუნება 
            </a>
        </div>

        <div class="col-md-2">
            <button class="btn btn-success btn-green border-0 text-white">
                <i class="icon-check"></i>
                {{ successButton() }}
            </button>
        </div>

    </div>
{{ Form::close() }}