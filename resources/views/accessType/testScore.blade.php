@extends('app')

@section('content')

                <section id="block-download " class="fancySection">
                    <div class="page-header fancyHeader" id="test">
                        <h1>FERPA Quiz</h1>
                    </div>

                    
                    <div class="panel-body">
                    <h4 align="center">A passing score of 85% on the FERPA Quiz is required before access to student data is approved.<br> To request access to the FERPA tutorial and access the FERPA quiz can be done at <a href="http://myzoutraining.missouri.edu/ferpareq.php">here</a></h4>
                    {!! Form::open() !!}
                    <div class="form-group centerInsides">
                                {!! Form::label('Score', 'Score:', ['class' => 'score']) !!}
                                {!! Form::text('Score', null) !!}	
                        <br>
                        {!! Form::Submit('Next', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                    </div>     
                </section>  

@endsection