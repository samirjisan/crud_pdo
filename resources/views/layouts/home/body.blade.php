<!DOCTYPE html>
<html>
<head>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 180px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>


<div class="gallery">
    <a target="_blank" href="https://laravel.com/">
        <img src="{{asset('frontEnd')}}/images/lv.jpg" alt="Documentation" width="600" height="400">
    </a>
    <div class="desc">Laravel</div>
</div>
<div class="gallery">
    <a target="_blank" href="https://www.river-management.org/">
        <img src="{{asset('frontEnd')}}/images/img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">River Boat</div>
</div>

<div class="gallery">
    <a target="_blank" href="http://www.bforest.gov.bd/">
        <img src="{{asset('frontEnd')}}/images/img_forest.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">Forest</div>
</div>

<div class="gallery">
    <a target="_blank" href="https://www.space.com">
        <img src="{{asset('frontEnd')}}/images/img_lights.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">Green Light</div>
</div>

<div class="gallery">
    <a target="_blank" href="https://www.worldatlas.com">
        <img src="{{asset('frontEnd')}}/images/img_mountains.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc">Mountains</div>
</div>

<div class="gallery">
    <a target="_blank" href="https://www.prothomalo.com">
        <img src="{{asset('frontEnd')}}/images/pl.jpg" alt="News" width="600" height="400">
    </a>
    <div class="desc">News</div>
</div>


<div class="gallery">
    <a target="_blank" href="https://www.espncricinfo.com/">
        <img src="{{asset('frontEnd')}}/images/cr.jpg" alt="Game" width="600" height="400">
    </a>
    <div class="desc">Cricket</div>
</div>

</body>
</html>
