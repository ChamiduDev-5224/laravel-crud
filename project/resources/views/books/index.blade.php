
@extends('books.layout')
@section('content')


<div class="mx-12 mt-8 h-[200px]">
    <div class="h-24">
        @if ($message = Session::get('success'))
        <div class="p-3 rounded bg-green-500 text-green-100 mb-4 m-3 w-fit px-4">
            <span>{{ $message }}</span>
        </div>
        @endif
        </div>
    <h1 class="mt-2 text-center text-blue-600/70 font-bold text-[28px] md:text-[48px]">Book Management System</h1>
    <div class="add_button">
        <button class="flex flex-row bg-green-600 text-yellow-50 rounded-lg py-2 px-6 mt-2 hover:bg-green-600/80 active:scale-95">
       <a href="{{ route('books.create')}}">
             Add Books</a> </button>
    <div class=" overflow-x-auto pt-2 overflow-y-auto h-full">
        <table class="w-full text-sm text-left text-gray-500 h-fit dark:text-gray-400 overflow-x-scroll ">
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 max-h-[20%]">
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
                    <td class="px-6 py-4 my-auto mx-auto flex flex-row justify-center gap-3">
                        <button class="bg-green-400/60 text-gray-100 p-2 rounded-md hover:bg-green-400/40 active:scale-95"><a href="{{ route('books.show',$bk->id) }}">View</a></button>
                        <button class="bg-yellow-400/60 text-gray-100 p-2 rounded-md hover:bg-yellow-400/40 active:scale-95"><a href="{{ route('books.edit',$bk->id) }}">Update</a></button>
                        <form action="{{ route('books.destroy',$bk->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-400/60 text-gray-100 p-2 rounded-md hover:bg-red-400/40 active:scale-95" type="submit">Delete</button>
                    </td>
                </form>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-12">
                {{ $book->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
