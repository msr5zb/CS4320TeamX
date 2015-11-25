@extends('app')

@section('content')
    
<!--Tutorial Section! -->    
                <section id="block-download " class="fancySection">
                    <div class="page-header fancyHeader" id="test">
                        <h1>Welcome, {{ Auth::user()->userSSO }}</h1>
                    </div>
                    <div id="siteTutContainer">
                        <img src="{{ asset('/images/siteTutorial.png') }}" id="siteTut" />
                    </div>
                    
                    <div class="panel-body">
                        {!! Form::open(array('url' => '/testScore', 'method' => 'get')) !!}
                        <div class="form-group">
                            {!! Form::submit('Create Access Application', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                </div>
                       
                </section>  
@endsection
