@extends('layout.articleParent')
@section('title','All Article')

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
        @foreach($ar as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->content}}</td>
            <td>{{$article->image}}</td>
            <td>{{$article->created_at}}</td>
            <td>{{$article->updated_at}}</td>
        </tr>
@endforeach
@endsection
