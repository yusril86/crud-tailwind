@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="User Create" />
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
        <div class="space-y-6">
            <x-form.form-elements.user-form />
        </div>
    </div>
@endsection
