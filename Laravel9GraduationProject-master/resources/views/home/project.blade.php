 <!-- Main -->
    <div id="main">
        <div class="inner">

            <div class="row">
                <div class="container-fluid">
                    <div class="row">

                        <html>
                        <title>W3.CSS</title>
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                        <style>
                            .mySlides {display:none;}
                        </style>

                        <body >
                        <div c></div>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <p>{{$data->description}}</p>

                            </div>
                        </div>

                        <div class="w3-content w3-display-container" style="height: 650px;width: 440px">
                            <img class="mySlides" src="{{Storage::url($data->image)}}" style="height: 650px;width: 380px;">
                            @foreach($images as $rs)
                                <img class="mySlides" src="{{Storage::url($rs->image)}}" style="height: 650px;width: 380px">
                            @endforeach
                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>

                        <script>
                            var slideIndex = 1;
                            showDivs(slideIndex);

                            function plusDivs(n) {
                                showDivs(slideIndex += n);
                            }

                            function showDivs(n) {
                                var i;
                                var x = document.getElementsByClassName("mySlides");
                                if (n > x.length) {slideIndex = 1}
                                if (n < 1) {slideIndex = x.length}
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                x[slideIndex-1].style.display = "block";
                            }
                        </script>

                        </body>
                        </html>
                    </div>
                </div>

            </div>

            <br>
            <div class="col-md-7">
                <h1>{{$data->title}} <span class="pull-right"><br></span></h1>
                <br>
                <p> {{$data->description}}</p>

                <p>{!!$data->detail!!}.</p>
            </div></div></div></div>

