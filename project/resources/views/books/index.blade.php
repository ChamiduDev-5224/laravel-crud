
@extends('books.layout')
@section('content')

<div class="m-12 h-[200px]">
    <h1 class="mt-8 text-center text-blue-600/70 font-bold text-[28px] md:text-[48px]">Book Management System</h1>
    <div class="add_button">
        <button class="flex flex-row bg-green-600 text-yellow-50 rounded-lg py-2 px-6 mt-2 hover:bg-green-600/80 active:scale-95">
       <a href="{{ route('books.create')}}">
             Add Books</a> </button>
    <div class=" overflow-x-auto pt-2">
        <table class="w-full text-sm text-left text-gray-500 h-fit dark:text-gray-400 overflow-x-scroll overflow-y-scroll">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Book Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Genrce
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $bk)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $bk->name }}
                    </th>
                    <td class="px-6 ">
                        {{ $bk->author }}
                    </td>
                    <td class="px-6 ">
                        {{ $bk->genrce }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $bk->price }}
                    </td>
                    <form action="{{ route('books.destroy',$bk->id)}}" method="POST">
                    <td class="px-6 py-4 my-auto mx-auto flex flex-row justify-center gap-3">
                        <button class="bg-green-400/60 text-gray-100 p-2 rounded-md hover:bg-green-400/40 active:scale-95"><a href="{{ route('books.show',$bk->id) }}">View</a></button>
                        <button class="bg-yellow-400/60 text-gray-100 p-2 rounded-md hover:bg-yellow-400/40 active:scale-95"><a href="{{ route('books.edit',$bk->id) }}">Update</a></button>
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-400/60 text-gray-100 p-2 rounded-md hover:bg-red-400/40 active:scale-95" type="submit">Delete</button>
                    </td>
                </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
