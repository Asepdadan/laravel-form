@extends('layout.master')

@section('title', 'Page Title')

   <script type="text/javascript">

     $(document).ready(function(){

     	$('#button').click(function(){
     		$.post("Welcome@index")

     	});
     		
     });

     </script>


@section('sidebar')
    @parent

    <nav class="navbar navbar-inverse">
    	<a class="navbar-brand" href="#">Title</a>
    	<ul class="nav navbar-nav">
    		<li class="active">
    			<a href="#">Home</a>
    		</li>
    		<li>
    			<a href="#">Link</a>
    		</li>
    	</ul>
    </nav>


@endsection

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			<form action="" method="POST" class="form-horizontal" role="form">
						<div class="form-group">
							<legend class="text-center">FORM PROFILE</legend>
						</div>
				
						<div class="form-group">
							<label>NPM</label>
							<input type="text" name="npm" id="input" class="form-control" value="" required="required" pattern="" title="">
						</div>
						
						<div class="form-group">
							<label>PASSWORD</label>
							<input type="text" name="password" id="input" class="form-control" value="" required="required" pattern="" title="">
						</div>
				
						
				
						<div class="form-group">
							
								
						</div>
				</form>
				<button type="submit" class="btn btn-primary btn btn-block" id="button">show</button>
							

				<div id="tes">

				</div>


			</div>

			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>

		</div>


	</div>

    
@endsection

@section('footer')


<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<a class="navbar-brand" href="#">Title</a>
	<ul class="nav navbar-nav">
		<li class="active">
			<a href="#">Home</a>
		</li>
		<li>
			<a href="#">Link</a>
		</li>
	</ul>
</nav>

@endsection


