@foreach($getCategory as $category)
    <div class="col-md-3 col-md-3">
        <ul class="category">
            <li class="categoryItem text-center">

            <main class="animate__animated animate__bounceInLeft animate__delay-2s animate__faster">
                <a href="{{ route('front.category.index', [$category->id, Str::slug($category->name, '-')]) }}" id="categoryText">
                    <span  title="{{ $category->name }}">
                        {{ $category->categoryName() }}
                    </span>
                </a>
            </main>

            </li>
        </ul>
    </div>
    @break($loop->iteration == 20)
@endforeach