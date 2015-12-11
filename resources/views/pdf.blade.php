@extends( 'app' )

@section( 'content' )

<form action="" method="post">
	<object>
		<div class="footer_box_content">
		    <div class="cleaner_h10"></div>
		    	<p>When HELLO appears below, you can view your form</p>
		    <div class="button_01"><a href="{{ asset('dstain.pdf') }}" target="_blank">here</a></div>
		</div>
	</object>
</form>

<?php
	if(isset($_POST)) 
	{
		echo "<h2>HELLO</h2>";
		$a = "phantomjs rasterize.js form2.html dstain.pdf Letter 5.7";
		exec($a);
	} 
	else 
	{
		echo "<h2>Goodbye</h2>";
	}
?>

@endsection

@endsection