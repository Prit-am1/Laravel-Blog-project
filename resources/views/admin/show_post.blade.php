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
      <h1 class="post_title">All Post</h1>

      <div class="container">

      @if(session()->has('message'))

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{session()->get('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @elseif(session()->has('msg'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{session()->get('msg')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            @endif

      <table class="table table-hover table-bodered text-white">
        <thead class="bg-info">
            <tr>
            <th>Post Title</th>
            <th>Description</th>
            <th>Post By</th>
            <th>Post Status</th>
            <th>User Type</th>
            <th>Image</th>
            <th>Delete</th>
            <th>Edit</th>
            <th>Status Accept</th>
            <th>Status Reject</th>
            </tr>
        </thead>
        <tbody>

        @foreach ($post as $row)
            
            <tr>
                <td>{{$row->title}}</td>
                <td>{{$row->description}}</td>
                <td>{{$row->usertype}}</td>
                <td>{{$row->post_status}}</td>
                <td>{{$row->usertype}}</td>
                <td><img src="postimage/{{$row->image}}" height="100px" width="100px"></td>
                <td><a href="{{url('delete_post',$row->id)}}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure, you want to delete this post?')">Delete</a></td>
                <td><a href="{{url('edit_page',$row->id)}}" class="btn btn-sm btn-warning">Edit</a></td>
                <td><a href="{{url('accept_post',$row->id)}}" class="btn btn-sm btn-primary" onclick="return confirm('Are you sure, you want to update the status of this post?')">Accept</a></td>
                <td><a href="{{url('reject_post',$row->id)}}" class="btn btn-sm btn-light" onclick="return confirm('Are you sure, you want to reject this post?')">Reject</a></td>
            </tr>

            @endforeach
            

        </tbody>
      </table>
      </div>
      </div>
        @include('admin/footer')
  </body>
</html>