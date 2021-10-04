@extends('layouts.front')
    @section('siteTitle', 'ჩემი პროფილი')

    @section('content')

    @include('front.component.section_hero', [
        'name' => 'კატეგორიები',
        'title' => 'ვაკანსიები კატეგორიების მიხედვით'
    ])

    <section class="mt-3 mb-3">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3 mr-auto mb-5">
                    @include('front.account.components.partials.menu')
                </div>

                <div class="col-md-9">
                    @include('front.account.components.partials.table')
                </div>

            </div>
        </div>
    </section>

    @endsection
