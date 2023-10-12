@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Bewerk Categorie</h2>
            <form action="{{ route('admin.categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Naam</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Opslaan</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="producten">
                <h3>Producten in deze categorie:</h3>
                <ul>
@dd($category->products)

                @foreach($category->products as $product)
                    <li>{{($product->title)}}</li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
