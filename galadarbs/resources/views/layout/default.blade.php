<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<header class="bg-dark text-light">
<!-- @if(isset($name))
    {{ $name }}
@endif   -->  
<!--     @if(1 + 1 == 2)
        yay
    @elseif(1+1 == 3)
        tf
    @else
        nay
    @endif -->
    @include('layout.navigation')

</header>

<main class="container bg-warning">
    <?php if(Auth::user()){
        echo("Sveiki, ". Auth::user()->name);
    }   ?>
    <br>
    @if(Auth::user())
        Sveiki, {{ Auth::user()->name }}
    @endif

    <!-- @yield('content') -->

    @section('content')
        <h1>Lapa izstrādes stadijā</h1>
    @show
</main>

<footer class="container-fluid bg-dark text-light text-center fixed-bottom">
    2018
</footer>







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">

        // var data = 1;

        // console.log(data);
        // var data = "text";
        // console.log(data);
        // var data = {type:"Fiat", model:"500", color:"white"};
        // console.log(data);
        // alert(data);
        //alert(1);
        
        function sayHello(name){
            console.log("hello!" + name);
        }
        sayHello("Mark");

        // var paragraphs = document.getElementsByTagName("div");
        // console.log(paragraphs);

        var fourColumns = [ document.getElementsByTagName('li') ];
        console.log(fourColumns);
        fourColumns.forEach(function(element) {
          console.log("element: "  + element);
        });

        for(i = 0; i < fourColumns.length; i++)
        {
            console.log("This also works: " + fourColumns[i].value);
        }

        // var element = document.getElementById('navbarSupportedContent');
        // console.log(element);

        // setTimeout( 
        //     function(){
        //         element.innerHTML = "magic";
        //     }, 
        //     3000
        // );

        // // var flag = 0;
        // var i = 0;
        // var myInterval = setInterval( 
        //     function(){
        //         console.log(1);
        //         // if (flag == false){
        //         //     element.innerHTML = i++;
        //         // }
        //         element.innerHTML = i++;
        //     }, 
        //     1000
        // );

        // // console.log(document.getElementsByClassName("btn")[0]);
        // document.getElementsByClassName("btn")[0].addEventListener("click", function(){
        //         // flag=1;
        //         clearInterval(myInterval);
        // });

    </script>
</body>

</html>