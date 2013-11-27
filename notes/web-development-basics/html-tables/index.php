<?php
$title = 'HTML tables';
$pagePath = '/tutorials/html-tables';
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
    'Tables',
    'A simple table',
    'Rowspan and Colspan',
    'Styling tables with CSS',
    'Table-based page layout',
    'Challenge problems!',
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
        
            <h2>Tables</h2>
            <p>The web is often useful for displaying data, like rosters, event 
			calendars, or experimental observations. This is the kind of stuff you
			might put in a spreadsheet, for example. In this tutorial, we'll 
			learn about HTML tables, which give you a logical way to present this
			kind of data.</p>
            <h3>Getting started</h3>
            <p>Download the <a href="files/tutorial5.zip">Tutorial 5 files</a>, 
			and unzip it. You should end up with a folder called "Tutorial 5."</p>
        </div>
        <div class="page" id="page-2">
            <h2>A simple table</h2>
            <p>Let's start with a straightforward table: a list of people. Open up
			tshirt.html. Add in the following code in the body:</p>
            <pre class="code">&lt;table&gt;
    &lt;tr&gt;
        &lt;th&gt;Name&lt;/th&gt;
        &lt;th&gt;Height&lt;/th&gt;
        &lt;th&gt;Weight&lt;/th&gt;
        &lt;th&gt;Chest&lt;/th&gt;
        &lt;th&gt;Waist&lt;/th&gt;
        &lt;th&gt;T-shirt Size&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Sara&lt;/td&gt;
        &lt;td&gt;5'3"&lt;/td&gt;
        &lt;td&gt;133 lbs&lt;/td&gt;
        &lt;td&gt;34"&lt;/td&gt;
        &lt;td&gt;27"&lt;/td&gt;
        &lt;td&gt;S&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Matt&lt;/td&gt;
        &lt;td&gt;5'10"&lt;/td&gt;
        &lt;td&gt;155 lbs&lt;/td&gt;
        &lt;td&gt;36.5"&lt;/td&gt;
        &lt;td&gt;32"&lt;/td&gt;
        &lt;td&gt;M&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Laura&lt;/td&gt;
        &lt;td&gt;6'0"&lt;/td&gt;
        &lt;td&gt;185 lbs&lt;/td&gt;
        &lt;td&gt;38.5"&lt;/td&gt;
        &lt;td&gt;34"&lt;/td&gt;
        &lt;td&gt;L&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Xavier&lt;/td&gt;
        &lt;td&gt;6'3"&lt;/td&gt;
        &lt;td&gt;215 lbs&lt;/td&gt;
        &lt;td&gt;43"&lt;/td&gt;
        &lt;td&gt;39"&lt;/td&gt;
        &lt;td&gt;XL&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
			</pre>
            <p>Looks like a lot, right? Now take a look at what the code looks like
				in your browser. It should look like this:</p>
            <img class="screenshot" src="images/5-simplet.jpg" width="333" height="175" alt="T-shirt size table" title="T-shirt size table">
            <p>As promised, we just made a pretty simple list of people. Let's now 
			try to figure out how this works.</p>
            <p>If you remember, an <span class="code">&lt;ol&gt;</span> (ordered 
			list) tag, expects <span class="code">&lt;li&gt;</span> tags inside of
			it. Similarly, a <span class="code">&lt;table&gt;</span> tag expects
			<span class="code">&lt;tr&gt;</span> (table row) tags inside of it, and
			<span class="code">&lt;tr&gt;</span> tags in turn expect <span class="code">&lt;td&gt;</span> (table data) tags inside of <em>them</em>.
			So, a table is sort of like rectangular list--a table consists of a list
			of rows, and rows consist of lists of data. The following image
			summarizes this.</p>
            <img class="screenshot" src="images/5-tablediagram.jpg" width="658" height="318" alt="Table diagram" title="Table diagram">
            <p>And, as you can tell by comparing the code with the resulting 
			screenshot, the table rows are laid out from top to bottom in the order 
			given, while the table cells are laid out from left to right in the 
			order given.</p>
            <p>There's one unexplained tag--if you look carefully at the code for
			the first row of the table, you'll see that it uses the <span class="code">&lt;th&gt;</span> tag instead of the <span class="code">
			&lt;td&gt;</span> tag. <span class="code">&lt;th&gt;</span> 
			is the "table header" tag. It's a special tag that you can use 
			instead of <span class="code">&lt;td&gt;</span>, and it bolds the text
			inside that cell. Usually, we only use it for the first row of the 
			table, since that's where we put the header. Later, we will use CSS
			styling so that the header looks one way, while the rest of the table
			cells look another way.
			</p>
            <h3>Practice 1</h3>
            <p>Open up practice1.html, and add in a table so that it looks like the
			following screenshot:</p>
            <img class="screenshot" src="images/5-prac1.jpg" width="291" height="241" alt="Practice 1" title="Practice 1">
        </div>
        <div class="page" id="page-3">
            <h2>Rowspan and Colspan</h2>
            <p>Sometimes, we'll want to have tables that look like this
			(trials.html):</p>
            <img class="screenshot" src="images/5-colspan.jpg" width="493" height="255" alt="Colspan example" title="Colspan example">
            <p>What's different here? Well, for one, the table has visible borders.
			We did that by saying: <span class="code">&lt;table border="1"&gt;
			</span>. We'll do more cool styling with tables later, using CSS. But
			what else is different? Look at the cells "With placebo" and "With
			Drowsimax." They're both two columns wide!</p>
            <p>The way we did that is by using the <span class="code">colspan</span>
			attribute of <span class="code">&lt;td&gt;</span> (well, actually, in this
			case, <span class="code">&lt;th&gt;</span>). So the code looked like:</p>
            <pre class="code">&lt;table border="1"&gt;
    &lt;tr&gt;
        &lt;th&gt;&lt;/th&gt;
        <span class="newCode">&lt;th colspan="2"&gt;</span>With placebo&lt;/th&gt;
        <span class="newCode">&lt;th colspan="2"&gt;</span>With DrowsiMax&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th&gt;Subject ID #&lt;/th&gt;
        &lt;th&gt;Hrs of sleep&lt;/th&gt;
        &lt;th&gt;Avg heart rate&lt;/th&gt;
        &lt;th&gt;Hrs of sleep&lt;/th&gt;
        &lt;th&gt;Avg heart rate&lt;/th&gt;
    &lt;/tr&gt;
    ...
			</pre>
            <p>The value we give to <span class="code">colspan</span> is the number
			of columns this one cell should <em>span</em> across--in this case, 2.
			Notice also that we made a blank cell in the first row just by saying
			<span class="code">&lt;th&gt;&lt;/th&gt;</span>. So, if we count the 
			total number of cells spanned in the first row, we get 1 + 2 + 2 = 5 
			cells. This matches up with the other rows, who all have 5 cells each.
			</p>
            <p>Similarly, there's an attribute called <span class="code">
			rowspan</span>, which makes a cell take up two rows' worth of space, 
			rather than just one. It's a little bit trickier to do, so let's see
			how it works, using our DrowsiMax table from before. The bottom of the 
			table code now looks like this:</p>
            <pre class="code">    ...
    &lt;tr&gt;
        <span class="newCode">&lt;td rowspan="2"&gt;</span>Male&lt;/td&gt;
        &lt;td&gt;7.3&lt;/td&gt;
        &lt;td&gt;77&lt;/td&gt;
        &lt;td&gt;8.6&lt;/td&gt;
        &lt;td&gt;69&lt;/td&gt;
    &lt;/tr&gt;
    <span class="newCode">&lt;tr&gt;
        &lt;td&gt;8.0&lt;/td&gt;</span>
        &lt;td&gt;72&lt;/td&gt;
        &lt;td&gt;8.7&lt;/td&gt;
        &lt;td&gt;64&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Female&lt;/td&gt;
        &lt;td&gt;9.5&lt;/td&gt;
        &lt;td&gt;65&lt;/td&gt;
        &lt;td&gt;9.9&lt;/td&gt;
        &lt;td&gt;58&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
			</pre>
            <p>And the result looks like this:</p>
            <img class="screenshot" src="images/5-rowspan.jpg" width="498" height="146" alt="Rowspan example" title="Rowspan example">
            <p>Look at the code in red. Notice that the row with the first male's 
			data (7.3 hours of sleep) uses rowspan. But, more interestingly, 
			the second male's data (8.0 hours of sleep) is missing its first cell!
			That's because the first male's first cell <em>spans</em> that space
			already. I told you it was tricky! Take a moment to make sure you 
			understand that example.</p>
            <h3>Practice 2</h3>
            <p>Open up practice2.html. It looks like there are some redundancies
			in the table. Modify the table so that it looks like this, instead:</p>
            <img class="screenshot" src="images/5-prac2.jpg" width="371" height="276" alt="Practice 2" title="Practice 2">
        </div>
        <div class="page" id="page-4">
            <h2>Styling tables with CSS</h2>
            <h3>Colors</h3>
            <p>Open up styling.html. Actually, this is just the same as the solution 
			to Practice 1, which you hopefully understood! Let's add some styling to 
			this table so that it's easier to tell who won. Follow these steps:</p>
            <ol>
				<li><p>Add in a <span class="code">&lt;style&gt;</span> tag to the head
				of your document (revisit <a href="../tutorial3/tutorial3.html">
				Tutorial 3</a> if you don't remember how).</p></li>
				<li><p>Modify the table row tags (<span class="code">&lt;tr&gt;</span>)
					to have either "stanford" or "cal" classes, depending on who won.
					Also, give the first and third row the "odd" class, while giving the 
					other rows the "even" class. See below for an example.</p>
					<img class="screenshot" src="images/5-colorcode.jpg" width="292" height="281" alt="Big Game code" title="Big Game code">
				</li>
				<li>
					<p>Add in the CSS to make the table row's text red when Stanford 
					wins, and blue when Cal wins:</p>
					<pre class="code">.stanford {
    color: red;
}
.cal {
    color: blue;
}
					</pre>
				</li>
				<li>
					<p>Now let's do some more stuff with colors. Make the table headers be
					white text on a black background. Then, we'll do what's known as 
					"zebra-striping," where we give different background colors to every
					other row. Give every odd row a white background, and every even row a
					light gray (#DDD) background. Make sure your code matches below.</p>
					<pre class="code">th {
    color: white;
    background-color: black;
}
.odd {
    background-color: white;
}
.even {
    background-color: #DDD;
}
					</pre>
					<p>You should have something that looks like this:</p>
					<img class="screenshot" src="images/5-coloredtable.jpg" width="223" height="186" alt="Colored table" title="Colored table">
				</li>
			</ol>
            <h3>Borders and spacing</h3>
            <p>That's a good start, but now notice that there are little gaps in 
			between our cells that are a little unsightly. We'll go ahead and fix
			that now.</p>
            <ol>
				<li>Draw borders around our table cells so we can see what we're 
				doing:</li>
				<pre class="code">td, th {
    border: 1px solid black;
}
				</pre>
				<li><p>As you can see, there are still gaps between the table cells. 
				That gap is part of the table itself. We can't get rid of it by setting 
				the table's border to "none," like this:</p>
				<pre class="code">table {
    border: none;
}
				</pre>
				<p>That just removes the borders around the perimeter of the table 
				itself (for proof, try giving the table a real border like <span class="code">2px solid red</span>). Instead, we use a property called
				<span class="code">border-collapse</span> as follows:</p>
				<pre class="code">table {
    border-collapse: collapse;
}
				</pre>
				<p>Now the gaps should be gone!</p>
				</li>
				<li>
					<p>Finally, we want to tidy up the table a bit. It looks kind of 
					squeezed together, so we'll add in a little bit of <span class="code">
					padding</span>. "Padding" and "border" will be explained more in the
					next tutorial on divs, where they come in all the time. Also, we 
					want the text to be centered in the cells, so we use a property 
					called <span class="code">text-align</span>. See code below.</p>
					<pre class="code">td, th {
    border: 1px solid black;
    padding: 3px;
    text-align: center;
}
					</pre>
					<p>Your result should look like this:</p>
					<img class="screenshot" src="images/5-styledtable.jpg" width="224" height="201" alt="Styled table" title="Styled table">
				</li>
			</ol>
        </div>
        <div class="page" id="page-5">
            <h2>Table-based page layout</h2>
            <h3>Example: The Daily Guardian</h3>
            <p>Imagine you've been asked to make the website for a small newspaper
			called The Daily Guardian. They want to have a large area on the left 
			for their feature stories, a medium-size area on the right for a less 
			important story, and three small, paragraph-length stories along the
			bottom of the page. In short, we want to make something like this:</p>
            <img class="screenshot" src="images/5-guardian.jpg" width="503" height="293" alt="Table-based page layout" title="Table-based page layout">
            <p>We've never seen anything like this before! How do we get one story to
			be to below or to the right of another story? The answer is that we can
			make one giant table that fills up the entire page. If you look at the
			screenshot carefully, you can see that there are two "rows." The bottom
			row has the three small stories, and is made up of three <span class="code">&lt;td&gt;</span>s. The top row has the big and medium-size
			story. The big story spans two columns. So, with these 
			observations, lets give this layout a shot!</p>
            <p>Open up guardian.html. In it, there's already some CSS defined for
			a "main" class, which takes up 2/3 of a page, and a "side" class, which
			takes up 1/3 of the page. There's also some code for you to copy in as
			the newspaper stories, which we'll do later. For now, just add in the
			code for the giant table as follows (for bonus points, try typing it in
			yourself):</p>
            <pre class="code">&lt;table&gt;
    &lt;tr&gt;
        &lt;td colspan="2" class="main"&gt;
            &lt;h2&gt;UC San Diego named "Hottest School for Science"&lt;/h2&gt;
        &lt;/td&gt;
        &lt;td class="side"&gt;
            &lt;h2&gt;EBU-1 Reopened as Jacobs Hall&lt;/h2&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;
            &lt;h3&gt;Weather Report&lt;/h3&gt;
        &lt;/td&gt;
        &lt;td&gt;
            &lt;h3&gt;Lights and Sirens&lt;/h3&gt;
        &lt;/td&gt;
        &lt;td&gt;
            &lt;h3&gt;Daily Horoscope&lt;/h3&gt;
        &lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
			</pre>
            <p>Now take a look at the page in your browser. It should look pretty
			much like the screenshot above, only without the stories. You can go 
			ahead and copy in the stories for completeness, or move on if you think
			you get it.</p>
            <h3>A warning</h3>
            <p>While, yes, we did just create a cool page layout using tables, 
			that's actually not the preferred way to go. Imagine what you'd have to 
			do, if you wanted to have 4 small stories on the bottom, each taking up
			25% of the page, while keeping the widths of the top two stories the same.
			That is, we want the top row to be split up by thirds, while the bottom 
			row is split up by fourths. It's not clear how we should set up the table 
			to make work!</p>
            <p>Another problem with table-based layouts is that they aren't easy to
			restructure. Say for example we wanted to put the medium story on the
			bottom, and the small stories stacked on top of each other on the right.
			Then, we'd have to move stories to different cells in different rows, 
			remove our colspan and put in a rowspan somewhere else, etc. Tables can
			get very complicated, very quickly!</p>
            <p>In the next tutorial, we're
			going to introduce the <span class="code">&lt;div&gt;</span> tag, which
			are a little more abstract than tables, but which make layouts easy to set
			up, and easy to change. For the most part, we just want to use tables to
			hold data like our t-shirt size list or DrowsiMax trial results.</p>
            <h3>Side note: Lorem Ipsum text</h3>
            <p>What was that crazy Latin text we used for our newspaper stories?
			That's what's known as <em>lorem ipsum</em> text, which is which is 
			randomly-generated gibberish. It's commonly used as a placeholder when 
			you don't have the real text for what you're working on. As you start 
			making more websites, you'll notice this situation happens all the time! 
			Lorem ipsum allows us to preview what the final result will look like. You
			can read more about lorem ipsum and get randomly generated text from sites
			like <a href="http://lipsum.com">lipsum.com</a>.</p>
        </div>
        <div class="page" id="page-6">
            <h2>Challenge problems!</h2>
            <p>As we just explained above, we typically don't want to do anything 
			fancy with tables. However, if you'd like to challenge yourself and test 
			your understanding of tables, give these problems a try!</p>
            <h3>Challenge 1 - The Spiral</h3>
            <p>Concepts: rowspan, colspan</p>
            <p>Inside challenge1.html, you are given something like this:</p>
            <img class="screenshot" src="images/5-spiral1.jpg" width="449" height="446" alt="Spiral step 1" title="Spiral step 1">
            <p>Can you turn that into something that looks like this?</p>
            <img class="screenshot" src="images/5-spiral4.jpg" width="452" height="445" alt="Spiral step 4" title="Spiral step 4">
            <p>If you want to try, then you should make these intermediate steps 
			first:</p>
            <img class="screenshot" src="images/5-spiral2.jpg" width="452" height="445" alt="Spiral step 2" title="Spiral step 2">
            <p>and</p>
            <img class="screenshot" src="images/5-spiral3.jpg" width="452" height="445" alt="Spiral step 3" title="Spiral step 3">
            <p>Here's a hint: remember that you can combine attributes, so a 
			table cell can span multiple columns <em>and</em> multiple rows. So,
			the first few lines of your table code will look like:</p>
            <pre class="code">&lt;table border="1"&gt;
    &lt;tr&gt;
        &lt;th&gt;&lt;/th&gt;
        &lt;th class="col"&gt;1&lt;/th&gt;
        &lt;th class="col"&gt;2&lt;/th&gt;
        &lt;th class="col"&gt;3&lt;/th&gt;
        &lt;th class="col"&gt;4&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;th class="row"&gt;1&lt;/th&gt;
        <span class="newCode">&lt;td colspan="2" rowspan="4"&gt;</span>&lt;/td&gt;
        ...
			</pre>
            <p>Good luck! If you get stuck, look at challenge2-answer.html.</p>
            <p>A random note: this challenge is trying to make a (very) crude version 
			of a <em>logarithmic spiral</em>. If our starting rectangle had two 
			adjacent Fibonacci numbers as its length and width, we could have easily 
			made a <em>Golden spiral</em>. That kind of spiral appears often in 
			nature (think of a nautilus shell), and its geometry is intricately tied 
			to the <em>Golden ratio</em>, which, in turn, is a number that pervades 
			throughout ancient Greek architecture. Isn't math fun?</p>
            <h3>Challenge 2 - Magic Square</h3>
            <p>Concepts: Nested tables (explained below), CSS styling</p>
            <p>Can the contents of a table cell be <em>another table</em>? Sure!
			Just put the table inside the <span class="code">&lt;td&gt;</span> tag,
			like this:</p>
            <pre class="code">...
&lt;td&gt;
    &lt;table&gt;
        ...
    &lt;/table&gt;    
&lt;/td&gt;
...
			</pre>
            <p>When one table is put inside another table, we say that the first 
			table is <em>nested</em> in the second table.</p>
            <p>Here's the challenge: open up challenge2.html. Can you modify it so
			that it looks like this?</p>
            <img class="screenshot" src="images/5-magic.jpg" width="261" height="257" alt="Magic Square" title="Magic Square">
            <p>It looks like somebody started it, but didn't finish. The idea is 
			there: there's one big table with four cells, and inside each of those
			cells is another table, also with four cells. The big grid you want to
			color dark black (already done), while the small grids you want to color
			gray (#CCC). You also want to fill in any missing numbers.</p>
            
            <h3>Survey</h3>
            <iframe src="https://spreadsheets.google.com/spreadsheet/embeddedform?formkey=dDB4MklQMUFRcnk0OGgtRllpQjFESUE6MA" width="760" height="623" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>