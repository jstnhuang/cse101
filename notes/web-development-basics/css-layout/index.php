<?php
$title = 'CSS layout';
$pagePath = '/tutorials/divs-/ css layout';
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
    'CSS layout',
    'Floats',
    'Layout with divs',
    'HTML vs. CSS: the philosophy',
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
            <p><strong>Note:</strong> This tutorial is from an older version of
            our website. We are gradually updating our tutorials to make them more
            interactive, so stay tuned!</p>
        
            <h2>CSS layout</h2>
            <p>In our previous tutorials, we've seen lots of little elements that 
			can be part of a page. Now, we're coming to the end of what there is 
			know about HTML, and we'll start exploring more advanced concepts in CSS.
			As you'll soon see, CSS is the key to making our webpages look 
			exciting! But, before we can really go into it, we're going to need a 
			powerful new element called <span class="code">&lt;div&gt;</span>.</p>
            <h3>Getting started.</h3>
            <ol><li>Download the <a href="files/tutorial6.zip">Tutorial 6
			files</a>. Unzip them so that you see the "Tutorial 6" folder.</li></ol>
        </div>
        <div class="page" id="page-2">
            <h2>Floats</h2>
            <p>In this section, we'll go over an extremely handy CSS property 
			known as <span class="code">float</span>.</p>
            
            <p><span class="code">float</span> is a common CSS property that we'll
			set for divs when we do layouts. What it does is specially position an
			element by moving it as far to the left or right as possible.</p>
            <p>For example, open up quote.html. You can see that we have a long quote
			in a box, and then a single sentence from that quote that we want to
			feature. Usually, when you see a featured quotation like that in a 
			newspaper or a magazine, it's off to the side a little bit, with the
			rest of the text wrapping around it. We'd like to do something like that. 
			First, let's try making the featured box a little smaller:</p>
            <pre class="code">.featured {
    background-color: #DEF;
    padding: 5px;
    font-style: italic;
    font-size: 1.25em;
    line-height: 1.25em;
    <span class="newCode">width: 200px;</span>
}</pre>
            <p>This should be what you get:</p>
            <img class="screenshot" src="images/6-quote-try1.jpg" width="647" height="272" alt="Featured box try 1" title="Featured box try 1">
            <p>No luck! Just making the featured box smaller won't make the paragraph
			text wrap around it. That's because the paragraphs are block-level 
			elements, which, as we said earlier, tend to be laid out one on top of the
			other. What we really need is to bend the rules of the box model a little.
			That's where <span class="code">float</span> comes in. Try adding this in:
			</p>
            <pre class="code">.featured {
    background-color: #DEF;
    padding: 5px;
    font-style: italic;
    font-size: 1.25em;
    line-height: 1.25em;
    width: 200px;
    <span class="newCode">float: left;</span>
}</pre>
            <p>Bingo! That looks like it did it. Let's just add in a little bit of
			margin to the top and right of the featured box so that the spacing looks
			better:</p>
            <pre class="code">.featured {
    background-color: #DEF;
    padding: 5px;
    font-style: italic;
    font-size: 1.25em;
    line-height: 1.25em;
    width: 200px;
    float: left;
    <span class="newCode">margin-top: 10px;
    margin-right: 10px;</span>
}</pre>
            <p>This should be your final result:</p>
            <img class="screenshot" src="images/6-quote-try2.jpg" width="647" height="272" alt="Featured box floating" title="Featured box floating" />
            <p>However, there's one little complication with floats that might be
			a little confusing. Let's illustrate this by continuing with our
			example. Currently, the author of that quote ("Richard Feynman, 1986") is
			in normal font and to the left. Let's make it so that his name is in 
			italics, and on the right side of the box. Easy, let's just say:</p>
            <pre class="code">.author {
    <span class="newCode">font-style: italic;
    float: right;</span>
}</pre>
            <img class="screenshot" src="images/6-author-try1.jpg" width="647" height="155" alt="Author float try 1" title="Author float try 1">
            <p>Oops! What just happened?</p>
            <p>The problem here is that we made this span a floating element,
			by saying <span class="code">float: right;</span> in the CSS. As we said
			earlier, floating elements bend the layout rules of the box model. What's
			actually going on is that the element is first "lifted out" of the normal 
			layout, then moved as far to the left or right until it runs into the edge
			of its containing element, or into another floating element. After that,
			anything else just sort of wraps around it.</p>
            <p>So, in our above example, the author citation was "lifted out" of the
			layout, and moved all the way to the right, until it reached the edge of
			its containing element, the quoteBox. Since it's been "lifted out," it's
			not really in the box anymore, so the bottom of the box is at the end
			of the last paragraph, which is not floating.</p>
            <p>How can we fix this? We'll use another property of divs, called 
			<span class="code">&lt;overflow&gt;</span>, which tells the div what
			to do when its contents are bigger than the size of the div; that is,
			when its contents "overflow." Add in this code:</p>
            <pre class="code">.quoteBox {
    border: 4px solid #ABC;
    width: 600px;
    padding: 10px;
    line-height: 2em;
    <span class="newCode">overflow: auto;</span>
}</pre>
            <p>Now we have what we wanted:</p>
            <img class="screenshot" src="images/6-author-try2.jpg" width="647" height="155" alt="Author floating right" title="Author floating right">
            <p>As complicated as this is, there are occasions when this behavior is
			useful, although we won't provide any examples of this yet. There's
			also a lot more to learn about <span class="code">
			&lt;overflow&gt;</span> that we won't go into at this time. If this seems
			difficult, be assured that these tutorials will take you through many
			examples of CSS layout involving floats step by step, and anything new or
			unfamiliar will be explained.</p>
        </div>
        <div class="page" id="page-3">
            <h2>CSS layout</h2>
            <p>Now, we're going to get into the fun part of web page design: CSS
			layout. We already have all the tools we need to do this, but knowing
			how to put it together can be a challenge. To see how all the pieces fit
			together, we'll work through a step-by-step example that might look a
			little familiar.</p>
            
            <h3>The Guardian 2: Under New Management</h3>
            <p>In the <a href="../html-tables/#page-5">HTML tables</a> tutorial, we used tables to make this layout for a newspaper,
			The Daily Guardian:</p>
            <img class="screenshot" src="images/5-guardian.jpg" width="503" height="293" alt="Table-based page layout" title="Table-based page layout">
            <p>However, as we pointed out at the time, table-based layouts are
			generally a bad idea, because tables can be very picky about how its
			rows and columns are structured, especially when rowspans and colspans
			get involved. Instead, we're going to lay out the page by putting
			every story in their own div, and then modifying the CSS rules to
			place those divs in the correct location. Are you ready?</p>
            <p>Take a look at guardian2.html. We've already retooled it for you,
			so just spend a minute examining its structure. Every story is in a
			"story" div. They are also in classes based on the size of the story.
			Finally, the story divs are inside larger divs grouping the big
			stories together and the small stories together as follows:</p>
            <ul>
				<li>div - class: mainStories
					<ul>
						<li>div - classes: main, story</li>
						<li>div - classes: medium, story</li>
					</ul>
				</li>
				<li>div - class: smallStories</li>
					<ul>
						<li>div - classes: small, story</li>
						<li>div - classes: small, story</li>
						<li>div - classes: small, story</li>
					</ul>
			</ul>
            <p>If you look at what guardian2.html looks like, that's not very
			impressive! All the stories are just laid out, one on top of the other
			without any apparent layout at all. But, it turns out, we're now going
			to harness the power of CSS to lay this out. The only thing we're going
			to be doing with guardian2.html from now on is to change the stylesheet
			that it uses. Let's start with the basic one:</p>
            <pre class="code">&lt;link rel="stylesheet" type="text/css" href="guardian-style.css" /&gt;</pre>
            <p>Now, open up guardian-style.css. As you can see, all we've done so 
			far is to give all the divs a background color so that we can see where
			they are. We want to recreate the table-based layout we did in the last
			tutorial, so the main story should be 2/3s of the page, while all the
			other stories are 1/3 of the page wide. So, let's add in code to 
			reflect that:</p>
            <pre class="code">.mainStories {
    <span class="newCode">width: 100%;</span>
}
.main {
    <span class="newCode">width: 67%;</span>
}
.medium {
    <span class="newCode">width: 33%;</span>
}
.smallStories {
    <span class="newCode">width: 100%;</span>
}
.small {
    <span class="newCode">width: 33%;</span>
}</pre>
            <p>Everything's still stacked on top of each other! Do we remember why?
			<span class="code">&lt;div&gt;</span>s are block-level elements, so they
			will be laid out vertically. Now, do we remember the solution? Floats!
			Let's tell all the stories to float to the left:</p>
            <pre class="code">.mainStories {
    width: 100%;
}
.main {
    width: 67%;
    <span class="newCode">float: left;</span>
}
.medium {
    width: 33%;
    <span class="newCode">float: left;</span>
}
.smallStories {
    width: 100%;
}
.small {
    width: 33%;
    <span class="newCode">float: left;</span>
}</pre>
            <p>We're getting closer, but we've run into a small problem (red lines
			drawn in for clarity):</p>
            <img class="screenshot" src="images/6-guard-try1.jpg" width="334" height="169" alt="Problem with float" title="Problem with float">
            <p>What's happening is that pages are normally laid out from top to
			bottom, left to right. So, the browser first puts down the main and 
			medium-sized stories. Since those are floating, the bottom of the
			mainStories div is non-existent! Since it consists only of floating 
			elements, there isn't really anything inside the box, so its height is 0.
			That means that the topmost, leftmost position of the window happens to be
			that little nook to the right of the main story, and below the
			medium-sized story.</p>
            <p>So, the browser places the first small story into that little nook. 
			Then, it tries to float the first small story to the left until it can't 
			anymore. If you remember, a float stops once you run into the edge of your
			containing element, or when you run into another floating element. Well,
			in this case, the small story is already up against a floating element on
			its left!</p>
            <p>So, how do we fix this? We've seen it before: set <span class="code">
			overflow</span> in the mainStories div. That way, the bottom of the 
			mainStories div is the bottom at the bottom of the larger of the two 
			stories inside of it. You can prove this by giving mainStories a <span class="code">border-bottom</span> in addition to the code below. As a 
			result of this fix, when the small stories get laid out, they start below 
			the main stories:</p>
            <pre class="code">.mainStories {
    width: 100%;
    <span class="newCode">overflow: auto;</span>
}</pre>
            <p>Now, as we can see from the blue backgrounds, the stories are all
			pressed up right against each other. Now, we need to use our knowledge
			of the box model to put some spacing between the stories. Let's put
			1% margin on the left and the right of every story. But remember, this
			also means we need to subtract 2% from the width of every story, since
			margins grow outwards:</p>
            <pre class="code">.story {
    background-color: #ABC;
    <span class="newCode">margin: 0% 1%;</span>
}
...
.main {
    width: <span class="newCode">65%;</span>
    float: left;
}
.medium {
    width: <span class="newCode">31%;</span>
    float: left;
}
...
.small {
    width: <span class="newCode">31%;</span>
    float: left;
}</pre>
            <p>That looks a lot better! This should be your final result (remove the
			background color if you like):</p>
            <img class="screenshot" src="images/6-guard-sty1.jpg" width="595" height="376" alt="The Daily Guardian - style 1" title="The Daily Guardian - style 1">
            <p>Anyway, here's the situation: The Daily Guardian has come under hard
			times, and is now under new management. The new bosses think people will
			be more interested in the paper if the main story were on the right
			instead of on the left. Let's see how hard this is to do. Modify 
			guardian-style.css as follows, and see what happens:</p>
            <pre class="code">...
