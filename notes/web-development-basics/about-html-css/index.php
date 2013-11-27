<?php
$title = 'About HTML and CSS';
$pagePath = '/tutorials/about-html-css';

include_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/tutorials.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
?>

<!doctype html>
<html>
<head>
    <?php echo makeHeadSectionAll($title); ?>
    <script><!--
    $('#allPages').ready(function(){
        loadTutorial(2);
    });
    --></script>
    <?php echo makeAnalytics(); ?>
</head>
<body>
    
<?php echo makeHeader(null, $pagePath); ?>    

<?php
$pages = array(
    'What is HTML?',
    'What is CSS?'
);

echo makeTutorialFeature($title, $pages);
?>

<div id="content" class="pageBox">
    <div class="loading">
        <?php echo makeLoadingDiv(); ?>
    </div>

    <div id="currentPage"></div>
    
    <div class="pageButtons"></div>
    
    <div id="allPages">
        <div class="page" id="page-1">
            <h2>What is HTML?</h2>
            <p><strong>HyperText Markup Language</strong>, abbreviated <strong>HTML</strong>, is the primary scheme used to create and format a structured web document. HTML uses the idea of structural semantics to format the text and overall look and layout of the document, more appropriately in the form of HTML tags. These tags are easily observed in HTML through the use of angle brackets enclosing them. Many different tags exist in HTML; the HTML tutorials cover much of them.</p>
            <h3>History and timeline</h3>
            <p>Now developed mainly by the World Wide Web Consortium (W3C), the earliest versions of HTML originated from way back in 1989. With the advent of the Internet, HTML has become standardized and was widely adopted throughout the late 1990s. HTML became an international standard by 2000, and has been recommended by the W3C ever since. Several revisions of the standard have been drafted and approved; as of February 2011, HTML version 4.01 stands as the most currently approved revision, with version 5 in the planning/drafting stages.</p>
            <ul>
            	<li><strong>1989:</strong> <a href="http://en.wikipedia.org/wiki/Tim_Berners-Lee">Tim Berners-Lee</a> proposes an Internet-based hypertext system.</li>
            	<li><strong>1990:</strong> The original HTML specification is completed, with browser and server software written.</li>
            	<li><strong>1991:</strong> The idea and purpose behind HTML design are published, becoming widely available.</li>
            	<li><strong>1993:</strong> A <a href="http://www.w3.org/MarkUp/draft-ietf-iiir-html-01.txt">draft</a> of the original HTML specification is proposed by the <a href="http://www.ietf.org/">Internet Engineering Task Force</a>.</li>
            	<li><strong>1994:</strong> The IETF creates the HTML Working Group to further maintain and improve the HTML specification.</li>
            	<li><strong>1995: <a href="http://tools.ietf.org/html/rfc1866">HTML 2.0</a></strong> was published. Supplements through 1997 provided additional capabilities.</li>
            	<li><strong>1996:</strong> The IETF closes the HTML Working Group, with the <a href="http://www.w3.org">World Wide Web Consortium (W3C)</a> assuming further development.</li>
            	<li><strong>1997, January: <a href="http://www.w3.org/TR/REC-html32">HTML 3.2</a></strong> was published as a W3C recommendation.</li>
            	<li><strong>1997, December: <a href="http://www.w3.org/TR/REC-html40-971218/">HTML 4.0</a></strong> was published as a W3C recommendation.</li>
            	<li><strong>1999: <a href="http://www.w3.org/TR/html401/">HTML 4.01</a></strong> was published as a W3C recommendation.</li>
            	<li><strong>2000:</strong> The <a href="http://www.iso.org/iso/home.html">International Organization of Standardization (ISO)</a> designates HTML 4.01 as an international standard.</li>
            	<li><strong>2008: <a href="http://www.w3.org/TR/html5/">HTML5</a></strong> is published as a W3C Working/Editor's Draft.</li>
            </ul>
                <p>As of February 2011, HTML5 is still in its development stages although adoption has already started.</p>
        </div>
        <div class="page" id="page-2">
            <h2>What is CSS?</h2>
            <p><strong>Cascading Style Sheets</strong>, or <strong>CSS</strong> for short, is a style sheet language used to describe how text and other content should be presented in a document. CSS can be applied to not only style content written in HTML (although it is most commonly used this way); in fact, CSS can be virtually applied to any markup language, including <a href="http://en.wikipedia.org/wiki/XHTML">Extensible HyperText Markup Language (XHTML)</a> and <a href="http://en.wikipedia.org/wiki/XML">Extensible Markup Language (XML)</a>. In a nutshell, CSS attempts to separate document content which is written in a markup language, from document presentation. This idea of separation should improve the way content is accessed; it would additionally increase control in the characteristics of presentation, enable multiple pages to use the same formatting, and most importantly reduce repetition in the document's structural content.</p>
            <h3>History</h3>
            <p>Like HTML, CSS is currently developed by the <a href="http://www.w3.org">World Wide Web Consortium (W3C)</a>. The first CSS specification to become officially recommended by the W3C was published in December 1996, known as CSS level 1. A superset of CSS level 1 has since been developed and recommended by the W3C in 1998; known as CSS level 2 and CSS level 2 revision 1, a number of brand new capabilities for advanced formatting were introduced. Since December 2005, CSS level 3 has been in the drafting stages and is intended to be a superset of both levels 1 and 2.</p>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>