@extends('appLarge')

@section('content')

<!--Tutorial Section! -->


<div class="panel-heading"><h1>Welcome, {{ Auth::user()->userSSO }}</h1></div>
    <div class="panel-body">
        @if (!count($requestView))
            <h3>You Currently Have no Form Requests.</h3>
        @else
            <h3>You Currently Have {{(count($requestView))}}  Saved Form Requests.</h3>

              <div class="container">
                  <div class="row">
                    <div class="col-md-4">
                    Request ID
                    </div>
                    <div class="col-md-4">
                      Last Updated
                    </div>
                    <div class="col-md-4">

                    </div>
                  </div>
                  <br>
                    <?php $flag =0; ?>
                    {!! Form::open() !!}
                    @for($i = 0; $i < count($requestView); $i++)
                      @if(!$requestView[$i]->complete)
                          <?php $flag++ ?>
                          <div class="row">
                            <div class="col-md-4">
                              {{$requestView[$i]->requestId}}
                            </div>
                            <div class="col-md-4">
                              {{ $requestView[$i]->updated_at }}
                            </div>
                            <div class="col-md-4">
                              {!! Form::radio('requestView',  $requestView[$i]->requestId) !!}
                            </div>
                          </div>
                          <br>
                      @endif
                    @endfor
                    @if(!($flag == 0))
                      {!! Form::submit('Edit', array('class' => 'btn btn-primary')) !!}
                    @endif
                    {!! Form::close() !!}
                 <!-- Note, Final PDF Format Not Finished -->
                 <button id="downloadPDFbutton" onclick="javascript:createPDF()" style="visibility: hidden;">Download PDF</button>
            </div>
        @endif

        <div id="previewPane" style="visibility: hidden;"><h1>Preview of Request Form:</h1>

            <div id="content"></div>

        </div>
    </div>
@endsection
