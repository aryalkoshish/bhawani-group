    @extends('cd-admin.home-master')

    @section('page-title')  
    Testimonials
    @endsection

    @section('content')
    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="Content col-xs-12" >
       <section class="content-header">

        <h1 style="text-align: center;"> Add testimonials</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">View Testimonials</li>
        </ol>
      </section>
      <section class="content">
        <div>
          <a href="{{route('add.testmonial')}}"><button class="btn btn-default bg-green " >Add Testimonials
          </button></a>
        </div>

        <div class="row">



          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> Name</th>
                    <th>Image</th>
                    <th>Alternative Image</th>
                    <th>Description</th>
                    <th>option</th>  
                  </tr>
                </thead>
                <tbody>
                  @foreach($testimonial as $t)
                  <tr>
                    <td>{!!$t->name!!}</td>

                    <td><img src="{{asset('public/upload/testimonial/'.$t->image)}}" height="50px;"> </td>
                    <td>{!!$t->altimage!!}</td>
                    <td>{!! str_limit($t->description,$limits='5')!!}</td>
                    <td> 
                     <div class="margin">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default">Action</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                          <div>
                            <form action="{{route('showedit.testmonial',$t->id)}}" method="get" enctype="multipart/form-data" >
                              @csrf
                              <button type="submit" >Edit</button>   </form>                   
                            </div>
                            <div>
                            <form action="{{route('show.testmonial',$t->id)}}" method="get" enctype="multipart/form-data" >
                              @csrf
                              <button type="submit" >View</button>   </form>                   
                            </div>
                            <div>
                              <form action="{{route('del.testmonial',$t->id)}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <button type="submit" >Delete</button> 
                                </form>                     
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    {!! $testimonial->links() !!}
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
      </div>
      @endsection