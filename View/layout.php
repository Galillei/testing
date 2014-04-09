<html>
<head>
    <title>Static web-site</title>
    <link type="text/css" rel="stylesheet" href="/css/style.css"/>
    <script type="text/javascript" src="/js/validation.js"></script>
</head>
<body>
<div class="header">
    <div class="company-name">
        <h1>ACME Corporation</h1>
    </div>
    <div class="company-logo">
        <img src="/images/logo.jpg" alt="ACME Corp."/>
    </div>
</div>
<div class="content">
    <div class="nav">
        <ul class="nav-list">
            <li><a href="/">Main</a></li>
            <li><a href="/Index/table">Articles grid</a></li>
            <li><a href="/Index/form">Form</a></li>
        </ul>
    </div>
    <div class="main">
        <?= $this->renderContent(); ?>
    </div>
    <div class="cleaner"/>
</div>
<div class="footer">
    <div class="copyright">Copyright 2012 Acme Inc.</div>
    <div class="f-links"><a href="about.html">About US</a><a href="terms.html">Terms & Conditions</a></div>
</div>
</body>
</html>