.main {
    width: 65%;
    float: <span class="newCode">right</span>;
}
...</pre>
            <p>The main story's now on the right! And it just happend with the 
			change of a single <em>word</em>!</p>
            <p>How about this: last tutorial, we proposed a nightmare situation with
			table-based layouts. What if management now wants the top two stories to
			stay the way they are, with the same proportions, but wants <em>four</em>
			small stories on the bottom, each taking up 1/4th the space? Can you 
			imagine doing this if the the page were laid out with a table? Let's try
			doing this with CSS instead:</p>
            <ol>
				<li>Uncomment the 4th story from guardian2.html.</li>
				<li>Change the stylesheet for guardian2.html from guardian-style.css
				to guardian-style-4smalls.css (they are the same, we're just trying to
				keep our work in separate files).</li>
				<li>Change guardian-style-4smalls.css as follows:
				<pre class="code">.small {
    float: left;
    width: <span class="newCode">23%</span>;
}</pre>
				</li>
			</ol>
            <img class="screenshot" src="images/6-guard-sty4sm.jpg" width="664" height="368" alt="The Daily Guardian - 4 small stories" title="The Daily Guardian - 4 small stories">
            <p>That was easy!</p>
            <p>Let's try one more style from the beginning to see how easy this 
			div-based layout makes things now. Here's the story. The Daily Guardian 
			has tried those new layouts, without much improvement in business. They've
			made the following decision. First, people hate the movie review, so that 
			should be removed, and there should only be three small stories on the 
			front. Second, the main and medium stories should both be on the left side
			taking up 2/3s of the width, with the main story above the medium story. 
			The three small  stories should be stacked up on top of each other on the 
			right side, taking the remaining 1/3 of width. Can we do it?</p>
            <ol>
				<li><p>First, comment or delete the "Movie Review" story from 
				guardian2.html.</p></li>
				<li><p>Change the stylesheet to "guardian-style2.css"</p></li>
				<li><p>Open up guardian-style2.css. Since the main stories are going to 
				be on the left, taking 2/3s of the width, let's set the widths of the
				mainStories and smallStories divs as specified:</p>
				<pre class="code">...
