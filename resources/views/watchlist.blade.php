@extends('layouts.dashboard')


@section('dashboard')
    <div class="px-8 lg:px-16 py-2">
        <x-create-form />
        <h2 class="text-xl font-semibold mb-4 text-[#1b1b18] dark:text-[#EDEDEC]">Recent additions</h2>
        <x-card />
        <x-card />
        <x-card />
        <x-card />
    </div>
@endsection
