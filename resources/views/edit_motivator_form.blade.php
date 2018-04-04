@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update a motivator for ..!</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/motivators/update') }}">
                        {{ csrf_field() }}
                        <!--
                        <input name="goal_id" type="hidden" value="">
                        !-->
                        <input name="id" type="hidden" value="{{ $motivator->id }}">                        

                        <div class="form-group{{ $errors->has('motivator_type') ? ' has-error' : '' }}">
                            <label for="motivator_type" class="col-md-4 control-label">Motivator Type</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="motivator_type"
                                       value="{{ empty(old('motivator_type')) ? $motivator->type : old('motivator_type') }}" required autofocus>

                                @if ($errors->has('motivator_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('motivator_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('motivator_name') ? ' has-error' : '' }}">
                            <label for="motivator_name" class="col-md-4 control-label">Motivator Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="motivator_name"
                                       value="{{ empty(old('motivator_name')) ? $motivator->name : old('motivator_name') }}" required autofocus>

                                @if ($errors->has('motivator_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('motivator_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('motivator_desc') ? ' has-error' : '' }}">
                            <label for="motivator_desc" class="col-md-4 control-label">Motivator Description</label>

                            <div class="col-md-6">
                                <!--
                                <input id="name" type="text" class="form-control" name="motivator_desc" value="{{ old('motivator_desc') }}" required autofocus>
                                !-->
                                    <textarea id="name" class="form-control" name="motivator_desc" required autofocus>{{ empty(old('motivator_desc')) ? $motivator->desc : old('motivator_desc') }}</textarea>

                                @if ($errors->has('motivator_desc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('motivator_desc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Motivator
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
