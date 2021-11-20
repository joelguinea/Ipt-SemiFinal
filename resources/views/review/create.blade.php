@extends('pages\base')

@section('content')


    <h1>Add New Review</h1>
  <div class="row">
     <div class="col-md-5">
        {!! Form::open(['url'=>'/review', 'method' =>'post'])  !!}

        <div class="form-group">
           
            {{Form::label('name', 'Review Name')}}
            {{Form::text('name', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group">
           
            {{Form::label('email', 'Email')}}
            {{Form::text('email', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group">
           
            {{Form::label('message')}}
            {{Form::text('message', null, ['class'=>'form-control'])}}
    
        </div>

        <div class="form-group">
           
            {{Form::label('rating')}}
            {{Form::number('rating', null, ['class'=>'form-control'])}}     
        </div> 
            <button class="btn btn-dark float-right">
                   Create Review

            </button>
        </div>
    
        {!! Form::close()  !!}
     </div>
<div class="col-md-6">
    @if (count($errors)>0)

    <div class="card">
<div class = "card-body bg-danger text-warning">
    All Fields Required!
<ul>
    @foreach ($errors->all() as $err)
    <li>{{$err}}</li>      
    @endforeach
</ul>
</div>

    </div>
        
    @endif
</div>
  </div>

@endsection