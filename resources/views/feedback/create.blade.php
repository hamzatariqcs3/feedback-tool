@extends('layouts.app')

@section('content')
<div class="container">
<form method="post" action="{{ route('feedback.store') }}">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" class="form-control" required>
            <option value="bug report">Bug Report</option>
            <option value="feature request">Feature Request</option>
            <option value="improvement">Improvement</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div >
@endsection