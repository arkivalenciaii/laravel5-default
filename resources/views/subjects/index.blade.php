@extends('subjects.app')

@section('content')
    <h1>{{ $subject->subject_code }} -- {{ $subject->subject_desc }}</h1>

@endsection
@section('table')
    <h2 class="subheader">Pre-Requisite</h2>
    <table style="width:100%;">
        <thead>
        <tr>
            <th>Subject Code</th>
            <th>Subject Description</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($prereq as $prereqs)
            <tr>
                <td>{{ $prereqs->subject_code }}</td>
                <td>{{ $prereqs->subject_name }}</td>
                <td><a href="#">Remove friend</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection