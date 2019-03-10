
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Scroll Horizontally Extension - fullPage.js</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="Scroll Horizontally Extension" />
    <meta name="keywords"  content="fullpage,extension,addon,plugin,scrollhorizontally,scroll horizontally,horizontal,horizontally,landscape,slides,slide,panel,full-screen,full width,mousewheel,wheel,trackpad, snap" />
    <meta name="Resource-type" content="Document" />

    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css" />
    <link rel="stylesheet" type="text/css" href="css/examples.css" />

    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->
</head>
<body>

<ul id="menu">
    <li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
    <li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>
</ul>



<div id="myContainer">

    <div class="section">
        <div class="slide">
            <di class="intro">

                <h1>Scroll Horizontally</h1>
                <p>Use `scrollHorizontally: true` and enable the mouse wheel horizontal scroll for slides.</p>
            </di>
        </div>
        <div class="slide"><h1>Slide 1.2</h1></div>
        <div class="slide"><h1>Slide 1.3</h1></div>
    </div>
    <div class="section"><h1>Section 2</h1></div>
    <div class="section">
        <div class="slide"><h1>Section 3</h1></div>
        <div class="slide"><h1>Slide 3.2</h1></div>
        <div class="slide"><h1>Slide 3.3</h1></div>
        <div class="slide"><h1>Slide 3.4</h1></div>
    </div>
    <div class="section"><h1>Section 4</h1></div>
</div>


<!-- WARNING!! -->
<!-- This file is limited. You can't use it to test the extension! It won't work. -->
<!-- You have to purchase it to try it as detailed in the FAQs:  -->
<!-- https://alvarotrigo.com/fullPage/extensions/faqs.html-->
<script type="text/javascript" src="js/fullpage.scrollHorizontally.limited.min.js"></script>
<!-- END WARNING-->

<script type="text/javascript" src="js/fullpage.extensions.min.js"></script>
<script></script>
<script type="text/javascript">
    new fullpage('#myContainer', {
        sectionsColor: ['#ff73a1', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff', '#ccc'],
        anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
        menu: '#menu',
        slidesNavigation: true,
        scrollHorizontally: true,
        scrollHorizontallyKey: 'YWx2YXJvdHJpZ28uY29tX01mU2MyTnliMnhzU0c5eWFYcHZiblJoYkd4NVNRcg==',
        afterSlideLoad: function(section, origin, destination, direction){
            console.log({
                section: section,
                origin: origin,
                destination: destination,
                direction: direction
            });
        },
        onSlideLeave: function(section, origin, destination, direction){
            console.log({
                section: section,
                origin: origin,
                destination: destination,
                direction: direction
            });
        }
    });
</script>
</body>
</html>
