<section class="slider_section">
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">

        <div class="carousel-inner">
            @foreach($sliderdata as $rs)
                <div class="carousel-item">
                    <img src="{{Storage::url($rs->image)}}" style="width:100%">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Our <br> <strong class="black_bold">Latest </strong><br>
                                <strong class="yellow_bold">Product </strong></h1>
                            <p>It is a long established fact that a r <br>
                                eader will be distracted by the readable content of a page </p>
                            <a href="#">see more Products</a>
                        </div>
                    </div>
                </div>
            @endforeach


</section>
<section class="slider_section">
    <!DOCTYPE html>
    <html>
    <title>W3.CSS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {
            display: none;
        }
    </style>
    <body>
    <h2 class="w3-center">Manual Slideshow</h2>
    @foreach($sliderdata as $rs)
        <div class="w3-content w3-display-container" style="height: 100px; width:500px;">
            <img class="mySlides" src="{{Storage::url($rs->image)}}" style="width:100%">
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
                if (n > x.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = x.length
                }
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
            }
        </script>

    </body>
    </html>

</section>
