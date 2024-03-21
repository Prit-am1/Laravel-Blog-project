<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    <!-- basic -->
    @include('home/homecss')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <style>
        .post_title {

            font-size: 30px;
            font-weight: bold;
            text-align: center;
            padding: 30px;
            color: black;
        }

        label{
            color: black;
            
        }
    </style>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="header_main">
            <div class="mobile_menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="logo_mobile"><a href="#"><img src="images/logo.png"></a></div>

                </nav>
            </div>
            <div class="container-fluid">
                <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
            </div>
        </div>
        
    </div>
    <h1 class="post_title">Add Post</h1>

<div class="container">
    <form action="{{url('user_post')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label>Post Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Post Description</label>
            <textarea name="description" cols="148" rows="5" class="form-control"></textarea>
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


    <!-- footer section start -->
    @include('home/footer')
    <!-- footer section end -->
</body>

</html>