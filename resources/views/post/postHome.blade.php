

    @extends('post.layout')
    @section('content')

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4"><i>post from all user displayed here </i></h1>

          <!-- Author -->
         

          <hr style="height:5px;color:#444;background-color:#444;" />

          

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://www.ntlcg.com/wp-content/uploads/ntlcg-banner3-900x300.jpg" alt="">

           <hr style="height:4px;color:#444;background-color:#444;" />

          <!-- Post Content -->

          @foreach($post as $show)
                <p><h4>{{$show->title}}</b></h4><br>
                <h5>{{$show->description}}</h5>
                <footer class="blockquote-footer">Posted by:
                   <i>{{$show->userEmail}}</i>
                </footer></p>
                <hr style="height:2px;color:#444;background-color:#444;" />
           @endforeach     

         

          

@extends('post.footer')