

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.2">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://bbinternship.com/images/logo/bbi_logo.png">
    <title>お問い合わせ | B-Bridge シリコンバレー・インターンシップ  </title>

    <!-- This is our Goole NOTO SANS font and Font Awesome-->
    <link href='http://fonts.googleapis.com/earlyaccess/notosansjapanese.css' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>

          <!-- HEADER -->

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://bbinternship.com/" style="padding: 5px;"><img src="http://bbinternship.com/images/logo/Logo+BBI_final.png" title="B-Bridge International, Inc." alt="B-Bridge International, Inc." style="max-height: 40px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">

            <li><a href="http://bbinternship.com/apply.html">APPLY</a></li>

            <li class="dropdown"><a href="http://bbinternship.com/program/">PROGRAM</a>
              <ul class="dropdown-menu">
                <li><a href="http://bbinternship.com/program/overview.html">OVERVIEW</a></li>
                <li><a href="http://bbinternship.com/program/schedule.html">SCHEDULE</a></li>
                <li><a href="http://bbinternship.com/program/flow.html">FLOW</a></li>
              </ul>
            </li>

            <li class="dropdown"><a href="http://bbinternship.com/aboutus/">ABOUT US</a>
              <ul class="dropdown-menu">
                <li class="menu"><a href="http://bbinternship.com/aboutus/ourstory.html">ABOUT B-Bridge</a></li>
                <li class="menu"><a href="http://bbinternship.com/aboutus/staff.html">OUR STAFF</a></li>
                <li class="menu"><a href="http://bbinternship.com/aboutus/sv.html">SILICON VALLEY</a></li>
              </ul>
            </li>

            <li><a href="http://bbinternship.com/voice.html">VOICE</a></li>
            <li><a href="http://bbinternship.com/faq.html">FAQ</a></li>
            <li><a href="http://bbinternship.com/media.html">MEDIA</a></li>
            <li><a href="http://bbinternship.com/contact.html">CONTACT</a></li>
            <li><a href="https://facebook.com/bbinternship" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
          </ul>
        </div>
      </div>
    </nav>


          <!-- TOP -->

    <div class="contact">
      <div class="container homepage">
      <span class="fa-stack fa-3x">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span>
      <h2>お問い合わせ</h2>
      <hr>

<?
include("/var/www/lib/mail.internship@b-bridge.com.php");

$hairetsu = array($_POST['from'],$_POST['mail'],$_POST['subject'],$_POST['contents']);
$contents = print_r($hairetsu, true);

if( isset($_POST['action'])&&($_POST['action']=='mailsend') )
{
	if( !Send_EMail($_POST['to'], '', 'メールフォームからのお問い合わせ', '', 'BBInternship', $contents))
	{
		echo "サーバーエラーです。申し訳ございませんが、internship@b-bridge.comまでお問い合わせください。";
	}
	else
	{
		echo '<h3>メールが送信されました。お問い合わせありがとうございます。</h3><br>
		<h3>B-Bridge International Inc.</h3><br>
		<h4><a href="http://bbinternship.com">トップへ戻る</a></h4>';	
	}
}
?>

</div>

</div>
          <!-- FOOTER -->

    <footer>
      <div class="container">
      <div class="col-md-4"><p><a href="http://www.b-bridgejapan.com" target="_blank">B-Bridge International, Inc.</a></p>
        <p>3350 Scott Blvd. Suite 29,<br>
        Santa Clara, CA 95054<br>
        <a href="mailto:internship@b-bridge.com" target="_blank">internship@b-bridge.com</a><br>
        Tel: (408)-252-6200</p></div>
        <div class="col-md-4"><p>株式会社B-Bridge</p>
        <p>東京都千代田区三崎町2−12−7<br>
        静山ビル3F<br>
        <a href="mailto:support@b-bridge.co.jp" target="_blank">support@b-bridge.co.jp</a></p></div>
        <div class="col-md-4" style="text-align: right;"><br><br><br><br><br><br>© B-Bridge Co. Ltd., B-Bridge Int., Inc. 2015</div>
      </div>
    </footer>




