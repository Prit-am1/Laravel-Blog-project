<!DOCTYPE html>
<html>

<head>
    @include('admin/css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <style>
        .post_title {

            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: whitesmoke;
        }
    </style>
</head>

<body>
    @include('admin/header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin/sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">

            @if(session()->has('message'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <h1 class="post_title">Add Post</h1>

            <div class="container">
                <form action="{{url('add_post')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Post Description</label>
                        <textarea name="description" cols="134" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Post Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-light bg-warning">
                    </div>

                </form>
            </div>
        </div>
        @include('admin/footer')
</body>

</html>