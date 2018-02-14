@extends('layouts.app')

@section('title','Mini Address Book')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: rgb(31, 106, 177);font-size: 30px;"><marquee width = "50%">Mini Address Book Web App Developed by M. Ray</marquee></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">               
                      <div class="panel panel-primary">
                        <div class="panel-heading">
                          <h3 class="panel-title">Address Book</h3>
                        </div>
                        <div class="panel-body">

                          <div class="col-lg-12" style="padding-left: 0; padding-right: 0;" >
                            <!--<form action="" method="get" >-->
                            <div class="col-lg-6 pull-left"style="padding-left: 0;"  >
                              <span class="pull-left">  
                                <label class="col-lg-12 control-label" for="search" style="padding-right: 0;">
                                  <input type="text" placeholder="live search" id="search" class="form-control" name="search" style="height: 41px;">
                                </label>
                                </span>
                              <!--<button class="btn btn-info">search</button>-->
                            </div>
                            <!--</form>-->

                            <div class="pull-left" ><a href="{{ url('/download') }}"><button class="btn btn-success"><i class="fas fa-cloud-download-alt"></i>Download Contract</button></a></div>

                            <div class="pull-right" ><a href="{{ url('/contract') }}"><button class="btn btn-success"><span class="glyphicon glyphicon-user"></span> Add New Contact</button></a></div>
                          </div>

                          <div class="clearfix"></div>
                    <!---->
                            <div class="table-responsive">
                              <table class="table table-striped table-hover table-bordered ">
                                <thead>
                                  <tr>
                                    <th>People</th>
                                    <th>Full Name</th>
                                    <th>Nick Name</th>
                                    <th>Email </th>
                                    <th>Contact No #1 </th>                   
                                    <th>Action </th>
                                  </tr>
                                </thead>

                                <tbody>
                                @if (count($tasks) > 0)
                                    @foreach ($tasks as $task)
                                        <tr>
                                          <td style="text-align: center;">
                                            <a href="{{ url('view',$task->id) }}"><img src="{{ url('images', $task->pro_pic) }}" alt="" width="50" height="50" ></a>
                                          </td>
                                          <td>{{$task->f_name}}</td>
                                          <td>{{$task->n_name}}</td>
                                          <td>{{$task->c_email}}</td>
                                          <td>{{$task->cont_1}}</td>
                                          <td>
                                            <a href="{{ url('view',$task->id) }}"><button class="btn btn-sm btn-info"><span class="glyphicon glyphicon-zoom-in"></span> View</button></a>&nbsp;

                                            <a href=" {{ url('edit',$task->id) }} "><button class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>&nbsp;
                                            <a href=" {{ url('delete',$task->id ) }} " onclick="return confirm('Are you sure?')"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Delete</button></a>&nbsp;
                                          </td>
                                        </tr>
                                    @endforeach
                                
                                @endif
                     <!---->   
                                </tbody>
                              </table>
                              
                                @if(count($tasks)==0)                  
                                  <div class="col-lg-12 center">
                                     Empty List
                                  </div>                                
                                @endif

                            <div class="col-lg-12 center">
                              <ul class="pagination pagination-sm">
                               
                                {{ $tasks->links() }}              
                                     
                              </ul>
                            </div>

                            </div>
                                                                                               
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

  <script>
  $(document).ready(function(){
      $('#search').on('keyup',function(){     
          $value=$(this).val();
          $.ajax({
            type : 'get',          
            url : '{{URL::to('search')}}',          
            data:{'search':$value},          
            success:function(data){           
              $('tbody').html(data);          
            }     
        });
    })
  }); 
</script>

@endsection