.mainStories {
    <span class="newCode">width: 67%;</span>
}
...
.smallStories {
    <span class="newCode">width: 33%;</span>
}
...</pre>
				</li>
				<li><p>The two divs are still stacked on top of each other, since they
				are block-level elements. What can we do now to fix this? We can make
				them floating divs. That way, the browser will float the main stories
				to the left. The mainStories div will have height 0, so the top of the
				page is still at the top of the browser window. Then, when the small
				stories are placed, they will start at the top, and float as far to
				the left as possible--to the right edge of the mainStories div.</p>
				<pre class="code">...
.mainStories {
    width: 67%;
    <span class="newCode">float: left;</span>
}
...
.smallStories {
    width: 33%;
    <span class="newCode">float: left;</span>
}
...</pre></li>
				<li><p>Now, all that's left to do is to add in some margin to the left
				and right sides of each story, so that they aren't all squashed 
				together. Also remember to reduce the size of the stories accordingly:
				</p>
				<pre class="code">...
.story {
    background-color: #ABC;
    <span class="newCode">margin: 0% 1%;</span>
}
.mainStories {
    width: <span class="newCode">65%;</span>
    float: left;
}
...
.smallStories {
    width: <span class="newCode">31%;</span>
    float: left;
}</pre></li>
			</ol>
            <p>This should be your result:</p>
            <img class="screenshot" src="images/6-guard-sty2.jpg" width="627" height="352" alt="The Daily Guardian - style 2" title="The Daily Guardian - style 2">
            <p>In some cases, it might be that a table is just as much work as going
			through all the modifications to the CSS. But, we hope you're now
			convinced that CSS and div-based layout is far more flexible and
			powerful. However, we haven't even shown you the biggest advantage to a 
			div-based layout yet! Remember that the whole point of CSS is that you
			can change the style and layout for an <em>entire website</em> just by
			changing the stylesheet the pages use. In all of our above examples,
			we've just been changing the layout for one page. If you're seriously
			interested in web development, divs and CSS layout are one topic you'll
			really want to master.</p>
            <p>Today, you might be working for The Daily Guardian. Tomorrow, you
			might be working for The New York Times. Consider this fact: the New York 
			Times' website hosts articles dating back to <em>1851</em>. This 
			means you can search as far back in their archives as <em>
			<a href="http://query.nytimes.com/search/sitesearch?query=Lee+Surrenders&amp;more=date_all&amp;less=multimedia">the Civil War</a></em>! If you click on some
			of those articles, you can build an appreciation for how the professional
			web developers at the New York Times have maintained an impeccably
			consistent styling and layout across their entire site, from the front
			page, to an old, archived Civil War-era article.</p>
        </div>
        <div class="page" id="page-4">
            <h2>HTML vs. CSS: the philosophy</h2>
            <p>We'll end with a quick word about the philosophy behind HTML and CSS.
			</p>
            <p>The creation of CSS is supposed to faciliate the fundamental process of
			<em>separating content from style</em>. Content, which goes in HTML files,
			consists just of the ideas we want to communicate. It's the reason why
			the website exists in the first place. Styling, which goes in CSS files,
			just tells us how to arrange the content in the web browser, what colors
			to use, and other things related to how the content looks.</p>
            <p>We use divs and spans to put a little bit of information in our
			content about what kind of content it is. For example, are these
			paragraphs part of the main story, or part of a small story? It can be
			tempting to just put style information in our HTML files out of 
			convenience, but it's better to avoid it as much as possible.</p>
            <p>Think about the example of a newspaper website. It's the journalists' 
			job to do reporting and to write stories. It's your job as the web 
			developer to be creative, and decide how the website will look. Neither
			of you want to mix your jobs up. You'll find that HTML and CSS can
			work harmoniously in the same way to make your websites smart,
			pretty, and easy to maintain.</p>
            
            <h3>Survey</h3>
            <p>Thanks for following along! Please let us know how we can improve
            using this survey:</p>
            <iframe src="https://spreadsheets.google.com/spreadsheet/embeddedform?formkey=dE9hUTBQVVlaQ0lIdVN0M1VpVjRtaHc6MA" width="760" height="623" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>