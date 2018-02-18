@extends('layouts.app')

@section('title','View Person Information')

@section('content')
 <div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class="active">View Contacts</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">View Contact</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" name="contact_form" id="contact_form" enctype="multipart/form-data" method="post" action="process_form.php">
          <fieldset>

            <div class="form-group">
              <label class="col-lg-4 control-label" for="profile_pic">Profile picture:</label>
              <div class="col-lg-5">
                <a href="{{ url('images',$tasks->pro_pic)}} " target="_blank"><img src="{{ url('images',$tasks->pro_pic)}} " alt="" width="100" height="100" class="thumbnail" ></a>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label" for="first_name"><span class="required">*</span>Full Name:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" placeholder="Full Name" value=" {{ $tasks->f_name }} " id="f_name" class="form-control" name="f_name"><span id="f_name_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="middle_name">Nick Name:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value=" {{ $tasks->n_name }} " placeholder="Nick Name" id="n_name" class="form-control" name="n_name">
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label" for="middle_name">Birth date:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value=" {{ $tasks->b_date }} " placeholder="Birth date" id="b_date" class="form-control" name="b_date">
              </div>
            </div>                                
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="email_id"><span class="required">*</span>Email ID:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value=" {{ $tasks->c_email }} " placeholder="Email ID" id="c_email" class="form-control" name="c_email"><span id="email_id_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="contact_no1"><span class="required">*</span>Contact No #1:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value=" {{ $tasks->cont_1 }} " placeholder="Contact Number" id="cont_1" class="form-control" name="cont_1"><span id="contact_no1_err" class="error"></span>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-lg-4 control-label" for="contact_no2">Contact No #2:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value=" {{ $tasks->cont_2 }} " placeholder="Contact Number" id="cont_2" class="form-control" name="cont_2"><span id="contact_no2_err" class="error"></span>
              </div>
            </div>                    
                       
            <div class="form-group">
              <label class="col-lg-4 control-label" for="address">Address:</label>
              <div class="col-lg-5">
                <textarea id="address" readonly="" name="address" rows="3" class="form-control"> {{ $tasks->address }}</textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="col-lg-4 control-label" for="website">Website:</label>
              <div class="col-lg-5">
                <input type="text" readonly="" value=" {{ $tasks->website }} " placeholder="Last Name" id="website" class="form-control" name="website"><span id="last_name_err" class="error"></span>
              </div>
            </div>

          </fieldset>
        </form>

      </div>
    </div>
  </div>
  </div>
</div>
@endsection