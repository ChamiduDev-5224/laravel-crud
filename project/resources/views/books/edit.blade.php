@extends('books.layout')
@section('content')

{{-- toast section --}}
<div class="h-32">
@if ($errors->any())
<div class="p-3 rounded bg-red-500 text-white m-3 w-fit">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
</div>
@endif
</div>
{{-- edit section --}}
            <div class="main_section my-auto mx-[10%] lg:mx-[20%] bg-center border-4 rounded-lg h-fit">
                <h2 class="text-center py-8 text-gray-700 font-semibold text-[30px]">Update Book</h2>
                <form action="{{ route('books.update',$book->id) }}" method="POST" class="flex flex-col justify-center">
                    @csrf
                    @method('PUT')
                    <input type="text" value="{{$book->name}}" name="name" class="my-2 mx-8 rounded-md hover:border-l-fuchsia-600" placeholder="Name">
                    <input type="text" value="{{$book->author}}" name="author" class="my-2 mx-8 rounded-md hover:border-l-fuchsia-600" placeholder="Author">
                    <input type="text" value="{{$book->genrce}}" name="genrce" class="my-2 mx-8 rounded-md hover:border-l-fuchsia-600" placeholder="Genres">
                    <input type="number" value="{{$book->price}}" name="price" class="my-2 mx-8 rounded-md hover:border-l-fuchsia-600" placeholder="Price">
                    <button type="submit" class="bg-red rounded-md bg-green-500 text-yellow-50 my-2 mx-8 p-3 hover:drop-shadow-xl active:bg-green-500/80 mb-6">Update Book</button>
                </form>
            </div>
    </div>
@endsection
