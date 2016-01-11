<html>
 <head>

<meta charset="utf-8">
<title>Contact | B-Bridge Internship</title>

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
          <a class="navbar-brand" href="http://test.bbinternship.com/" style="padding: 5px;"><img src="images/logo/Logo+BBI_final.png" title="B-Bridge International, Inc." alt="B-Bridge International, Inc." style="max-height: 40px"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">

            <li><a href="apply.html">APPLY</a></li>

            <li class="dropdown"><a href="program/index.html">PROGRAM</a>
              <ul class="dropdown-menu">
                <li><a href="program/overview.html">OVERVIEW</a></li>
                <li><a href="program/schedule.html">SCHEDULE</a></li>
                <li><a href="program/flow.html">FLOW</a></li>
              </ul>
            </li>

            <li class="dropdown"><a href="aboutus/index.html">ABOUT US</a>
              <ul class="dropdown-menu">
                <li class="menu"><a href="aboutus/ourstory.html">ABOUT B-Bridge</a></li>
                <li class="menu"><a href="aboutus/staff.html">OUR STAFF</a></li>
                <li class="menu"><a href="aboutus/sv.html">SILICON VALLEY</a></li>
              </ul>
            </li>

            <li><a href="voice.html">VOICE</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="contact.html">CONTACT</a></li>
            <li><a href="https://facebook.com/bbinternship"><i class="fa fa-facebook-official"></i></a></li>
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
      <h2>CONTACT</h2>
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
		<h4><a href="http://test.bbinternship.com">トップへ戻る</a></h4>';	
	}
}
?>

</div>

</div>
          <!-- FOOTER -->

    <footer>
      <div class="container">
      <div class="col-md-4"><p><a href="http://www.b-bridgejapan.com" target="_blank">B-Bridge International, Inc.</a></p>
        <p>20813 Stevens Creek Blvd., Suite 200<br>
        Cupertino, CA 95014<br>
        <a href="mailto:info@b-bridge.com" target="_blank">info@b-bridge.com</a><br>
        Tel: (408)-252-6200</p></div>
        <div class="col-md-4"><p>株式会社B-Bridge</p>
        <p>東京都千代田区三崎町2−12−7<br>
        静山ビル３F<br>
        <a href="mailto:support@b-bridge.co.jp" target="_blank">support@b-bridge.co.jp</a><br>
        Tel: 03-6272-3161</p></div>
        <div class="col-md-4" style="text-align: right;"><br><br><br><br><br><br>© B-Bridge Co. Ltd., B-Bridge Int., Inc. 2015</div>
      </div>
    </footer>


</body></html>

