  <div class="container" id="contactInformationContainer">
    @if(Session::has('success'))
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
    @endif
    <div class="col-md-6">
    {!! Form::open(['route'=>'contactInformation.store']) !!}
    <h1  id="contact_form_header" class="text-center" >Contact Form</h1>
    <hr>     
      <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" style="margin-top: 20px;">
      <i class="fa fa-book"></i>  {!! Form::label('Name:') !!}
        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
        <span class="text-danger">{{ $errors->first('name') }}</span>
      </div>
      <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <i class="fa fa-envelope"></i>{!! Form::label('Email:') !!}
        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
        <span class="text-danger">{{ $errors->first('email') }}</span>
      </div>
        <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
        <i class="fa fa-phone"></i>{!! Form::label('Phone:') !!}
        {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Enter Phone Number']) !!}
        <span class="text-danger">{{ $errors->first('phone') }}</span>
      </div>
        <div class="form-group {{ $errors->has('bestContactMethod') ? 'has-error' : '' }}">
        <i class="fa fa-book"></i>
        {!! Form::label('Prefered Contact Method:') !!}
        {!! Form::select('bestContactMethod', array('phone' => 'Phone', 'email' => 'Email', 'skype' => 'Skype'), null, ['class'=>'form-control'])!!}
        <span class="text-danger">{{ $errors->first('bestContactMethod') }}</span>
      </div>
        <div class="form-group {{ $errors->has('howDidYouHeadAboutMe') ? 'has-error' : '' }}">
        <i class="fa fa-book"></i>{!! Form::label('How did you hear about my services?') !!}
        {!! Form::text('howDidYouHeadAboutMe', old('howDidYouHeadAboutMe'), ['class'=>'form-control', 'placeholder'=>'e.g. From a friend...']) !!}
        <span class="text-danger">{{ $errors->first('howDidYouHeadAboutMe') }}</span>
      </div>   
      <div class="form-group {{ $errors->has('comments') ? 'has-error' : '' }}">
        <i class="fa fa-comment"></i>{!! Form::label('Comments:') !!}
        {!! Form::textarea('comments', old('comments'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
        <span class="text-danger">{{ $errors->first('comments') }}</span>
      </div>
      <div class="form-group">
        <button class="btn btn-success">Submit</button>
       {{ Form::reset('Reset', ['class' => 'btn btn-danger']) }}   
      </div>
       {{ Form::close() }}
       </div>

    <div class="col-md-6">
     <h1  id="contact_form_header" class="text-center" >Living in beautiful Kelowna, BC</h1>
    <hr>
        <iframe allowfullscreen frameborder="0" width="100%" height="400" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB5Bog0aSZ8T3xEIednZq3lG6ogD1Q8c6c&amp;q=Kelowna%2Cbc&amp;zoom=11"></iframe>
    </div>
    <hr>
    <div class="col-md-6">
    <hr>
     <panel class="panel-title">
       <h1 >Ernesto Silva <small id="job_title">Software/Web Development</small></h1>
     </panel>
     <panel   class="panel-body">
      <ul id= "myInfo">
       <li>edgard.ernesto.silva@gmail.com</li>
       <li>1+ 250-864-0725</li>
       <li>www.eesportfolio.ca</li>
      </ul>
     </panel>     
    </div>


  </div>