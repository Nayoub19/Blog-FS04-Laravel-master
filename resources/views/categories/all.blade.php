@extends('layouts.layout')
@section('title', 'Toutes les catégories')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-10 offset-md-1">
                <div class="card shadow rounded">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Listes de catégories</h5>
                        <a href="{{ route('category_create') }}" class="btn btn-primary">Créer une catégorie</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date de création</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $category)

                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('category-edit', $category->id) }}" class="btn btn-success">Modifier</a>
                                        <button class="btn btn-danger">Supprimer</button>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
