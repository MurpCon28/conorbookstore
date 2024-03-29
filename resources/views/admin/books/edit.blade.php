@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header">
              Edit book
            </div>

            <div class="class-body">
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form method="POST" action="{{ route('admin.books.update', $book->id) }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <img src="{{ asset('storage/covers/' . $book->cover) }}" width="150" />
                <div class="form-group">
                  <label for="cover">Cover</label>
                  <input type="file" class="form-control" id="cover" name="cover">
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}">
                </div>
                <div class="form-group">
                  <label for="author">Author</label>
                  <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $book->author) }}">
                </div>
                <div class="form-group">
                  <label for="publisher">Publisher</label>
                  <select name="publisher_id">
                    @foreach ($publishers as $publisher)
                      <option value="{{ $publisher->id }}" {{ (old('publisher_id', $book->publisher->id) == $publisher->id) ? "selected" : "" }}>{{ $publisher->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="year">Year</label>
                  <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $book->year) }}">
                </div>
                <div class="form-group">
                  <label for="isbn">ISBN</label>
                  <input type="text" class="form-control" id="isbn" name="isbn" value="{{ old('isbn', $book->isbn) }}">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $book->price) }}">
                </div>
                <div class="float-right">
                  <a href="{{ route('admin.books.index') }}" class="btn btn-default">Cancel</a>
                  <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
