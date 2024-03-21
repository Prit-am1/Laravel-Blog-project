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
    <h1 class="post_title">Update Post</h1>

    <div class="container">
    <form action="{{url('update_post_data',$post->id)}}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
                        <label>Update Title</label>
                        <input type="text" name="title" class="form-control" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label>Update Description</label>
                        <textarea name="description" cols="148" rows="5">{{$post->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Update Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Old Image</label>
                        <img src="postimage/{{$post->image}}" height="100px" width="100px">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-light bg-primary">
                    </div>

    </form>
</div>


    <!-- footer section start -->
    @include('home/footer')
    <!-- footer section end -->
</body>

</html>