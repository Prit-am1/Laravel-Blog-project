<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    <!-- basic -->
    @include('home/homecss')
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

    <div style="text-align: center; margin:0px 0px 20px 440px;" class="col-md-5">
        <div><img style="height: 400px; width: 650px; margin-top: 50px;" src="postimage/{{$post->image}}" class="services_img" style="margin-top: 50px;"></div>
        <h3>{{$post->title}}</h3>
        <p>Post by <b>{{$post->name}}</b></p>
        <p>{{$post->description}}</>
        </p>

    </div>


    <!-- footer section start -->
    @include('home/footer')
    <!-- footer section end -->
</body>

</html>