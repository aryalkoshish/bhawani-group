    @extends('cd-admin.home-master')

    @section('page-title')  
    Clients
    @endsection

    @section('content')
    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="Content col-xs-12" >
       <section class="content-header">

        <h1 style="text-align: center;"> Add client</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">View  Clients</li>
        </ol>
      </section>
      <section class="content">
        <div>
          <a href="{{route('addclient')}}"><button class="btn btn-default bg-green " >Add client
          </button></a>
        </div>

        <div class="row">



          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    

                    <th>Image</th>
                    <th>Alternative Image</th>
                    <th>name</th>
                    <th>info</th>
                    <th>status</th>
                    <th>option</th>  
                  </tr>
                </thead>
                <tbody>
                  @foreach($client as $t)
                  <tr>
                    

                    <td><img src="{{asset('public/upload/client/'.$t->image)}}" height="50px;"> </td>
                    <td>{!!$t->altimage!!}</td>
                    <td>{{$t->name}}</td>
                    <td>{{$t->info}}</td>
                    <td>
                      <form method="POST" action="{{route('client.status',$t->id)}}" >
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
                    </form>
                    </td>
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
                            <form action="{{route('showeditclient',$t->id)}}" method="get" enctype="multipart/form-data" >
                              @csrf
                              <button type="submit" >Edit</button>   </form>                   
                            </div>
                            <div>
                            <form action="{{route('clientshow',$t->id)}}" method="get" enctype="multipart/form-data" >
                              @csrf
                              <button type="submit" >View</button>   </form>                   
                            </div>
                            <div>
                              <form action="{{route('delclient',$t->id)}}" method="post" enctype="multipart/form-data" >
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