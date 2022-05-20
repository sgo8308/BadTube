<?php
$videoId = $_GET['videoId'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
        /* css 리셋 */
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        .wrapper {
            display: flex;
            justify-content: start;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }
        .wrapper2{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: stretch;
        }
    </style>
</head>
<body style="margin: 50px">
<div class="wrapper" style="background-blend-mode: color-burn">
    <h1 style="font-size: 30px; margin-bottom: 10px; font-weight: bold">
        B A D T U B E
    </h1>
    <form class="wrapper2" action="badTubeDp.php" method="post" style="width: 90%">
        <div style="flex-grow: 0.2;padding-top: 3px; text-align: center; te">YOUTUBE LINK</div>
        <input type="text" name="youtubeLink" style="flex-grow: 5">
        <input type="submit" value="입력" name="button" style="flex-grow: 0.2">
    </form>
    <video id="video" controls width="90%" style="margin-top: 10px"  autoplay>

        <source src="../video/<?php echo $videoId?>.mp4" type="video/mp4">
        이 문장은 너의 브라우저가 video 태그를 지원하지 않을 때 화면에 표시됩니다!
    </video>

    <div style="border-left: 4px solid black; min-height: 100px"></div>
</div>

<!--<div>-->
<!--    영상 목록-->
<!--    <br><br>-->
<!--    --><?php
//
//    $dir = "../video/";
//
//    // Open a directory, and read its contents
//    if (is_dir($dir)){
//        if ($dh = opendir($dir)){
//            while (($file = readdir($dh)) !== false){
//                if($file !== "." && $file !== "..")
//                echo $file . "<br>";
//            }
//            closedir($dh);
//        }
//    }
//    ?>
<!--</div>-->

</body>
</html>

<script>
    var speed = 1;
    window.onkeydown = (e) => onKeyDown(e);

    function onKeyDown(e){
        if(e.key == "="){
            playSpeedUp();
        }else if(e.key == "-") {
            playSpeedDown();
        }
        else if(e.key == "0"){
            playSpeedDefault();
        }else if(e.key == ","){
            leftSkip();
        }else if(e.key == "."){
            rightSkip();
        }
    }

    function playSpeedUp(){
        speed = speed + 0.25;
        document.getElementById("video").playbackRate = speed;
    }

    function playSpeedDown(){
        speed = speed - 0.25;
        document.getElementById("video").playbackRate = speed;
    }

    function playSpeedDefault(){
        speed = 1;
        document.getElementById("video").playbackRate = speed;
    }

    function rightSkip(){
        document.getElementById("video").currentTime += 5;
    }

    function leftSkip(){
        document.getElementById("video").currentTime -= 5;
    }
</script>