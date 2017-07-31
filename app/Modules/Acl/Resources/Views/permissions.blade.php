@extends('layouts.app')

@section('content')


    <div id="app">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <perms-data></perms-data>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



@section('page_heading')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{ t('cp__title__perm_list', 'Список прав') }}</h2>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
@endsection





