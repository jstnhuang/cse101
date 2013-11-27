<!--
    TEMPLATE CHECKLIST
    - Change pages so that it's an array of the titles for the page.
    - Add <div class="page" id="page-n"> for as many pages as you have.
    - Make a new Google Form with a single paragraph question: "What was the
      most unclear concept in this tutorial?" and add it to the end of the last
      page. Set the height of its iframe to 600px.
    - Delete this checklist when done so it doesn't appear in the page source.
-->

<?php
$title = 'HTML crash course';
$pagePath = '/tutorials/html-crash-course';

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
        loadTutorial(6);
    });
    --></script>
    <?php echo makeAnalytics(); ?>
</head>
<body>
    
<?php echo makeHeader(null, $pagePath); ?>    

<?php
$pages = array(
    'Hello, world!',
    'Bold, italic, and underline',
    'Paragraphs',
    'Headings',
    'Links',
    'Images'
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
            <h2>Hello, world!</h2>
            <p>Welcome to the world of web development! First, let's get 
            acquainted with how this website works. Type "Hello, world!" into
            the left hand side of the box below:</p>
            <?php echo makeWhiteboard('html-cc_hello-world',
                true, true, 2, 2, '', '', 0); ?>
            
            <p>This tutorial presents a really quick and brief look at HTML.
            It's a shorter version of our <a href="../html-basics">HTML
            basics</a> tutorial, so if you're interested in what you see here,
            you should check out all our <a href="../">tutorials</a>.
            <p>We use code whiteboards like the one above to demonstrate
            examples of HTML and CSS code throughout. Any code you type in the
            HTML tab on the left will be reflected automatically in the preview
            area on the right.</p>
        </div>
        
        <div class="page" id="page-2">
            <h2>Bold, italic, and underline</h2>          
            <p>As you just saw, just typing text like "Hello, world!" is HTML.
            But, we can also give things special meanings by surrounding them
            with <span class="term">tags</span>. Try copying in the
            <span class="code term">em</span> (emphasis) tag as follows:</p>
            <pre class="code">"This is no ordinary machine... it's &lt;em&gt;special&lt;/em&gt;!"</pre>
            <?php echo makeWhiteboard('html-cc_biu_em',
                true, true, 2, 2, '', '', 0); ?>
                
            <p>Try another example with the
            <span class="code term">strong</span> (strong emphasis) tag:</p>
            <pre class="code">"This is no ordinary machine... it's &lt;strong&gt;special&lt;/strong&gt;!"</pre>
            <?php echo makeWhiteboard('html-cc_biu_strong',
                true, true, 2, 2, '', '', 0); ?>
                
            <p>Get the pattern? Tags are like quotation marks. The left tag
            looks like <span class="code">&lt;tag&gt;</span> and the right tag
            looks like <span class="code">&lt;/tag&gt;</span>. As you can see
            from the above examples, "emphasis" means italicize, and "strong
            emphasis" means bold.</p>
            
            <p>Note also that you can combine tags to have them both apply at
            the same time:</p>
            <?php echo makeWhiteboard('html-basics-basic-tags-combined',
                true, true, 2, 2, 
'"This is no ordinary machine... it\\\'s <strong><em>special</em></strong>!"',
                '', 0); ?>
            
            <h3>A personal homepage: bold and italic</h3>
            <p>We'll put together a simple homepage in this crash course at the
            end of each page. Let's start by adding in some bold and italics to
            our plain text below. Bold the words "George Bluefin" in the first
            paragraph, and italicize the word "really" in the second paragraph.</p>
            
            <?php echo makeWhiteboard(
                'html-cc_biu_php', true, true, 8, 8, 
'Hi! My name\\\'s George Bluefin. Like most fish my age, I spend most of my time in my school.\n\
\n\
Last summer, I got to visit beautiful Australia! They have a really big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.', '', 0); ?>
            <?php echo makeSolution(makeWhiteboard(
                'html-cc_biu_php-sol', false, true, 8, 8, 
'Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my school.\n\
\n\
Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.', '', 0)); ?>
                
            <p>Click "next page" to move on.</p>
        </div>
        
        <div class="page" id="page-3">
            <h2>Paragraphs and newlines</h2>
            <p>Notice that if you hit "enter" to make a new line in HTML code,
            it doesn't make new lines in the result. Try copying and pasting
            in the following poem stanza:</p>
            <blockquote>Whose woods these are I think I know.<br />
His house is in the village, though;<br />
He will not see me stopping here<br />
To watch his woods fill up with snow.
            </blockquote>
            <?php echo makeWhiteboard('html-cc_paragraphs-noWhitespace',
                true, true, 4, 4, '', '', 0); ?>
            
            <p>You can also try to add two spaces in between words instead of
            just one. Notice that nothing changes on the right hand side. When
            we see this kind of behavior, we say that HTML doesn't care about
            <em>whitespace</em>. You can put spaces, tabs, or hit enter, and it
            won't make a difference.</p>
            
            <p>One way we can change this is to add a
            <span class="code term">p</span> 
            (paragraph) tag around each line, like so:</p>
            <?php echo makeWhiteboard('html-basics_paragraphs-pTag',
                true, true, 9, 9, 
'<p>Whose woods these are I think I know.</p>\n\
<p>His house is in the village, though;</p>\n\
<p>He will not see me stopping here</p>\n\
<p>To watch his woods fill up with snow.</p>', '', 0); ?>
                
            <p>When we do that, we're saying that each of those lines is a 
            "paragraph," which has space around it on the top and bottom.</p>
            
            <p>But, properly speaking, lines of poems aren't paragraphs. They're
            just lines. Another way we can format the stanza is to just use the
            <span class="code term">br</span> (line break) tag:
            <?php echo makeWhiteboard('html-basics_paragraphs-brTag',
                true, true, 5, 5, 
'Whose woods these are I think I know.<br />\n\
His house is in the village, though;<br />\n\
He will not see me stopping here<br />\n\
To watch his woods fill up with snow.', '', 0); ?>
            
            <p>One thing that's different about the
            <span class="code term">br</span> tag is that
            there's no &lt;/br&gt; tag. That's because it doesn't really make
            sense to define where a line break "ends," it's either there or it
            isn't. So, we format it like <span class="code">&lt;br /&gt;</span>
            (adding in an extra slash). We'll be sure to let you know whenever
            we encounter other tags like this.</p>
            
            <h3>A personal homepage: paragraphs and newlines</h3>
            <p>Add line breaks to the end of George's contact information, and
            make the longer bits of text below into two paragraphs.</p>
            
            <?php echo makeWhiteboard(
                'html-cc_paragraphs_php', true, true, 14, 14, 
'742 Coral Reef Lane\n\
Pacific Ocean, 10023\n\
gbluefin@webdev101.net\n\
\n\
  Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my school.\n\
\n\
\n\
  Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.\n', '', 0); ?>
            <?php echo makeSolution(makeWhiteboard(
                'html-cc_paragraphs_php-sol', false, true, 14, 14, 
'742 Coral Reef Lane<br />\n\
Pacific Ocean, 10023<br />\n\
gbluefin@webdev101.net<br />\n\
<p>\n\
  Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my school.\n\
</p>\n\
<p>\n\
  Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.\n\
</p>', '', 0)); ?>

            <p>Click "next page" to continue.</p>
        </div>
        
        <div class="page" id="page-4">
            <h2>Headings</h2>
            <p>We can make titles and sub-titles on our page using headings. We
            make a giant heading using the <span class="code term">h1</span>
            (heading 1) tag. Try adding it in below:</p>
            <pre class="code">&lt;h1&gt;Welcome to my webpage&lt;/h1&gt;</pre>
            <?php echo makeWhiteboard('html-cc_headings-h1',
                true, true, 6, 6, 
'Welcome to my webpage\n\
<p>Once I\\\'m done making it, it will be awesome.</p>', '', 0); ?>

            <p>There are 6 headings you can use
            (<span class="code term">h1</span> through
            <span class="code term">h6</span>), each smaller than the next:</p>
            <?php echo makeWhiteboard('html-cc_headings-h1toh7',
                true, true, 17, 17, 
'<h1>Heading 1</h1>\n\
<h2>Heading 2</h2>\n\
<h3>Heading 3</h3>\n\
<h4>Heading 4</h4>\n\
<h5>Heading 5</h5>\n\
<h6>Heading 6</h6>', '', 0); ?>
                
            <p>Using headings, you can think of your page like an outline. You
            use heading 1 for the biggest idea on the page. Then, you use
            heading 2 to mark the main sub-ideas under heading 1. And heading 3
            are the sub-ideas under heading 2, and so on.
                
            <h3>A personal homepage: headings</h3>
            <p>Make "George Bluefin's personal homepage into an <span
            class="code">h1</span> heading and "About me" and "Summer 2010" into
            <span class="code">h2</span> headings.</p>
            <?php echo makeWhiteboard(
                'html-cc_headings_php', true, true, 21, 21, 
'George Bluefin\\\'s personal homepage\n\
\n\
742 Coral Reef Lane<br />\n\
Pacific Ocean, 10023<br />\n\
gbluefin@webdev101.net<br />\n\
\n\
About me\n\
<p>Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my school.</p>\n\
\n\
Summer 2010\n\
<p>Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.</p>', '', 0); ?>
            <?php echo makeSolution(makeWhiteboard(
                'html-cc_headings_php-sol', false, true, 21, 21, 
'<h1>George Bluefin\\\'s personal homepage</h1>\n\
\n\
742 Coral Reef Lane<br />\n\
Pacific Ocean, 10023<br />\n\
gbluefin@webdev101.net<br />\n\
\n\
<h2>About me</h2>\n\
<p>Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my school.</p>\n\
\n\
<h2>Summer 2010</h2>\n\
<p>Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.</p>', '', 0)); ?>

            <p>Click "next page" to continue.</p>
        </div>
        
        <div class="page" id="page-5">
            <h2>Links and attributes</h2>
            <p>Links are what make websites work. It would be impossible to
            browse if there weren't links from page to page. You can make a link
            using the <span class="code term">a</span> (anchor) tag. You'll
            notice this tag looks a little different:</p>
            <pre class="code">&lt;a href="http://google.com"&gt;Google&lt;/a&gt;</pre>
            <p>Try copying that in below:</p>
            <?php echo makeWhiteboard(
                'html-cc_links-basic', true, true, 8, 8, 
'<p>Need to find something? Use Google.</p>',
                '', 0); ?>
            
            <p>(If you clicked on the link, you can return the preview window
            back to its previous state by clicking on the left hand side.)
            </p>
            
            <p>All tags have <span class="term">attributes</span>, but we
            haven't talked about them until now. Attributes are additional
            pieces of information that are relevant to a tag. In this example,
            <span class="code term">href</span> (hyperlink reference) is the
            attribute, and <span class="code">http://google.com</span> is its
            value. This makes sense, because we can't just surround the word
            "Google" with <span class="code">a</span> tags and expect it to know
            where to go. We need the <span class="code">href</span> attribute to
            say where the link goes.</p>
            
            <p>Tags can have more than one attribute, so the general form of a
            tag is:</p>
            <blockquote class="code">&lt;tag attribute1="value1" attribute2="value2" ... attributeN="valueN"&gt;</blockquote>
            
            <p>As an example of that, anchor tags have another attribute called
            <span class="code term">target</span>. It specifies where the page
            should open. By default, all pages open in the same window or tab.
            But, if you set <span class="code">target="_blank"</span>, it'll
            open in a new window instead.</p>
            
            <?php echo makeWhiteboard(
                'html-cc_links-target', true, true, 4, 4, 
'<p>Need to find something? Use <a href="http://google.com" target="_blank">Google</a>.</p>',
                '', 0); ?>
                
            <p>The order in which you put the attributes doesn't matter (try
            it!)</p>
            
            <h3>Linking to an email address</h3>
            <p>Linking to an email address looks like this:</p>
            <pre class="code">&lt;a href="mailto:gbluefin@webdev101.net"&gt;email&lt;/a&gt;</pre>
            <p>Try adding it below and clicking on the link:</p>
            <?php echo makeWhiteboard(
                'html-cc_links-email', true, true, 6, 6, 
'<h1>George Bluefin\\\'s website</h1>\n\
<p>Shoot me an email!</p>',
                '', 0); ?>
                
            <p>Click "next page" to move on.</p>
            
            <h3>A personal homepage: links</h3>
            <p>Make George's email address into a <span
            class="code">mailto</span> link as in the above example. Also, make
            a link to <span class="code">http://ucsd.edu</span> where it says
            "school" in the first paragraph.</p>
            <?php echo makeWhiteboard(
                'html-cc_links_php', true, true, 21, 21, 
'<h1>George Bluefin\\\'s personal homepage</h1>\n\
\n\
742 Coral Reef Lane<br />\n\
Pacific Ocean, 10023<br />\n\
gbluefin@webdev101.net<br />\n\
\n\
<h2>About me</h2>\n\
<p>Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my school.</p>\n\
\n\
<h2>Summer 2010</h2>\n\
<p>Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.</p>', '', 0); ?>
            <?php echo makeSolution(makeWhiteboard(
                'html-cc_links_php-sol', false, true, 21, 21, 
'<h1>George Bluefin\\\'s personal homepage</h1>\n\
\n\
742 Coral Reef Lane<br />\n\
Pacific Ocean, 10023<br />\n\
<a href = "mailto:gbluefin@webdev101.net">\n\
  gbluefin@webdev101.net\n\
</a><br />\n\
\n\
<h2>About me</h2>\n\
<p>Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my <a href="http://ucsd.edu">school</a>.</p>\n\
\n\
<h2>Summer 2010</h2>\n\
<p>Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.</p>', '', 0)); ?>
        </div>
        
        <div class="page" id="page-6">
            <h2>Images</h2>
            <p>We'll often want to put pictures in our webpages. To do so, we'll
            use the <span class="code term">img</span> (image) tag. Try copying
            this in below:</p>
            <pre class="code">&lt;img src="http://<?php echo $_SERVER['SERVER_NAME'] ?>/tutorials/html-crash-course/images/poodle.jpg" width="400" height="178" \
