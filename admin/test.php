<html>
<head>
  <title>Your Website Title</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://www.enbridg.com/admin/test.php" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Technical supporter" />
  <meta property="og:description"   content="Salary Range" />
  <meta property="og:image"         content="http://www.enbridg/images/logo.png" />
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="http://www.enbridg.com/admin/test.php" 
    data-layout="button_count">
  </div>

</body>
</html>