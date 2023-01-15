
@extends('books.layout')

@section('content')
<div class="m-12 ">
    <h1 class="mt-8 text-center text-blue-600/70 font-bold text-[28px] md:text-[48px]">Book Management System</h1>
    <div class="add_button"><button class="flex flex-row bg-green-600 text-yellow-50 rounded-lg py-2 px-6 mt-2 hover:bg-green-600/80 active:scale-95">
        {{-- <a href="{{ route('books.create') }}"> Add Books</a> --}} Add Book
    </button></div>
    <div class=" overflow-x-auto  pt-2">
        <table class="w-full text-sm text-left text-gray-500 h-[200px] dark:text-gray-400 overflow-x-scroll overflow-y-scroll">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Price
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Sliver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4 my-auto mx-auto flex flex-row justify-center gap-3">
                        <button class="bg-yellow-400/60 text-gray-100 p-2 rounded-md hover:bg-yellow-400/40 active:scale-95">Update</button>
                        <button class="bg-red-400/60 text-gray-100 p-2 rounded-md hover:bg-red-400/40 active:scale-95">Delete</button>

                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                </tr>
            </tbody>
        </table>
    </div>  </div>
