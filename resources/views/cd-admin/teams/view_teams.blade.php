    @extends('cd-admin.home-master')

    @section('page-title')	
    Our team
    @endsection

    @section('content')
    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="Content col-md-12" >
       <section class="content-header">

        <h1 style="text-align: center;"> Team Members</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Teams</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div>
          <a href="{{route('teams')}}"><button class="btn btn-default bg-green " >Add team   
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
                      <th>Name</th>
                      
                      <th>Post</th>
                      <th>Image</th>
                      <th>Alternative Image Name</th>
                      <th>Action</th>
                      


                    </tr>
                  </thead>
                  <tbody>

                    @foreach($s as $v)
                    <tr>
                      <td>{{$v->name}}</td>                      
                      <td>{{$v->post}}</td>
                      <td>{{$v->altimage}}</td>
                      <td>
                        <div> 
                        <img src="{{asset('public/upload/team/'.$v->image)}}" style="height: 50px; width: 50px" >
                      </div>
                    </td>

                    <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-success">Action</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li>
                            <form action="{{route('teams.showedit',$v->id)}}" method="get" enctype="multipart/form-data" >
                                @csrf
                                <button type="submit" >Edit</button> 
                                </form>
                            </li>
                          <li>
                            <form action="{{route('showteammember',$v->id)}}" method="get" enctype="multipart/form-data" >
                                @csrf
                                <button type="submit" >view</button> 
                                </form>
                              </li>
                          <li>
                            <form action="{{route('deleteteam',$v->id)}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <button type="submit" >Delete</button> 
                                </form>
                            </li>


                        </ul>
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
</div>




  @endsection