<!--模板參考:https://startbootstrap.com/theme/coming-soon-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- 影片來源:https://www.youtube.com/watch?v=b1iJJZfB7i0(臨停:ABC-5678 月租:BMW-0800)-->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="assets/mp4/bg.mp4" type="video/mp4" /></video>
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4">停車場自動繳費網</h1>					
                    <form action="judge.php" method="POST" name="send" onsubmit="return check()">
						<p class="mb-5">
						<select name="gtype">
							<option value="1">臨停</option>
							<option value="2">月租</option>
						</select>
						&nbsp 請輸入您的車牌號碼
						</p>
                         <div class="row input-group-newsletter">
                            <div class="col"><input type="form-control" name="glicense" placeholder="Enter license plate number" ></div>
                            <div class="col-auto"><input type="submit" value="傳送"></div>
                        </div>
                    </form>
				</div>
            </div>
        </div>
    </body>
</html>
<script>
	function check(){
			if(document.send.glicense.value==""){
			  alert('請輸入車牌');
			  document.send.glicense.focus();
			  return false;
			}
		return true;
	}
			
</script>