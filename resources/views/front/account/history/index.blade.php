@extends('layouts.front')
    @section('siteTitle', 'ვაკანსიების ისტორია')

    @section('content')

    @include('front.component.section_hero', [
        'name' => 'ისტორია',
        'title' => 'განთავსებული ვაკანსიების ისტორია'
    ])

    <section class="mt-3 mb-3">
        <div class="container-fluid">
            <div class="row">
                @livewire('account.get-my-vacancy-history')
            </div>
        </div>
    </section>

    @endsection
