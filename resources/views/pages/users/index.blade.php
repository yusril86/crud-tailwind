@extends('layouts.app')

@section('content')
 @if (session('success'))
        <div class="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <x-common.page-breadcrumb pageTitle="From Elements" />
    <div class="space-y-6">

        <x-common.component-card title="Table Users">
            <div class="flex items-center gap-3">
                <a href="{{ route('users.create') }}" class="ml-auto items-center gap-2 rounded-lg border border-gray-300 bg-blue-300 px-7 py-3 text-theme-sm font-medium text-gray-700 shadow-theme-xs hover:bg-gray-50 hover:text-gray-800 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-white/[0.03] dark:hover:text-gray-200">
                    Tambah User
                </a>
            </div>
            <x-tables.basic-tables.basic-tables-two :users="$users" />
        </x-common.component-card>
    </div>
@endsection
