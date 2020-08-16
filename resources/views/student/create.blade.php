@extends('common.layouts')

@section('content')
    @include('common.validator')
    <div class="panel panel-default">
        <div class="panel-heading">Adding New Students</div>
        <div class="panel-body">
            <form method="POST" action="" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-5">
                        <input type="text" name="Student[name]" value="{{ old('Student')['name'] }}" class="form-control" id="name" placeholder="please input student name">
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors->first('Student.name') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-5">
                    <input type="text" name="Student[age]" value="{{ old('Student')['age'] }}" class="form-control" id="age" placeholder="please input student age">
                </div><div class="col-sm-5">
                    <p class="form-control-static text-danger">{{ $errors->first('Student.age') }}</p>
                </div>
                </div>
                
                
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-5">
                        <label for="" class="radio-inline">
                            <input type="radio"  name="Student[Gender]" 
                            {{ (isset(old('Student')['sex']) && old('Student')['sex'] == '2') ? 'checked' : '' }} value="2">Unknown
                        </label>
                        <label for="" class="radio-inline">
                            <input type="radio"  name="Student[Gender]" {{ (isset(old('Student')['sex']) && old('Student')['sex'] == '1') ? 'checked' : '' }} value="1">Female
                        </label>
                        <label for="" class="radio-inline">
                            <input type="radio"  name="Student[Gender]" {{ (isset(old('Student')['sex']) && old('Student')['sex'] == '0') ? 'checked' : '' }} value="0">Male
                        </label>
                    </div>
                    <div class="col-sm-5">
                        <p class="form-control-static text-danger">{{ $errors->first('Student.Gender') }}</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop