@extends('app')

@section('content')
    
<!--Tutorial Section! -->    
                    

<div class="panel-heading"><h1>Welcome, {{ Auth::user()->userSSO }}</h1></div>
    <div class="panel-body">
    
            
            <h1>Select a Form to View!</h1>
          <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <!-- Note, These Will Be Populated With Laravels foreach technique... -->
                <!-- Will Also need to pass Variable into function container user/form details-->
                <li><a href="#" onclick="javascript:showPreview()">Dummy Form 1</a></li>
                <li><a href="#" onclick="javascript:showPreview()">Dummy Form 2</a></li>
                <li><a href="#" onclick="javascript:showPreview()">Dummy Form 3</a></li>
  
              </ul>
              
             <!-- Note, Final PDF Format Not Finished -->
             <button onclick="javascript:createPDF()">Download PDF</button>
            </div>
         
        <div id="previewPane" style="visibility: hidden;"><h1>Preview of Request Form:</h1>
        
            <div id="content"></div>
        
        </div>
    </div> 
@endsection
