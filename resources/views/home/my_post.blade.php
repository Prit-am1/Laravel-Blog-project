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

    <h1 class="post_title">My Posts</h1>

    @if(session()->has('message'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

    @foreach ($data as $post )

    <div style="text-align: center; margin:0px 0px 20px 440px;" class="col-md-5">
        <div><img style="height: 400px; width: 650px; margin-top: 50px;" src="postimage/{{$post->image}}" class="services_img" style="margin-top: 50px;"></div>
        <h3>{{$post->title}}</h3>
        <p>Post by <b>{{$post->name}}</b></p>
        <p>{{$post->description}}</p>
        <a href="{{url('my_post_update',$post->id)}}" class="btn btn-primary">Update</a>
        <a href="{{url('my_post_del',$post->id)}}" class="btn btn-warning" onclick="return confirm('Are you sure, you want to delete this post?')">Delete</a>

    </div>

    @endforeach


    <!-- footer section start -->
    @include('home/footer')
    <!-- footer section end -->
</body>

</html>