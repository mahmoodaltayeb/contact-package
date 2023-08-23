<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Laravel 8 - Add Blog Post Form Example
        </div>
        <div class="card-body">
            <form method="post" action="{{route('contact')}}">
                @csrf
                <div class="form-group">
                    <input type="text"  name="name" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="email"  name="email" placeholder="Your Email">
                </div>
                <div class="form-group">
                    <textarea name="message" cols="30" rows="10" placeholder="Your message"> </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
