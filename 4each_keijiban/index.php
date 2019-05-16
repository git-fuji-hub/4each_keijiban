<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Man City 掲示板</title>
    <link rel="stylesheet"type="text/css" href="style.css">
</head>
    
    <!--4each掲示板を試合感想掲示板へ改良-->
    
    <div class="logo">
        <img src="Manchester_City_FC_badge.svg">
    </div>
    
    <header>
        <ul>
            <li>トップ</li>
            <li>選手一覧</li>
            <li>シティについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    
    <body>
        <main>
            <div class="main-container">
                <div class="left">
                    <h1>Man City 試合感想掲示板</h1>
                    
                    <form method="post" action="insert.php">
                        <div class="nyuryoku">
                            <h2>入力フォーム</h2>
                        </div>
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="40" name="handlename">
                        </div>
                        <div>
                            <label>本日のMan of The Match</label>
                            <br>
                            <input type="text" class="text" size="40" name="title" placeholder="選手名"></div>
                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="70" rows="7" name="comments" placeholder="良い点、悪い点、次節へ向けて等"></textarea></div>
                        <div>
                            <input type="submit" class="submit" value="投稿する"></div>
                    </form>
                    
                    <?php
                    mb_internal_encoding("utf8");
                    $pdo = new PDO("mysql:dbname=fuji;host=localhost;","root","mysql");
                    $stmt = $pdo->query("select*from 4each_keijiban");
                    ?>

                    <?php
                    
                    while($row=$stmt->fetch()){
                        
                    echo"<div class='kiji1'>";
                    echo"<h3>".$row['title']."</h3>";
                    echo"<div class='nakami1'>";
                    echo $row['comments'];
                    echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                    echo"</div>";
                    echo"</div>";
                    }
                    
                    ?>
                    
                    <?php
                    
                    while($row=$stmt->fetch()){
                    echo"<div class='kiji1'>";
                    echo"<h3>".$row['title']."</h3>";
                    echo"<div class='nakami1'>";
                    echo $row['comments'];
                    echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                    echo"</div>";
                    echo"</div>";
                    }
                    
                    ?>
                </div>
            </div>
            
            <div class="right">
                <div class="komidashi1">
                    <h3>人気の記事</h3>
                </div>
                <p>・試合速報</p>
                <p>・順位表</p>
                <p>・得点ランキング</p>
                <p>・注目選手</p>
                <div class="komidashi2">
                    <h3>オススメリンク</h3>
                </div>
                <P>・リヴァプール</P>
                <P>・トッテナム</P>
                <P>・チェルシー</P>
                <P>・アーセナル</P>
                <P>・マンチェスターユナイテッド</P>
                <div class="komidashi3">
                    <h3>カテゴリ</h3>
                </div>
                <p>・プレミアリーグ</p>
                <p>・ラ・リーガ</p>
                <p>・セリエA</p>
                <p>・チャンピオンズリーグ</p>
            </div>
        </main>
        
        <footer>
            copyright Hiroki Fujiwara
        </footer>
    </body>
</html>