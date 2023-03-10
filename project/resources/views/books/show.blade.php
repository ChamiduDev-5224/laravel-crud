@extends('books.layout')
@section('content')

            <div class="main_section my-auto mx-[10%] lg:mx-[20%] bg-center border-4 rounded-lg h-fit">
                <h2 class="text-center py-8 text-gray-700 font-semibold text-[30px]">View Book</h2>
                <div class="flex flex-col justify-center">
                    <input type="text" value="{{$book->name}}" name="name" class="my-2 mx-8 rounded-md hover:border-l-fuchsia-600" placeholder="Name" readonly>
                    <input type="text" value="{{$book->author}}" name="author" class="my-2 mx-8 rounded-md hover:border-l-fuchsia-600" placeholder="Author" readonly>
                    <input type="text" value="{{$book->genrce}}" name="genrce" class="my-2 mx-8 rounded-md hover:border-l-fuchsia-600" placeholder="Genres" readonly>
                    <input type="number" value="{{$book->price}}" name="price" class="my-2 mx-8 rounded-md hover:border-l-fuchsia-600 mb-8" placeholder="Price" readonly>
                </div>
            </div>
    </div>
@endsection
