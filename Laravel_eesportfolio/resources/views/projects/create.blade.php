@extends('layouts.master')

@section('content')
<div class="container" style="margin-top:140px;1">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1 class="text-center">Add project</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('project_title') ? ' has-error' : '' }}">
                            <label for="project_title" class="col-md-4 control-label">Project Title</label>

                            <div class="col-md-6">
                                <input id="project_title" type="text" class="form-control" name="project_title" value="{{ old('project_title') }}" required autofocus>

                                @if ($errors->has('project_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('project_Date') ? ' has-error' : '' }}">
                            <label for="project_Date" class="col-md-4 control-label">project Date</label>

                            <div class="col-md-6">
                                <input id="project_Date" type="project_Date" class="form-control" name="project_Date" value="{{ old('project_Date') }}" required>

                                @if ($errors->has('project_Date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_Date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('project_description') ? ' has-error' : '' }}">
                            <label for="project_description" class="col-md-4 control-label">project_description</label>

                            <div class="col-md-6">
                                <input id="project_description" type="project_description" class="form-control" name="project_description" required>

                                @if ($errors->has('project_description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="project_isDone" class="col-md-4 control-label">Status</label>

                            <div class="col-md-6">
                                <input id="project_isDone" type="password" class="form-control" name="project_isDone" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
