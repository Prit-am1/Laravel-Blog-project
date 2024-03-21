<div class="services_section layout_padding">
   <div class="container">
      <h1 class="services_taital">Blog Posts</h1>
      <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
      <div class="services_section_2">
         <div class="row">

         @foreach ($post as $row)
            
            <div class="col-md-4" style="margin-top: 30px;">
               <div><img style="height: 250px; width: 350px;" src="postimage/{{$row->image}}" class="services_img"></div>
               <h4>{{$row->title}}</h4>
               <p>Post by <b>{{$row->name}}</b></p>
               <div class="btn_main"><a href="{{url('post_details',$row->id)}}">Read More</a></div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
</div>