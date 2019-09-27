    @extends('cd-admin.home-master')

    @section('page-title')  
    Services
    @endsection

    @section('content')
    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="Content col-md-12" >
    
       <section class="content-header">
        <h1 style="text-align: center;"> View Service</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">View Service</li>
        </ol>
      </section>
  <section class="content">
        <div>
          <a href="{{route('addservice')}}"><button class="btn btn-default bg-green " >Add Service
          </button></a>
        </div>
          <div class="row">
          <div class="col-md-12">
            <!-- /.box -->

            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> Title</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>option</th>  
                  </tr>
                </thead>
                <tbody>
                  @foreach($service as $t)
                  <tr>
                    <td>{!!$t->title!!}</td>

                    <td><img src="{{asset('public/upload/service/'.$t->image)}}" height="50px;"> </td>
                    <td> <form method="POST" action="{{route('service.status',$t->id)}}" >
                      @csrf
                      <div class="btn-group">
                       @if($t->status == 'active')
                       <button type="button" class="btn btn-success">{{$t->status}}</button>
                       @else
                       <button type="button" class="btn btn-danger">{{$t->status}}</button>
                       @endif
                       <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      @if($t->status == 'active')
                      <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                        <li> <button class="btn btn-danger" type="submit">Inactive</button>
                        </li>
                      </div>
                      @else
                      <div class="dropdown-menu" role="menu" style="min-width: 0px;">
                        <li> <button class="btn btn-success" type="submit">Active</button>
                        </li>
                      </div>
                      @endif
                    </div> 
                  </form></td>
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
                          <form action="{{route('showeditservice',$t->id)}}" method="get" enctype="multipart/form-data" >
                            @csrf
                            <button type="submit" >Edit</button>   </form>                   
                          </div>
                          <div>
                            <form action="{{route('showservice',$t->id)}}" method="get" enctype="multipart/form-data" >
                              @csrf
                              <button type="submit" >View</button>   </form>                   
                            </div>
                            <div>
                              <form action="{{route('delservice',$t->id)}}" method="post" enctype="multipart/form-data" >
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

                </table>
              {!! $service->links() !!}
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.row -->
        </div>
      </section>
    </div>
  </div>
@endsection