    @extends('cd-admin.home-master')

    @section('page-title')	
    Articles
    @endsection

    @section('content')
    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="Content col-md-12" >
       <section class="content-header">

        <h1 style="text-align: center;"> View Article</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">View Article</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
        <div>
          <a href="{{route('articles')}}"><button class="btn btn-default bg-green " >Add Article 
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
                      <th>Article Name</th>                     
                      <th>Description</th>                      
                      <th>Status</th>
                      <th>Action</th>                    
                    </tr>
                  </thead>
                  <tbody>

                    @foreach($article as $v)
                    <tr>
                      <td>{{$v->title}}</td>
                      
                      <td>{!! str_limit($v->description,$limits='5')!!}</td>
                      <td>
                       <form method="POST" action="{{route('article.status',$v->id)}}" >
                        @csrf
                        <div class="btn-group">
                         @if($v->status == 'active')
                         <button type="button" class="btn btn-success">{{$v->status}}</button>
                         @else
                         <button type="button" class="btn btn-danger">{{$v->status}}</button>
                         @endif
                         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        @if($v->status == 'active')
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
                    <div class="btn-group">
                      <button type="button" class="btn btn-success">Action</button>
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu"style="min-width: 0px; margin: 2px" >
                        <li>
                          <div>
                            <form action="{{route('show.article',$v->id)}}" method="get" enctype="multipart/form-data" >
                              @csrf
                              <button type="submit" >view</button> 
                            </form>                     
                          </div>
                        </li>
                        <li>
                          <div>
                            <form action="{{route('showedit.article',$v->id)}}" method="get" enctype="multipart/form-data" >
                              @csrf
                              <button type="submit" >Edit</button> 
                            </form>                     
                          </div>

                        </li>
                        <li>
                          <div>
                            <form action="{{route('del.article',$v->id)}}" method="post" enctype="multipart/form-data" >
                              @csrf
                              <button type="submit" >Delete</button> 
                            </form>                     
                          </div>
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