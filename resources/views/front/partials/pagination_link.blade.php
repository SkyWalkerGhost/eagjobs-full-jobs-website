<div class="row pagination-wrap">
    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
        @if($paginator->hasPages())
            <span> ნაჩვენებია 
                {{ $paginator->currentPage() }} 
                    - 
                {{ $paginator->perPage() }} Of 
                {{ number_format($paginator->total()) }} 
                ვაკანსია
            </span>
        @endif
    </div>
    <div class="col-md-6 text-center text-md-right">
        <div class="ml-auto">
            <div class="d-inline-block">
                {{ $paginator->links() }}
            </div>
        </div>
    </div>
</div>