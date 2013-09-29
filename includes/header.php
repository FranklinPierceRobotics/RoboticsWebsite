<!DOCTYPE html>
    <html>
        <head>
            <title>FPHS Robotics</title>
            <link REL="SHORTCUT ICON" HREF="./favicon.ico">
            <script src="./scripts/jquery.min.js"></script>
            <script src="./scripts/jquery.scrolltab.js"></script>
            <script>
                $(document).ready(function(){
                    $("#logo").bind("mouseenter mouseleave", function(){
                        //mouse in
                        var newSrc = $("#logo").attr("altSrc");
                        $("#logo").attr("altSrc", $("#logo").attr("src"));
                        $("#logo").attr("src", newSrc);
                    });
                });
            </script>
            <style>
                body
                {
                    padding: 50px;
                    background-color: black;
                }
                #mainContainer
                {
                    background-color: white;
                    height: 100%;
                    padding: 20px;
                    margin-right: 150px;
                }
                #sponsors
                {
                    /*border: 2px solid white;*/
                    background-color: black;
                    color: white;
                    width: 195px;
                    padding: 5px;
                    position: fixed;
                    right: 0px;
                    top: 70px;
                    text-align: center;
                }
                #sponsors img
                {
                    margin-top: 15px;
                }
                #header
                {
                    position: fixed;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height:60px;
                    padding: 5px;
                    padding-top: 7px;
                    color: white;
                    background-image: linear-gradient(bottom, rgb(194,28,2) 34%, rgb(255,0,0) 67%);
                    background-image: -o-linear-gradient(bottom, rgb(194,28,2) 34%, rgb(255,0,0) 67%);
                    background-image: -moz-linear-gradient(bottom, rgb(194,28,2) 34%, rgb(255,0,0) 67%);
                    background-image: -webkit-linear-gradient(bottom, rgb(194,28,2) 34%, rgb(255,0,0) 67%);
                    background-image: -ms-linear-gradient(bottom, rgb(194,28,2) 34%, rgb(255,0,0) 67%);
                    background-image: -webkit-gradient(
                            linear,
                            left bottom,
                            left top,
                            color-stop(0.34, rgb(194,28,2)),
                            color-stop(0.67, rgb(255,0,0))
                    );
                }
                #header h1
                {
                    position: absolute;
                    left: 70px !important;
                    top: 1px;
                }
                #header #links
                {
                    display: inline;
                    position: absolute;
                    left: 475px;
                    top: 25px;
                    text-decoration: overline underline;
                    font-size: 175%;
                }
                #header #links td
                {
                    text-decoration: overline underline;
                    padding-right: 15px;
                    cursor: pointer;
                }
                #header a
                {
                    color: white;
                    text-decoration: none;
                }
            </style>
        </head>
        <body>
            <div id="header">
                <a href="./index.php"><img id="logo" src="./images/logo.png" altSrc="./images/logo2.png" height="50" />
                <h1>FPHS TSA and Robotics</h1>
                </a>
                <span id="links">
                    <table border="0">
                        <tr>
                            <td><a href="./frc.php">FRC</a></td>
                            <td><a href="./ftc.php">FTC</a></td>
                            <td><a href="mailto:llandow@fpschools.org">Contact Mentor</a></td>
                            <td><a href="http://firstteam3781.blogspot.com/">3781 Blog</a></td>
                        </tr>
                    </table>
                </span>
            </div>
            <div id="sponsors">
                <h1>Sponsors</h1>
                <center>
                    <a href="http://www.jcpenney.com/" target="_blank"><img alt="JCPenny" src="./images/jcpenny_logo.jpg" width="130" /></a>
                    <br />
                    <a href="http://www.4-h.org/" target="_blank"><img alt="4-H" src="./images/4h_logo.jpg" width="130" /></a>
                    <br />
                    <a href="http://www.mclendons.com/" target="_blank"><img alt="Mclendon" src="./images/mclendon_logo.png" width="130" /></a>
                </center>
            </div>
            <div id="mainContainer">