<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="flex justify-end m-2 p-2">
        <a href="{{ route('admin.categories.create') }}"
        class="px-4 py-2 bg-indigo-400 hover:bg-indigo-700 rounded-lg">New Category</a>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
    <th scope="col" class="px-6 py-3">
    Category
    </th>
    <th scope="col" class="px-6 py-3">
    Decription
    </th>
    <th scope="col" class="px-6 py-3">
    Image
    </th>
    <th scope="col" class="px-6 py-3">
    <span class="sr-only">Edit</span>
    </th>
    </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category )

    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
    {{ $category->name }}
    </th>
    <td class="px-6 py-4">
    {{ $category->description }}
    </td>
    <td class="px-6 py-4">
    {{ $category->image }}
    </td>
    <td class="px-6 py-4 text-right">
    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
    </td>
    @endforeach


        </div>
    </div>
</x-admin-layout>
