<h1>{{'fuck world.'}}</h1>
{{-- @php
    $books = ['PHP','Javascript','CSS'];
    $name = 'Mahmoud';
@endphp --}}

{{$name}}

@foreach ($books as $book)
    {{$book}}
@endforeach
