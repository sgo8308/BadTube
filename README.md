# BadTube
![image](https://user-images.githubusercontent.com/71138398/225192477-8d8e9444-f70c-4716-b18a-e2d14fadd6b2.png)
## 개요

유튜브는 학습에 유용합니다.<br><br>
그러나 학습만 하기에는 나를 유혹하는 영상들이 너무 많습니다.<br><br>
그래서 영상 추천도, 검색도 없는 불편한 유튜브를 만들었습니다.<br><br>
사이트 차단 프로그램으로 로컬 컴퓨터에 유튜브를 차단하고, 이 사이트를 이용하여 꼭 필요한 영상만 볼 수 있어요 !

## 사전 준비
1. AWS EC2에 아파치, php를 다운 받고 /var/www/html/badtube/에 badtubeDp.php, home.php를 넣어놉니다. <br>
2. [youtube 영상 다운로더](https://github.com/yt-dlp/yt-dlp)를 EC2에 설치합니다. 

## 사용 방법
1. http://EC2공인IP/badtube/home.php로 사이트에 접속합니다.
2. 구글에서 유튜브 영상을 검색합니다.<br>
3. 유튜브 영상 링크를 복사해서 배드튜브 링크 삽입란에 붙여넣기 합니다.<br>
4. 입력을 클릭한 후 기다립니다.<br>
5. 기다리다 보면 영상이 나옵니다.<br>

※ 영상을 서버에 다운로드 한 후 틀어주는 방식이기 때문에 로딩이 오래 걸릴 수 있습니다.
<br>
※ 비용 문제로 Serverless 방식으로의 전환을 고민중입니다.
