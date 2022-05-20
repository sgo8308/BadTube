<?php
$dff = disk_free_space("/");
$dft = disk_total_space("/");
$diskFreePct = round(($dff / $dft * 100), 2);

$count = 1;
if($diskFreePct < 10){
    rmdir_all("../video");
}

function rmdir_all($delete_path) {
    $dirs = dir($delete_path);
    while(false !== ($entry = $dirs->read())) {// 디렉토리의 내용을 하나씩 읽는다.
        if(($entry != '.') && ($entry != '..')) {// 디렉토리의 내용중 현재폴더, 상위폴더가 아니면 (즉 파일 및 디렉토리)
            if(is_dir($delete_path.'/'.$entry)) { //디렉토리이면 재귀호출로 다시 삭제 시작.
                rmdir_all($delete_path.'/'.$entry);
            } else { //해당 파일 삭제
                @unlink($delete_path.'/'.$entry);
            }
        }
    }

    $dirs->close(); // 최종 디렉토리 삭제 @rmdir($delete_path); }

}

$link =$_POST['youtubeLink'];
$videoId = substr($link, -11);
$command = "/usr/local/bin/yt-dlp -o /var/www/html/video/{$videoId} -f \"bestvideo[ext=mp4]+bestaudio[ext=m4a]\" {$link}";
exec($command,$output, $result);

?>

<script>
    location.href = './home.php?videoId=<?php echo $videoId?>'
</script>
