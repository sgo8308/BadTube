<?php
rmdir_all("../video");

$randVal = rand();
$link =$_POST['youtubeLink'];

$command = "/usr/local/bin/youtube-dl -o /var/www/html/video/video{$randVal} -f \"bestvideo[ext=mp4]+bestaudio[ext=m4a]\" {$link}";
echo "L O A D I N G . . . . . .";
exec($command,$output, $result);

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
?>

<script>
    location.href = './home.php?videoId=<?php echo $randVal?>'
</script>