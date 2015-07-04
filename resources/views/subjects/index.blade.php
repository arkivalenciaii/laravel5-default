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
        @foreach ($subject->prerequisites as $prereq)
            <tr>
                <td>{{ $prereq->subject_code }}</td>
                <td>{{ $prereq->subject_desc }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection