@extends('layouts.app')

@section('content')
    <x-common.page-breadcrumb pageTitle="User Create" />
    @if (session('success'))
        <div class="mb-4 rounded-lg bg-green-100 px-6 py-5 text-base text-green-700" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="mb-4 rounded-lg bg-red-100 px-6 py-5 text-base text-red-700" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="grid grid-cols-1 gap-6 xl:grid-cols-2">
        <div class="space-y-6">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <x-form.form-elements.user-form />
            </form>
        </div>
    </div>
@endsection
