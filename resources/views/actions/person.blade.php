@extends('layouts.app')

@section('title','Adding Person Information')

@section('content')
 <div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class="active">Add Contacts</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
        <div class="panel panel-primary">
          <div class="panel-heading">
           <h3 class="panel-title" align="center">Add New Contact  </h3>
          </div>
          <div class="panel-body">
            <h3 align="center"> Add Person Infrormation </h3><br>
            <form class="form-horizontal" name="contact_form" id="contact_form" enctype="multipart/form-data" method="post" action="{{ url('add') }}" >
               {{ csrf_field() }}
               <fieldset>
                <div class="form-group">
                  <label class="col-lg-4 control-label" for="first_name"><span class="required">*</span>Full Name:</label>
                  <div class="col-lg-5">
                    <input type="text" placeholder="Your Name" id="f_name" class="form-control" name="f_name"><span id="f_name_err" class="error"></span>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label" for="middle_name">Nick Name:</label>
                  <div class="col-lg-5">
                    <input type="text" placeholder="You Nick Name" id="n_name" class="form-control" name="n_name">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label" for="middle_name">Birth Date:</label>
                  <div class="col-lg-5">
                    <input type="date" id="b_date" class="form-control" name="b_date">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label" for="email_id"><span class="required">*</span>Email ID:</label>
                  <div class="col-lg-5">
                    <input type="text"  placeholder="Email ID" id="c_email" class="form-control" name="c_email"><span id="email_id_err" class="error"></span>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label" for="contact_no1"><span class="required">*</span>Contact No #1:</label>
                  <div class="col-lg-5">
                    <input type="text" placeholder="Contact Number" id="cont_1" class="form-control" name="cont_1"><span id="contact_no1_err" class="error"></span>
                    <span class="help-block">Must be 11 digits.</span>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label" for="contact_no2">Contact No #2:</label>
                  <div class="col-lg-5">
                    <input type="text"  placeholder="Contact Number" id="cont_2" class="form-control" name="cont_2"><span id="contact_no2_err" class="error"></span>
                    <span class="help-block">Must be 11 digits .</span>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-lg-4 control-label" for="profile_pic">Profile picture:</label>
                  <div class="col-lg-5">
                    <input type="file"  id="pro_pic" class="form-control file" name="pro_pic"><span id="profile_pic_err" class="error"></span>
                    <span class="help-block">Must me jpg, jpeg, png, gif, bmp image only.</span>
                  </div>
                </div>
                                              
                
                <div class="form-group">
                  <label class="col-lg-4 control-label" for="address">Address:</label>
                  <div class="col-lg-5">
                    <textarea id="address" name="address" rows="3" class="form-control"> </textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-lg-4 control-label" for="last_name"> Website:</label>
                  <div class="col-lg-5">
                    <input type="text"  placeholder="Your website.." id="website" class="form-control" name="website"><span id="last_name_err" class="error"></span>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-lg-5 col-lg-offset-4">
                    <button class="btn btn-primary" type="submit">Submit</button> 
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