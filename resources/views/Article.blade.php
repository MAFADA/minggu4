@extends('layout.articleParent')
@section('title','Article By Id')

@section('content')
@section('rows')
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>               
        <tr>
            <td>{{$ar->id}}</td>
            <td>{{$ar->title}}</td>
            <td>{{$ar->content}}</td>
            <td>{{$ar->image}}</td>
            <td>{{$ar->created_at}}</td>
            <td>{{$ar->updated_at}}</td>
        </tr>
@endsection