alt="Web Dev 101" title="Zzz..." /&gt;</pre>
            <?php echo makeWhiteboard(
                'html-cc_images-basic', true, true, 15, 15, 
'<p>Look at this adorable dog!</p>\n',
                '', 0); ?>
                
            <p>The image tag, like the <span class="code term">br</span> tag,
            has no closing <span class="code">&lt;/img&gt;</span> tag. This is
            because it also doesn't make sense to define the "end" of an image.
            Like a line break, it's either there or it isn't.</p>
            
            <p>You'll also notice that the <span class="code term">img</span>
            tag uses attributes like the <span class="code term">a</span> tag
            does:</p>
            
            <dl>
                <dt><span class="code term">src</dt>
                <dd>Stands for "source." This gives the location of the image.
                This attribute is required, because otherwise, the browser
                wouldn't know what image to display!</dd>
                <dt><span class="code term">width</span> and <span
                class="code term">height</span></dt>
                <dd>These give the width and height of the image, in pixels.
                Try changing the width to "200" and the height to "89". You've
                just halved the size! You can  set the values to anything to
                warp the image. These attributes are not required. If you don't
                include these attributes, then the browser will automatically
                use the image's natural size.</dd>
                <dt><span class="code term">alt</dt>
                <dd>Stands for "alternate text." If for some reason your image
                doesn't load, then this text appear as a replacement. This text
                is also used for accessibility, like software that helps blind
                people surf the web. As such, this attribute is required.
                Finally, some search engines will use the alternative text as
                part of their image search algorithms.</dd>
                <dt><span class="code term">title</dt>
                <dd>This specifies the text that appears when you hover your
                mouse over the image.</dd>
            </dl>
            
            <h3>A personal homepage: images</h3>
            <p>Try adding in a picture of George, located at
            <strong>http://<?php echo $_SERVER['SERVER_NAME'] ?>/tutorials/html-crash-course/images/george.jpg</strong>. Put it
            below his contact information, with an extra line break in between
            his contact information and his picture. The picture is 300 pixels
            wide and 240 pixels high.</p>
            
            <?php echo makeWhiteboard(
                'html-cc_images_php', true, true, 30, 30, 
'<h1>George Bluefin\\\'s personal homepage</h1>\n\
\n\
742 Coral Reef Lane<br />\n\
Pacific Ocean, 10023<br />\n\
<a href = "mailto:gbluefin@webdev101.net">\n\
  gbluefin@webdev101.net\n\
</a><br />\n\
\n\
\n\
\n\
<h2>About me</h2>\n\
<p>Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my <a href="http://ucsd.edu">school</a>.</p>\n\
\n\
<h2>Summer 2010</h2>\n\
<p>Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.</p>', '', 0); ?>
            <?php echo makeSolution(makeWhiteboard(
                'html-cc_images_php-sol', false, true, 30, 30, 
'<h1>George Bluefin\\\'s personal homepage</h1>\n\
\n\
742 Coral Reef Lane<br />\n\
Pacific Ocean, 10023<br />\n\
<a href = "mailto:gbluefin@webdev101.net">\n\
  gbluefin@webdev101.net\n\
</a><br />\n\
<br />\n\
\n\
<img src="http://webdev101.net/tutorials/html-basics/images/george.jpg" width="300" height="240" alt="George Bluefin" title="George Bluefin" />\n\
\n\
<h2>About me</h2>\n\
<p>Hi! My name\\\'s <strong>George Bluefin</strong>. Like most fish my age, I spend most of my time in my <a href="http://ucsd.edu">school</a>.</p>\n\
\n\
<h2>Summer 2010</h2>\n\
<p>Last summer, I got to visit beautiful Australia! They have a <em>really</em> big reef there, but I forgot its name. I\\\'ve never seen such a melting pot of underwater life--there were all sorts of crab, stingrays, plankton, and of course, fish.</p>', '', 0)); ?>
            
            <h3>Conclusion</h3>
            <p>That's it for our HTML crash course! We hope it gave you a flavor
            of what programming a website's like. If you'd like to learn more
            about HTML, see our <a href="../">other tutorials</a>. They go into
            HTML in more detail, and also talk about CSS, which gives us the
            ability to change the look of the page.</p>
            
            <h3>Tutorial survey</h3>
            <p>You can help us improve our tutorials by answering one question for us:</p>
            <iframe src="https://spreadsheets.google.com/embeddedform?formkey=dEhLNXZVOEhvRExNdTFBV0Q1N0V0MEE6MA" width="760" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>