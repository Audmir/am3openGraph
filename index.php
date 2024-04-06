<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>am3openGraph</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://www.fgbiashara.com/am3openGraph/img/logo.png">

    <meta property="og:title" content="<?php echo "Amtech corporation"; ?>"/>
    <meta property="og:description" content="<?php echo "Audrey mirindi's company located in DRCongo"; ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.fgbiashara.com/am3openGraph/">
    <meta property="og:locale:alternate" content="fr_FR">
    <meta property="og:site_name" content="Amtech"/>

    <meta name="twitter:card" content="Amtech corporation" />
    <meta name="twitter:site" content="@am3openGraph" />
    <meta name="twitter:title" content="am3openGraph" />
    <meta name="twitter:description" content="Audrey Mirindi's company located in DRCongo" />
    <meta name="twitter:image" content="<?php echo "https://www.fgbiashara.com/am3openGraph/img/logo.png" ?>" />

    <meta property="og:image" content="<?php echo "https://www.fgbiashara.com/am3openGraph/img/logo.png" ?>"; />
    <meta property="og:image:secure_url" content="<?php echo "https://www.fgbiashara.com/am3openGraph/img/logo.png"; ?>" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="A shiny red apple with a bite taken out" />
</head>

<body>
    <center>
        <div class="image_card"><img src="img/logo.png" alt=""></div>
        <div class="share">
        <button id="facebook"><i class="fa fa-facebook"></i></button>
        <button id="whatsapp"><i class="fa fa-whatsapp"></i></button>
        <button id="twitter"><i class="fa fa-twitter"></i></button>
    </div>
    <style>
    .image_card {
        position: relative;
        overflow: scroll;
        width: 300px;
        border-radius: 8px;
        height: 100%;
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .image_card img {
        position: relative;
        /* object-fit: cover; */
        width: 100%;
        height: 65%;
    }
    </style>
    </center>
</body>
<script>

    let postUrl = encodeURI(document.location.href);
    let titleUrl = "Whatsapp share button";
    const facebook = document.getElementById("facebook");
    const whatsapp = document.getElementById("whatsapp");
    const twitter = document.getElementById("twitter");

    facebook.onclick = () => {
        window.location.href = `https://www.facebook.com/sharer.php?u=${postUrl}`;
    }

    whatsapp.onclick = () => {
        window.location.href =  `https://api.whatsapp.com/send?text=${titleUrl} ${postUrl}`;
    }

    twitter.onclick = () => {
        window.location.href = `http://www.twitter.com/share?url=${postUrl}`;
    }
</script>

</html>