@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="From Elements" />
    <div class="space-y-6">

        <x-common.component-card title="Table Users">
            <x-tables.basic-tables.basic-tables-two :users="$users" />
        </x-common.component-card>
    </div>
@endsection
