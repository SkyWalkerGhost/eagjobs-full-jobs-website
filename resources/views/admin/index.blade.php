@extends('layouts.admin')
    @section('siteTitle', controlPanelTitle())

    @section('content')

        <div class="content-wrapper">
            <div class="content-header"></div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        @include('admin.components.card_info')

                    </div>
                </div>
            </section>
        </div>
    @endsection
