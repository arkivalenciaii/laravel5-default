@extends('subjects.app')

@section('content')
    <h1>{{ $user->email }}</h1>
    @foreach($subjects as $subject)
        <p><a href="subjects/{{ $subject->subject_code }}">{{ $subject->subject_code }}</a> - {{ $subject->subject_desc }}</p>
    @endforeach
@endsection