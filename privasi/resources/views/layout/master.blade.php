<html>
    <head>
        <title>@yield('title')</title>

        {!! Html::style('assets/css/bootstrap.min.css') !!}

        {!! Html::script('assets/css/bootstrap.min.js') !!}


        

    </head>
     {!! Html::script('assets/css/jquery-1.9.1.min.js') !!}

     <script type="text/javascript">

     $(document).ready(function(){


     	
     })

     </script>

    <body>
        @section('sidebar')
            
        @show

        <div class="container">
            @yield('content')
        </div>

        <div class="footer">
        	@yield('footer')

        </div>


    </body>
</html>