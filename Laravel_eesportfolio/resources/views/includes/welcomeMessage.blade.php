<div class="container" id="welcome-main">
    <div class="row">
        <!--First Message Section-->
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-3 hidden-xs" id="firstMessage">
            <p  class="text-center" >Let&#39;s build something great together</p>
        </div>
        <!--Form Section-->  
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-4 col-sm-6 
        col-sm-offset-3" id="quotesContactForm">   
        <p  id="quote_form_header" class="text-center" >Contact me today for a free quote</p>     
            @if(Session::has('success'))
              <div class="alert alert-success">
                {{ Session::get('success') }}
              </div>
            @endif
            {!! Form::open(['route'=>'contactMe.store']) !!}
           <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
              {!! Form::label('Name:') !!}
              {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                <span class="text-danger">{{ $errors->first('name') }}</span>
           </div>
           <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
              {!! Form::label('Email:') !!}
              {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
              <span class="text-danger">{{ $errors->first('email') }}</span>
           </div>     
           <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
             {!! Form::label('Comments:') !!}
             {!! Form::textarea('comments', old('comments'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
             <span class="text-danger">{{ $errors->first('comments') }}</span>
            </div>
            <div class="form-group">
             <button class="btn btn-success">Submit</button>
            </div>
         {{ Form::close() }}
        </div>
    </div>
</div>