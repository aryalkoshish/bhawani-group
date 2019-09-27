@extends('cd-admin.home-master')

@section('page-title')  
Client
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header col-md-12">
    <h1> Client</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li>Clients</li>
      

    </ol>
  </section>

  <div class="col-md-1" ></div>
  <div class="Content col-md-10" style="margin-top: 35px;"  >
   <div class="box box-info ">
    <div class="box-header with-border">

      <section class="content">
          <pre>                  
          Alternative Image Name :: {{$a->altimage}}
          Name:: {{$a->name}}
          info :: {{$a->info}}
          Status :: {{$a->status}}
          Image :: <img src="{{asset('public/upload/client/'.$a->image)}}" height="100px;"> 
        </pre>
        </div>
        

        <div class="form-group" >
         <a href="{{URL()->previous()}}"> <button type="submit" class="btn btn-default bg-yellow ">Back</button></a>
       </div>

     </section>
   </div>
 </div>
</div>



<!-- /.content-wrapper -->
@endsection