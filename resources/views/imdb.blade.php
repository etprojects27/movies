<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IMDB</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <div id="container">
            <div id="menu" class="hide">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <div id="menu-container">
                    <p>This is a full screen menu</p>
                    <p>Close me from the <br/>upper "Back arrow"</p>
                </div>
            </div>
            <div id="top-menu">
                <div id="top-menu-container">
                    <div><i class="fa fa-bars fa-2x"></i></div>
                    <div><img src="logo-imdb-2.png" alt="Imdb-logo" id="imdb-logo"></div>
                    <div><i class="fa fa-user fa-2x"></i></div>
                </div>
            </div>
            
            <div id="movies-container">
                 @foreach ($movies as $movie)
                    <div class="card rounded mb-3 p-2 movie-card">
                        <div class="row no-gutters">
                            <div class="col-5">
                                <img src="{{ $movie->image }}" alt="{{ $movie->name }}">
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h5 class="card-title"><strong>{{ $movie->name }}</strong></h5>
                                    <div class="rating"><i class="fa fa-star" aria-hidden="true"></i><span class="movie-rating">{{number_format($movie->rating,1)}}</span></div>
                                    <div class="card-description d-flex align-items-center">
                                        <?php 
                                            $directors = $movie->artists()->director()->pluck('name')->toArray();
                                            $writers = $movie->artists()->writer()->pluck('name')->toArray();
                                            $stars = $movie->artists()->star()->pluck('name')->toArray();
                                        ?>
                                        <div>
                                            @if (count($directors)>0)
                                                <div>
                                                <span class="bold">Director:</span> <span>{{ implode(', ',$directors) }}</span>
                                                </div>
                                            @endif
                                            @if (count($writers)>0)
                                                <div>
                                                <span class="bold">Writers:</span> <span>{{ implode(', ',$writers) }}<span>
                                                </div>
                                            @endif
                                            @if (count($stars)>0)
                                                <div>
                                                <span class="bold">Stars:</span> <span>{{ implode(', ',$stars) }}<span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <a href="#" class="btn view-more medium">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- BOOTSTRAP -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                var height = $("#container").height();
                $("#menu").height(height);

                $(".fa-bars").click(function(){
                     $('#menu').toggleClass('hide');

              });
              $(".fa-arrow-left").click(function(){
                     $('#menu').toggleClass('hide');

              });
            });
        </script>
    </body>
</html>