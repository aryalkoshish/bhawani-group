    @extends('cd-admin.home-master')

    @section('page-title')  
    Contact
    @endsection

    @section('content')
    <div class="content-wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="Content col-xs-12" >
       <section class="content-header">

        <h1 style="text-align: center;"> View Contact</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">View Contact</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    
                    <th>E mail</th>
                    <th>subject</th>
                    <th>Message</th>  
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($reply as $t)
                  <tr>
                    <td>{!!$t->to!!}</td>
                    
                    <td>{{$t->subject}} </td>
                    <td>{!! str_limit($t->message,$limits='5')!!}</td>
                    <td>
                      <a href="" data-toggle="modal" data-target="#view{{$t->id}}"><button class="btn btn-success"><i class="fa fa-eye"></i></button></a>
                                    
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
      {{-- view modal for seo --}}
@foreach($reply as $t)
<div id="view{{$t->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">View replies</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <div class="box box-primary">
          <strong>To:</strong><br>{{e($t->to)}}<br>
          <strong>Subject:</strong><br>{{e($t->subject)}}<br>
          <strong>Message:</strong>{!!$t->message!!}<br>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
 </div> 
@endforeach
      @endsection