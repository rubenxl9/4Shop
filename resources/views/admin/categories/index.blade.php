@extends('layouts.admin')

@section('content')


    <div class="containert">
            <h1>Categories</h1>
            <a href="{{ route('admin.categories.create')}},">Nieuwe Categorie toevoegen</a>            
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('admin.categories.edit', $category->id) }}">Aanpassen</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

