@extends( 'app' )

@section( 'content' )
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<style>
	  table, th, td {
	    border: 1px solid black;
    	border-collapse: collapse;
	  }
	    
	  th, td {
	    padding: 5px;
	  }
	</style>


	<div class="container">
	  <h2>Security Request Form</h2>
	  <p><strong>* indicates required field</strong></p>
	  <!--<div class="progress">
	    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
	    </div>
	  </div> -->
	  <div class="panel-group" id="accordion">
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#basicinfo">Basic Information</a>
	        </h4>
	      </div>
	      <div id="basicinfo" class="panel-collapse collapse in" style="padding:25px">
	        <form class="form-inline" role="form">
	          <div class="form-group">
	            <label for="usr">* Name:</label>
	            <input type="text" class="form-control" id="usr" style="padding-right:25px">
	          </div>
	          <div class="form-group">
	            <label for="pwprt">* PawPrint/SSO:</label>
	            <input type="text" class="form-control" id="pwprt">
	          </div>
	          <div class="form-group">
	            <label for="title">* Title:</label>
	            <input type="text" class="form-control" id="title">
	          </div>
	          <div class="form-group">
	            <label for="dept">* Department:</label>
	            <input type="text" class="form-control" id="dept">
	          </div>
	          <div class="form-group">
	            <label for="empID">* Employee ID:</label>
	            <input type="text" class="form-control" id="empID">
	          </div>
	          <div class="form-group">
	            <label for="cpaddr">* Campus Address:</label>
	            <input type="text" class="form-control" id="cpaddr">
	          </div>
	          <div class="form-inline">
	            <label for="phnum">* Phone Number:</label>
	            <input type="text" class="form-control" id="phnum">
	          </div>
	        </form>
	        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    			<input type="button" name="Submit" value="Submit">
			</form>
	    <!--    <input type="submit" class="btn btn-save" name="save">Save Progress</button>
	-->
	        <button type="button" class="btn cont1" value="u_continue">Continue</button>

	        <?php
	        	$clicked = 0;
	        	if(isset($_POST["submit"])) {
	        		$clicked = $clicked++;
	        	}
	        	
	        	echo "$clicked" ;
	        	
	        ?>

	      </div>
	    </div>
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#reqinfo">Request Information</a>
	        </h4>
	      </div>

	      <div id="reqinfo" class="panel-collapse collapse" style="padding:25px">

	        <div class="panel" id="reqtype">
	          <p>Request Type:</p>
	          <div class="radio-inline">
	            <label><input type="radio" name="optradio">New Request</label>
	          </div>
	          <div class="radio-inline">
	            <label><input type="radio" name="optradio">Additional Request</label>
	          </div>
	        </div>
	          <form role="form">
	            <div class="form-group" style="padding:25">
	              <p style="padding-top:10px">* Please describe the type of access needed (i.e. view student name, address, rosters, etc.). Please be specific.</p>
	              <textarea class="form-control" rows="5" id="comment"></textarea>
	            </div>
	          </form>
	        <button type="button" class="btn btn-save">Save Progress</button>
	        <button type="button" class="btn cont2">Continue</button>
	      </div>
	    </div>


	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#ferpa">FERPA Score</a>
	        </h4>
	      </div>
	      <div id="ferpa" class="panel-collapse collapse" style="padding:25px">
	        <div>
	          <p style="padding-right:25px">A passing score of 85% on the FERPA Quiz is required before access to student data is approved. Access to the FERPA tutorial and the FERPA quiz can be done at <link>http://myzoutraining.missouri.edu/ferpareq.php</link>.</p>
	          </div>
	        <div class="form-inline">
	          <label for="usr">* FERPA Score:</label>
	          <input type="text" class="form-control " id="usr" style="padding-right:25px">
	        </div>
	        <button type="button" class="btn btn-save">Save Progress</button>
	        <button type="button" class="btn cont3">Continue</button>
	      </div>
	    </div>

	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#acadcar">Academic Careers</a>
	        </h4>
	      </div>
	      <div id="acadcar" class="panel-collapse collapse" style="padding:25px">
	        <div>
	          <p style="padding-bottom:10px">* Select the Academic Carrer(s). Please check all that apply.</p>
	          <form role="form" style="padding-bottom:10px" style="padding:10px">
	            <label class="checkbox-inline"style="padding-left:25px">
	              <input type="checkbox" value="">UGRD
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">GRAD
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">MED
	            </label>
	            <label class="checkbox-inline">
	              <input type="checkbox" value="" style="padding-left:25px">VET MED
	            </label>
	            <label class="checkbox-inline">
	              <input type="checkbox" value="" style="padding-left:25px">LAW
	            </label>
	          </form>
	        </div>
	        <button type="button" class="btn btn-save">Save Progress</button>
	        <button type="button" class="btn cont4">Continue</button>
	      </div>
	    </div>

	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#sturecords">Student Records Access</a>
	        </h4>
	      </div>
	      <div id="sturecords" class="panel-collapse collapse" style="padding:25px">
	        <table style="width:100%">
	          <tr>
	            <th>Role</th>
	            <th>Role Description</th>   
	            <th>View</th>
	            <th>Update</th>
	          </tr>
	          <tr>
	            <td>Basic Inquiry</td>
	            <td>Access to basic bio demo and student data: names, address, FERPA directory data, photos, term info, degree information, programs, honors and awards, service indicators (holds) and previous schools.</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td></td> 
	          </tr>
	          <tr>
	            <td>Advanced Inquiry</td>
	            <td>Includes Basic Inquiry access. Additionally includes relations with institution, citizenship, visa, decedant data, student enrollment, gpa, term history, 3C's, advisors, student groups</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>3Cs</td> 
	            <td>Checklists, Comments, Communications</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Advisor Update</td> 
	            <td>Adding an advisor to a student's record</td>    
	            <td></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Department SOC Update</td> 
	            <td>Scheduling courses, assigning faculty to course, generating permission numbers</td>    
	            <td></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Service Indicators (Holds)</td> 
	            <td>Administrative users with proper security can assign or remove service indicators from a student's record</td>
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Student Group View</td> 
	            <td>View groups a student is associated with</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td></td> 
	          </tr>
	          <tr>
	            <td>View Study List</td> 
	            <td>View a student's class schedule</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td></td> 
	          </tr>
	          <tr>
	            <td>Registrar Enrollment</td> 
	            <td>Adding and dropping a course utilizing Enrollment Request</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Advisor Student Center</td> 
	            <td>Access to students study list, advisor, program/plan, demographic data, e-mail address</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td></td>
	          </tr>
	          <tr>
	            <td>Class Permission</td> 
	            <td>Creating general or student specific class permission numbers</td>    
	            <td></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Class Permission View</td> 
	            <td>View class permission numbers which have been created for a course</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td></td> 
	          </tr>
	          <tr>
	            <td>Class Roster</td> 
	            <td>View students enrolled, dropped or withdrawn in a course</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td></td> 
	          </tr>
	          <tr>
	            <td>Block Enrollments</td> 
	            <td>Adding and dropping a course utilizing Enrollment Request</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Report Manager</td> 
	            <td>Assists in running various reports</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td></td> 
	          </tr>
	          <tr>
	            <td>Self Service Advisor</td> 
	            <td>View Advisee photo, addresses, service indicators, emergency contacts, telephone numbers, grades, class schedule, enrollment appointment, print academic advising profile</td>    
	            <td></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Fiscal Officer</td> 
	            <td>View enrollment summary, term statistics, and UM term statistics</td>    
	            <td><input type="checkbox" value=""></td>    
	            <td></td> 
	          </tr>
	          <tr>
	            <td>Academic Advising Profile</td> 
	            <td>Allows printing of the Academic Advising Profile</td>    
	            <td></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	        </table>
	        <button type="button" class="btn btn-save">Save Progress</button>
	        <button type="button" class="btn cont5">Continue</button>
	      </div>
	    </div>
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#admiss">Admissions Access</a>
	        </h4>
	      </div>
	      <div id="admiss" class="panel-collapse collapse" style="padding:25px">
	        <p style="padding-bottom:10px">* Check which test(s) access is to be granted. Please check all that apply.
	          <label class="checkbox-inline"style="padding-left:250px">
	            <input type="checkbox" value=""><strong>ALL</strong>
	          </label>
	        </p>
	          <form role="form" style="padding-bottom:10px" style="padding:10px">
	            <label class="checkbox-inline"style="padding-left:25px">
	              <input type="checkbox" value="">ACT
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">SAT
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">GRE
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">GMAT
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">TOFEL
	            </label>
	          </form>
	          <form role="form" style="padding-bottom:10px" style="padding:10px">
	            <label class="checkbox-inline"style="padding-left:25px">
	              <input type="checkbox" value="">IELTS
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">LSAT
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">MCAT
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">AP
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">CLEP
	            </label>
	          </form>
	          <form role="form" style="padding-bottom:10px" style="padding:10px">
	            <label class="checkbox-inline"style="padding-left:25px">
	              <input type="checkbox" value="">GED
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">MILLERS
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">PRAX
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">PLA-MU
	            </label>
	            <label class="checkbox-inline" style="padding-left:25px">
	              <input type="checkbox" value="">BASE
	            </label>
	          </form>
	          <button type="button" class="btn btn-save">Save Progress</button>
	          <button type="button" class="btn cont6">Continue</button>
	      </div>
	    </div>

	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#stucashiers">Student Financials (Cashiers) Access</a>
	        </h4>
	      </div>
	      <div id="stucashiers" class="panel-collapse collapse" style="padding:25px">
	        <table style="width:100%">
	          <tr>
	            <th>Role</th>
	            <th>Role Description</th>   
	            <th>View</th>
	            <th>Update</th>
	          </tr>
	          <tr>
	            <td>SF General Inquiry</td>
	            <td>For staff outside of the Cashiers Office</td>    
	            <td><input type="checkbox" value=""></td>
	            <td></td>
	          </tr>
	          <tr>
	            <td>SF Cash Group Post</td>
	            <td>Also known as "Cost Centers" (for areas that want to apply charges)</td>    
	            <td><input type="checkbox" value=""></td>
	            <td><input type="checkbox" value=""></td>
	          </tr>
	        </table>
	        <button type="button" class="btn btn-save">Save Progress</button>
	        <button type="button" class="btn cont7">Continue</button>
	      </div>
	    </div>

	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#stufinaid">Student Financial Aid Access</a>
	        </h4>
	      </div>
	      <div id="stufinaid" class="panel-collapse collapse" style="padding:25px">
	        <table style="width:100%">
	          <tr>
	            <th>Role</th>
	            <th>Role Description</th>   
	            <th>View</th>
	            <th>Update</th>
	          </tr>
	          <tr>
	            <td>FA Cash</td>
	            <td>View a student's financial aid awards and budget</td>    
	            <td><input type="checkbox" value=""></td>
	            <td></td>
	          </tr>
	          <tr>
	            <td>FA Non Financial Aid Staff</td>
	            <td>Also known as "Cost Centers" (for areas that want to apply charges)</td>    
	            <td><input type="checkbox" value=""></td>
	            <td></td>
	          </tr>
	        </table>
	        <button type="button" class="btn btn-save">Save Progress</button>
	        <button type="button" class="btn cont8">Continue</button>
	      </div>
	    </div>

	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#reserved">Reserved Access</a>
	        </h4>
	      </div>
	      <div id="reserved" class="panel-collapse collapse" style="padding:25px">
	        <table style="width:100%">
	          <tr>
	            <th>Role</th>
	            <th>View</th>   
	            <th>Update</th>
	          </tr>
	          <tr>
	            <td>Immunization View</td>
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Transfer Credit Admission</td>
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Relationships</td> 
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Student Groups</td>
	            <td></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Accommodate (Student Health)</td>
	            <td></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>Support Staff (Registrar's Office)</td> 
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	          <tr>
	            <td>SAdvance Standing Report</td> 
	            <td><input type="checkbox" value=""></td>    
	            <td><input type="checkbox" value=""></td> 
	          </tr>
	        </table>
	        <button type="button" class="btn btn-save">Save Progress</button>
	        <button type="button" class="btn cont9">Continue</button>
	      </div>
	    </div>

	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" data-parent="#accordion" href="#auth">Authorization</a>
	        </h4>
	      </div>
	      <div id="auth" class="panel-collapse collapse" style="padding:25px">
	        <p>By signing, I understand any access given me is for University purposes as part of my job responsibilities. I am responsible for exercising due care to protect this information from unauthorized discloser by safeguarding my password(s) and ensuring the data I obtain is disseminated only through approved University channels. Unauthorized access and use/dissemination of data, are serious offenses, which may be subjected to disciplinary action.</p>
	        <button type="button" class="btn btn-save">Save Progress</button>
	        <button type="submit" name="submit" class="btn cont-final">Review and Submit Form</button>
	      </div>
	    </div>

	  </div> 
	</div>

	<?php
		if( isset( $_POST[ 'submit' ] ) )
		{
			//step 1: assert all required fields were added
			assert( isset( $_GET[ 'name' ] ) );
			//step 2: grab all variables
			//step 3: return them to the controller??? and/or return them to model??? (how do I persist changes to our database?)
		} //end if
	?>

	<script>
	$('.btn btn-cont').on('click',function(e){

	    if($(this).parents('.panel').children('.panel-collapse').hasClass('in')){
	        e.preventDefault();
	        e.stopPropagation();
	    }
	});

	//continue button 1 (Basic Info -> Request Info)
	$(".cont1").on("click", function() {
	  $("#basicinfo").collapse('hide');
	});

	$(".cont1").on("click", function() {
	  $("#reqinfo").collapse('show');
	});

	//continue button 2 (Request Info -> Ferpa)
	$(".cont2").on("click", function() {
	  $("#reqinfo").collapse('hide');
	});

	$(".cont2").on("click", function() {
	  $("#ferpa").collapse('show');
	});

	//continue button 3 (Ferpa -> Academic Careers)
	$(".cont3").on("click", function() {
	  $("#ferpa").collapse('hide');
	});

	$(".cont3").on("click", function() {
	  $("#acadcar").collapse('show');
	});

	//continue button 4 (Academic Careers -> Student Records)
	$(".cont4").on("click", function() {
	  $("#acadcar").collapse('hide');
	});

	$(".cont4").on("click", function() {
	  $("#sturecords").collapse('show');
	});

	//continue button 5 (Student Records -> Admissions)
	$(".cont5").on("click", function() {
	  $("#sturecords").collapse('hide');
	});

	$(".cont5").on("click", function() {
	  $("#admiss").collapse('show');
	});

	//continue button 6 (Admissions -> Student Cashiers)
	$(".cont6").on("click", function() {
	  $("#admiss").collapse('hide');
	});

	$(".cont6").on("click", function() {
	  $("#stucashiers").collapse('show');
	});

	//continue button 7 (Student Cashiers-> Student Financial Aid)
	$(".cont7").on("click", function() {
	  $("#stucashiers").collapse('hide');
	});

	$(".cont7").on("click", function() {
	  $("#stufinaid").collapse('show');
	});

	//continue button 8 (Student Financial Aid -> Reserved)
	$(".cont8").on("click", function() {
	  $("#stufinaid").collapse('hide');
	});

	$(".cont8").on("click", function() {
	  $("#reserved").collapse('show');
	});

	//continue button 9 (Reserved -> Authorization)
	$(".cont9").on("click", function() {
	  $("#reserved").collapse('hide');
	});

	$(".cont9").on("click", function() {
	  $("#auth").collapse('show');
	});


	</script>
@endsection