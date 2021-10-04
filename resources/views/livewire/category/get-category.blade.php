<div class="card">
    <div class="card-header">
        <h3 class="card-title"> {{ categoryTableTitle() }} ({{ $categories->total() }}) </h3>

        <div class="card-tools">
            <ul class="pagination pagination-sm float-right mt-1 mb-1">
                {{ $categories->links() }}
            </ul>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-hover">
            <thead class="text-center">
                <tr>
                    @foreach(categoryTableTheadName() as $theadName)
                        <th> {{ $theadName }} </th>
                    @endforeach
                </tr>
            </thead>
            
            <tbody class="text-center">

                @forelse($categories as $category)
                    
                    <tr>
                        <td> {{ $category->id }} </td>
                        <td> {{ $category->name }} </td>

                        <td>
                            <span   class="badge badge p-2 text-white" 
                                    title="{{ numberofVacanciesInThisCategory() }}">
                                {{-- {{ $category->news_count_by_category_count }} --}}
                            </span>
                        </td>

                        <td>
                            @include('livewire.category.component.update_category')
                        </td>

                        <td> 
                            <form wire:submit.prevent="delete({{ $category->id }})">
                                @csrf                            
                                <button wire:click.prevent='delete({{ $category->id }})' 
                                        class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i> 
                                </button> 
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td>
                            {{ categoryNotFound() }}
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

