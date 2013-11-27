<?php
$title = 'CSS basics';
$pagePath = '/tutorials/css-basics';

include_once($_SERVER['DOCUMENT_ROOT'].'/php/header.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/feature.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/tutorials.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/php/whiteboard.php');
include_once('php/css-golf.php');
?>

<!doctype html>
<html>
<head>
    <?php echo makeHeadSectionAll($title); ?>
    <script type="text/javascript" src="js/css-golf.js"></script>
    <script><!--
    $('#allPages').ready(function(){
        loadTutorial(8);
    });
    --></script>
    
    <style><!--
        .cssGolfScore .typed {
            font-weight: bold;
        }
        .cssGolfScore .par {
            font-weight: bold;
        }
        .cssGolfScore .overPar {
            color: #B22222;
        }
    --></style>
    <?php echo makeAnalytics(); ?>
</head>
<body>
    
<?php echo makeHeader(null, $pagePath); ?>    

<?php
$pages = array(
    'CSS introduction',
    'Colors',
    'Divs, spans, classes, IDs',
    'Text styles',
    'Pseudo-classes',
    'More about selectors',
    'Comments',
    'Challenge exercises'
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
            <h2>CSS introduction</h2>
            <p>In the previous tutorial, we saw how to use HTML to give
            our webpages structure. Now, based on that structure, we can use
            another language, called CSS (Cascading Style Sheets), to change
            the appearance of the webpage.</p>
            <p>To do this, we apply rules to certain sets of HTML tags. For
            example, we can make all <span class="code">strong</span> tags red.
            We use the following syntax for CSS rules:</p>
            <pre class="code">selector {
  property1: value1;
  property2: value2;
}</pre>

            <p>The <span class="term">selector</span> is the name of the HTML
            tag that you want to style. Inside the set of curly braces, you
            set <span class="term">properties</span> and <span
            class="term">values</span> as in the example above. This tutorial is
            all about learning a bunch of different properties and what values
            you can assign to them.</p>
            
            <p>Finally, all CSS rules must end with a semicolon. It is used as
            the separator between rules. As with HTML, CSS doesn't care about
            <em>whitespace</em>, so you can remove or add extra spaces, tabs,
            and blank lines without affecting the result.</p>
            
            <p>Below is a real example of CSS at work:</p>
            <?php echo makeWhiteboard('css-basics_intro-basic',
                true, true, 4, 4, 
'Help I\\\'m alive, my heart is beating like a <strong>hammer</strong>.',
'strong {\n\
  color: red;\n\
}', 1); ?>

            <p>Click on "HTML" in the code whiteboard above to see the HTML
            code. Before, we only used the HTML tab, but now we will use both
            the HTML and CSS tabs.</p>
            
            <p>Click "next page" to continue.</p>
        </div>
        
        <div class="page" id="page-2">
            <h2>Colors</h2>
            <p>As we saw on the previous page, <span
            class="code term">color</span> is one of the properties we can set
            for an HTML element.</p>
            
            <h3>Representing colors</h3>
            <p>There are a number of ways to express color in CSS.</p>
            
            <p>First and foremost, colors can be expressed using <span
            class="term">RGB</span> values. <em>RGB</em> stands for "Red, Green,
            Blue." When we mix certain amounts of red, green, and blue, we get
            different colors. We can "mix" between 0 and 255 units of a color.
            In the example below, we are mixing 255 units of red, 0 units of
            green, and 127 units of blue to form a pinkish purple:</p>
            <?php echo makeWhiteboard('css-basics_color-rgb',
                true, true, 4, 4, 
'Help I\\\'m alive, my heart is beating like a <strong>hammer</strong>.',
'strong {\n\
  color: rgb(255, 0, 127);\n\
}', 1); ?>

            <p>Normally, however, we use <span
            class="code term">hexadecimal</span> notation to express RGB colors.
            Hexadecimal numbers have 16 numbers: 0 - 9, and then A-F. A is
            bigger than 9, B is bigger than A, C is bigger than B, and so on.</p>
            
            <p> A hexadecimal color has six digits: the first two represent the
            amount of red we're mixing in, the second two the amount of green,
            and the last two the amount of blue. As you can see by comparing
            the example above with the example below, <span
            class="code">rgb(255, 0, 127)</span> is equivalent to the hex number
            <span class="code">#FF007F</span>:</p>
            <?php echo makeWhiteboard('css-basics_color-hex',
                true, true, 4, 4, 
'Help I\\\'m alive, my heart is beating like a <strong>hammer</strong>.',
'strong {\n\
  color: #FF007F;\n\
}', 1); ?>

            <p>For the most part, it's impossible to look at an RGB or hex value
            and tell what color it is. Instead, we pick out a color using a
            program, which tells us what the hexadecimal code is for that color.
            One good site for this is <a href="http://colorpicker.com"
            target="_blank">www.colorpicker.com</a>.
            
            <p>Some quick tips about hex colors:</p>
            <ul>
                <li>If you only use 3 digits in the hex number, then each digit
                will be repeated twice. For example, <span
                class="code">#abc</span> is the same as <span
                class="code">#aabbcc</span>.
                <li><span class="code">#ffffff</span> is white.</li>
                <li><span class="code">#000000</span> is black.</li>
                <li>If all the RGB values are the same, then it will create some
                shade of gray. If the numbers are large (e.g., <span
                class="code">#dcdcdc</span>), then it will be a light gray, and
                if the numbers are small (e.g., <span
                class="code">#333333</span>), it will be a dark shade of
                gray.</li>
            </ul>
            
            <p>Finally, there are a number of <a
            href="http://www.w3schools.com/html/html_colornames.asp"
            target="_blank">predefined colors</a> you can use. All
            the basic ones like "red" and "blue" are there, but there are also
            some more unusual ones like "cornflowerblue" that you can use:
            <?php echo makeWhiteboard('css-basics_color-named',
                true, true, 4, 4, 
'Help I\\\'m alive, my heart is beating like a <strong>hammer</strong>.',
'strong {\n\
  color: cornflowerblue;\n\
}', 1); ?>
            <h3>Background color</h3>
            <p>You can set the background color of an element using the
            <span class="code term">background-color</span> property. As you can
            see in the example below, the <span class="code term">color</span>
            property acts as the foreground color:</p>
            <?php echo makeWhiteboard('css-basics_color-background',
                true, true, 4, 4, 
'<em>Highlighting</em> is a great way to remember important things when you \
read them.',
'em {\n\
  background-color: #FAEEB6;\n\
}', 1); ?>
            <h3>Exercise</h3>
            <p>Make all the links red and all the bolded text green (use
            <span style="color:#0C8514;">#0C8514</span>).</p>
            <?php echo makeWhiteboard('css-basics_color-ex1',
                true, true, 7, 7, 
'Use <a href="http://colorpicker.com">www.colorpicker.com</a> to \
find random colors like <strong>#0C8514</strong>!', '', 1); ?>
            <?php echo makeSolution(makeWhiteboard('css-basics_color-ex1sol',
                false, true, 7, 7, 
'Use <a href="http://colorpicker.com">www.colorpicker.com</a> to \
find random colors like <strong>#0C8514</strong>!',
'a {\n\
  color: red;\n\
}\n\
\n\
strong {\n\
  color: #0C8514;\n\
}', 1)); ?>
        </div>
        
        <div class="page" id="page-3">
            <h2>Divs, spans, classes, IDs</h2>
            
            <p>In the previous examples, we used the <span
            class="code term">strong</span> tag as the selector for our CSS
            rules. What if we just want to change the color of some text 
            without bolding or italicizing it?</p>
            
            <p>Luckily, HTML has "blank" tags that don't apply any styling to
            what's inside them. But, you can still target them with your CSS.
            These are the <span class="code term">div</span> (division) and
            <span class="code term">span</span> tags.</p>
            
            <?php echo makeWhiteboard('css-basics_divs-basic',
                true, true, 7, 7, 
'<div>\n\
  <p>This paragraph is inside a div.</p>\n\
</div>\n\
\n\
<p>You can target words within a sentence using the <span>span</span> tag.</p>',
'span {\n\
  color: red;\n\
}\n\
\n\
div {\n\
  color: blue;\n\
}', 0); ?>

            <p>Now, say you want to have more than one div or span, but apply
            different styles to each. To be able to single them out in CSS, we
            need some way to differentiate between them. We do this with the 
            <span class="code term">class</span> and
            <span class="code term">id</span> attributes.</p>
            
            <p>We use <span class="code term">classes</span> most of the time,
            when we want to apply a certain style to something that occurs more
            than once. For example, we might want to make all book titles
            italicized. On the other hand, we only use the <span
            class="code term">id</span> attribute to create a unique identifier
            to a particular element.</p>
            
            <p>We target classes in CSS like this (where "classname" is the
            name of the class):</p>
            <pre class="code">.classname {
}</pre>
            <p>We target IDs in CSS like this (where "idname" is the name of
            the id):</p>
            <pre class="code">#idname {
}</pre>

            <p>The following example illustrates this (click on "CSS") to see
            the CSS:</p>
            <?php echo makeWhiteboard('css-basics_divs-id-classes-intro',
                true, true, 7, 7, 
'<span id="carl-zimmer">Carl Zimmer</span> is the author of such books as <span \ class="book">Parasite Rex</span>, <span class="book">Soul Made Flesh</span>, \
and most recently, <span class="book">Brain Cuttings</span>.',
'.book {\n\
  color: red;\n\
}\n\
\n\
#carl-zimmer {\n\
  color: blue;\n\
}', 0); ?>

            <p>An element can have more than one class, but it can only have one
            id. If you want to give an element more than one class, separate out
            the class names with a space (the order in which you put them
            doesn't matter):</p>
            
            <blockquote class="code">Some of my heroes are &lt;span class="smart"&gt;Albert Einstein&lt;/span&gt; and<br />&lt;span class="smart funny"&gt;Jon Stewart&lt;/span&gt;.</blockquote>
            
            <p>You can apply some style (say, bold) to everything
            that's "smart", and some other style (say, underline) to everything
            that's "funny." We'll revisit this in the next section once we
            learn these styles&mdash;you'll see that if something's both "smart"
            and "funny," both styles will be applied to it simultaneously.</p>
            
            <h3>Exercise</h3>
            <p>The text is all dark gray (<span
            style="color: #555;">#555</span>), but make the letters A, T, C, 
            and G black. We've already taken the liberty of surrounding those
            four letters in "<span class="code">dna</span>" spans for you.</p>
            <?php echo makeWhiteboard('css-basics_divs-id-classes-ex1',
                true, true, 7, 7, 
'<h3><span class="dna">Gattaca</span></h3>\n\
<ul>\n\
  <li>E<span class="dna">t</span>h<span class="dna">a</span>n H<span class="dna">a</span>wke</li>\n\
  <li>Um<span class="dna">a T</span>hurm<span class="dna">a</span>n</li>\n\
  <li>Jude L<span class="dna">a</span>w</li>\n\
</ul>',
'body {\n\
  color: #555;\n\
}', 1); ?>
            <?php echo makeSolution(makeWhiteboard(
                'css-basics_divs-id-classes-ex1sol', false, true, 7, 7, 
'<h3><span class="dna">Gattaca</span></h3>\n\
<ul>\n\
  <li>E<span class="dna">t</span>h<span class="dna">a</span>n H<span class="dna">a</span>wke</li>\n\
  <li>Um<span class="dna">a T</span>hurm<span class="dna">a</span>n</li>\n\
  <li>Jude L<span class="dna">a</span>w</li>\n\
</ul>',
'body {\n\
  color: #555;\n\
}\n\
\n\
.dna {\n\
  color: black;\n\
}', 1)); ?>
        </div>
        
        <div class="page" id="page-4">
            <h2>Text styles</h2>
            <p>Let's learn some things we can do to make our text look more
            interesting.</p>
            
            <h3>Underline / bold / italic</h3>
            <p>These are familiar styles to anyone who's used a word processor.
            Underline can be done using the <span
            class="code term">text-decoration</span> property:
            <?php echo makeWhiteboard('css-basics_text-text-decoration',
                true, true, 6, 6, 
'text-decoration: <span class="normal">normal</span><br />\n\
text-decoration: <span class="underline">underline</span><br />',
'.normal {\n\
  text-decoration: normal;\n\
}\n\
.underline {\n\
  text-decoration: underline;\n\
}', 1); ?>
            
            <p>You can make something bold or not bold using the <span
            class="code term">font-weight</span> property:</p>
            <?php echo makeWhiteboard('css-basics_text-font-weight',
                true, true, 6, 6, 
'font-weight: <span class="normal">normal</span><br />\n\
font-weight: <span class="bold">bold</span><br />',
'.normal {\n\
  font-weight: normal;\n\
}\n\
.bold {\n\
  font-weight: bold;\n\
}', 1); ?>

            <p>Indeed, doing this, we can complete negate the effect of the
            <span class="code term">strong</span> tag!</p>
            <?php echo makeWhiteboard('css-basics_text-no-strong',
                true, true, 3, 3, 
'<strong>This whole sentence should be bolded, but it isn\\\'t.</strong>',
'strong {\n\
  font-weight: normal;\n\
}', 1); ?>

            <p>You can do the same thing using italics with the the <span
                class="code term">font-style</span> property:</p>
            <?php echo makeWhiteboard('css-basics_text-font-style',
                true, true, 6, 6, 
'font-style: <span class="normal">normal</span><br />\n\
font-style: <span class="italic">italic</span><br />',
'.normal {\n\
  font-style: normal;\n\
}\n\
.italic {\n\
  font-style: italic;\n\
}', 1); ?>

            <p>Try negating the effect of the <span class="code term">em</span>
            tag:</p>
            <?php echo makeWhiteboard('css-basics_text-no-em',
                true, true, 3, 3, 
'<em>Don\\\'t put so much emphasis on this sentence!</em>', '', 0); ?>
            <?php echo makeSolution(makeWhiteboard('css-basics_text-no-em-sol',
                false, true, 3, 3, 
'<em>Don\\\'t put so much emphasis on this sentence!</em>',
'em {\n\
  font-style: italic;\n\
}', 0)); ?>

            <h3>Exercise: underline / bold / italic</h3>
            <p>Apply the styles to each line as described.</p>
            <?php echo makeWhiteboard('css-basics_text-ex-ubl',
                true, true, 17, 17, 
'Test 1: <span class="test1">Bold and underline</span><br />\n\
Test 2: <span class="test2">Italic and underline</span><br />\n\
Test 3: <span class="test3">Bold and italic</span><br />\n\
Test 4: <span class="test4">Italic, bold, and underline</span><br />',
'.test1 {\n\
  \n\
  \n\
}\n\
.test2 {\n\
  \n\
  \n\
}\n\
.test3 {\n\
  \n\
  \n\
}\n\
.test4 {\n\
  \n\
  \n\
  \n\
}', 1); ?>
            
            <?php echo makeSolution(makeWhiteboard('css-basics_text-ex-ublsol',
                false, true, 17, 17, 
'Test 1: <span class="test1">Bold and underline</span><br />\n\
Test 2: <span class="test2">Italic and underline</span><br />\n\
Test 3: <span class="test3">Bold and italic</span><br />\n\
Test 4: <span class="test4">Italic, bold, and underline</span><br />',
'.test1 {\n\
  font-weight: bold;\n\
  text-decoration: underline;\n\
}\n\
.test2 {\n\
  font-style: italic;\n\
  text-decoration: underline;\n\
}\n\
.test3 {\n\
  font-style: italic;\n\
  font-weight: bold;\n\
}\n\
.test4 {\n\
  font-style: italic;\n\
  font-weight: bold;\n\
  text-decoration: underline;\n\
}', 1)); ?>
            
            <h3>Fonts</h3>
            <p>There are three main kinds of fonts: serif fonts, sans-serif
            fonts, and monospace fonts.</p>
            <dl>
                <dt>Serif fonts</dt>
                <dd>Serif fonts have little strokes at the ends of the letters
                that make them look pointier. A common example of a serif font 
                is Times New Roman. Below is an example of a serif font:
                <blockquote style="font-family: Times New Roman; Serif;">
                    The quick brown fox jumped over the lazy dog.
                </blockquote>
                </dd>
                
                <dt>Sans-serif fonts</dt>
                <dd>Sans-serif fonts don't have the little strokes at the ends
                of the letters that serif fonts have. A common example of a
                Sans-serif font is Calibri. Below is an example of a sans-serif
                font:
                <blockquote style="font-family: Calibri; Sans-serif;">
                    The quick brown fox jumped over the lazy dog.
                </blockquote></dd>
                
                <dt>Monospace fonts</dt>
                <dd>In monospace fonts, the width of each letter is the same.
                This is not normally the case&mdash;for example, the lowercase
                letter 'i' is a lot thinner than a capital 'W.' A common
                example of a monospace font is Courier. Below is an example of
                a monospace font:
                <blockquote style="font-family: Courier; Monospace;">
                    The quick brown fox jumped over the lazy dog.
                </blockquote></dd>
            </dl>
            
            <p>You can select a font in CSS using the <span
            class="code term">font-family</span> property. People can only see
            a particular font if they have it installed on their computer. So,
            you give <span class="code">font-family</span> a list of fonts to
            try. The browser tries the first font in the list, and if the
            computer doesn't have that it, it moves onto the next one, and so
            on.</p>
            
            <p>As a general rule, you want to put "Serif," "Sans-serif," or
            "Monospace" as the last option in your list. That way, if the
            visitor doesn't have any of the fonts you specified, they at least
            see the type of font.</p>
            
            <?php echo makeWhiteboard('css-basics_text-fonts',
                true, true, 10, 10,
'<p>Serif text: <span class="serif">Serif fonts tend to look older and more professional.</span></p>\n\
<p>Sans-serif text: <span class="sansSerif">Sans-serif fonts tend to look modern and friendly.</span></p>\n\
<p>Monospace text: <span class="monospace">Monospace fonts look like typewriter text and are good for displaying code.</span></p>',
'.serif {\n\
  font-family: "Times New Roman", Serif;\n\
}\n\
.sansSerif {\n\
  font-family: Calibri, Arial, Sans-serif;\n\
}\n\
.monospace {\n\
  font-family: Consolas, Monaco, Courier, Monospace;\n\
}', 1); ?>

            <p>Notice that if the font name is more than one word, we surround
            it with quotation marks (e.g., "Times New Roman"). Try replacing
            some of the font names with fake ones so that you can see how
            your browser chooses fonts from the list.</p>

            <p>We can change the size of a font using the <span
            class="code term">font-size</span> property.</p>
            <p>There are two main ways to describe font sizes (there are more
            which we don't describe here). First is to specify the number of
            pixels. For most browsers, the default font size is 16 pixels. The
            recommended unit for font size, however, is the <span
            class="term">em</span>. 1 em is the same as 16 pixels.</p>
            
            <p>We can now revisit an example from the HTML basics tutorial:</p>
            <?php echo makeWhiteboard('css-basics_text-font-size',
                true, true, 3, 3, 
'Nothing makes me <strong>happier</strong> than a walk in the rain.',
'strong {\n\
  font-size: 2em;\n\
}', 1); ?>
            
            <p>Try changing "2em" to "32px" and see that they're the same.</p>
            
            <h3>Exercise</h3>
            <p>In the previous page, we saw that an HTML element can have more
            than one value for its <span class="code term">class</span>
            attribute. Now we can try applying multiple styles to a single
            element by giving it multiple classes, where each class is 
            associated with some style.</p>
            
            <p>In this example, something can be "influential," "tall," "funny,"
            and/or "old." Apply the following styles:</p>
            <ul>
                <li>Things that are "influential" have a yellow highlight (use
                #FAEEB6)</li>
                <li>Things that are "tall" are in size 1.5em font.</li>
                <li>Things that are "funny" are italicized.</li>
                <li>Things that are "old" are in serif font.</li>
            </ul>
            
            <?php echo makeWhiteboard('css-basics_text-reviewex',
                true, true, 15, 15, 
'Entities:\n\
<ul>\n\
  <li><span class="influential">Google</span></li>\n\
  <li><span class="influential old">The Beatles</span></li>\n\
  <li><span class="tall old">Empire State Building</span></li>\n\
  <li><span class="funny old">Monty Python</span></li>\n\
</ul>',
'body {\n\
  font-family: Calibri, Arial, Sans-serif;\n\
}\n\
.influential {\n\
  \n\
}\n\
.tall {\n\
  \n\
}\n\
.funny {\n\
  \n\
}\n\
.old {\n\
  \n\
}', 1); ?>
            <?php echo makeSolution(makeWhiteboard(
                'css-basics_text-reviewexsol', true, true, 15, 15, 
'Entities:\n\
<ul>\n\
  <li><span class="influential">Google</span></li>\n\
  <li><span class="influential old">The Beatles</span></li>\n\
  <li><span class="tall old">Empire State Building</span></li>\n\
  <li><span class="funny old">Monty Python</span></li>\n\
</ul>',
'body {\n\
  font-family: Calibri, Arial, Sans-serif;\n\
}\n\
.influential {\n\
  background-color: #FAEEB6;\n\
}\n\
.tall {\n\
  font-size: 1.5em;\n\
}\n\
.funny {\n\
  font-style: italic;\n\
}\n\
.old {\n\
  font-family: Serif;\n\
}', 1)); ?>

            <h3>Text alignment</h3>
            <p>Align text to the left, center, or right of a page using the
            <span class="code term">text-align</span> property.</p>
            <?php echo makeWhiteboard(
                'css-basics_text-text-align', true, true, 17, 17,
'<h1 class="left">Heading left</h1>\n\
<h1 class="center">Heading center</h1>\n\
<h1 class="right">Heading right</h1>\n\
<p class="left">Paragraph left</p>\n\
<p class="center">Paragraph center</p>\n\
<p class="right">Paragraph right</p>',
'.left {\n\
  text-align: left;\n\
}\n\
\n\
.center {\n\
  text-align: center;\n\
}\n\
\n\
.right {\n\
  text-align: right;\n\
}', 1); ?>

            <p>Click "next page" to move on.</p>
        </div>
        
        <div class="page" id="page-5">
            <h2>Pseudo-classes</h2>
            <p>CSS has a small number of what are called <span
            class="code term">pseudo-classes</span>. They define certain
            special cases that might occur on an element, and which we might
            want to style differently. For example, one of the pseudo-classes
            is "hover," which applies to the element only when you hover your
            mouse over it.</p>
            
            <p>The example below illustrates how to use pseudo-classes. Try
            hovering over the link to watch it change colors.</p>
            <?php echo makeWhiteboard('css-basics_pseudoclasses-hover',
                true, true, 6, 6, 
'Visit the <a href="http://ucsd.edu">coolest school</a> in town!',
'a {\n\
  color: #E68600;\n\
}\n\
a:hover {\n\
  color: #F00;\n\
}', 1); ?>

            <p>Another pseudo-class you can use is <span
            class="code term">visited</span>. This targets all links that have
            already been visited. In the example below, all the links are orange
            unless they've been visited, in which case they're red:</p>
            <?php echo makeWhiteboard('css-basics_pseudoclasses-visited',
                true, true, 10, 10, 
'<h3>Google easter eggs</h3>\n\
<ul>\n\
  <li><a href="http://www.google.com/search?hl=en&q=the+loneliest+number">Which is the loneliest number?</a></li>\n\
  <li><a href="http://www.google.com/search?hl=en&q=the%20answer%20to%20life,%20the%20universe,%20and%20everything">What\\\'s the answer to life, the universe, and everything?</a></li>\n\
  <li><a href="http://www.google.com/search?q=the+number+of+horns+on+a+unicorn">How many horns are there on a unicorn?</a></li>\n\
  <li><a href="http://www.google.com/search?q=recursion">What is recursion?</a></li>\n\
  <li><a href="http://www.google.com/search?q=anagram">Help me find an anagram</a></li>\n\
</ul>',
'a {\n\
  color: #E68600;\n\
}\n\
a:visited {\n\
  color: #F00;\n\
}', 1); ?>
            
            <p>Pseudo-classes are mainly used for "hover," and so we won't go
            into a lot of extra detail with them. You can read a <a
            href="http://www.w3schools.com/CSS/css_pseudo_classes.asp">more detailed treatment of pseudo-classes</a> at W3Schools.</p>
            
            <h3>Exercise</h3>
            <p>You can apply pseudo-classes to any HTML selectors, including
            classes and IDs. Make everything with the "word" class become
            highlighted (use #FAEEB6) when you hover over it.</p>
            
            <?php echo makeWhiteboard('css-basics_pseudoclasses-wordhover',
                true, true, 10, 10, 
'<span class="word">In</span> <span class="word">this</span> <span class="word">sentence</span> <span class="word">you</span> <span class="word">can</span> <span class="word">highlight</span> <span class="word">any</span> <span class="word">word</span> <span class="word">by</span> <span class="word">hovering</span> <span class="word">over</span> <span class="word">it.</span> ', '', 1); ?>
            
            <h3>Exercise</h3>
            <p>Let's say you own a website that has text advertisements as links
            along the top and bottom of your content. As one of your
            promotions, you offer "premium" styling and placement for
            advertisers who pay more. Here's what you promised to advertisers
            who purchased "premium" ads:</p>
            <ul>
              <li>They are placed among the paragraphs (non-premium ads are at
              the bottom of the page).</li>
              <li>They are colored purple (#C400C4) instead of grey (#8C8C8C).</li>
              <li>When you hover over them, an underline appears under them and
              the color becomes brighter (#DB00DB). Nothing happens for
              non-premium links.</li>
              <li>The font size is slightly larger (1.1em instead of 1em).</li>
            </ul>
            <p>To do this, you create two classes, "regular" and "premium" in
            your HTML. Write the CSS to implement the description above. When
            you're done, it should look like this:</p>
            
            <?php echo makeWhiteboard('css-basics_pseudoclasses-ex2goal',
                false, false, 15, 15, 
'<h3>What cats eat</h3>\n\
\n\
<em>Sponsored link: </em><a href="www.classyfeast1234.com" class="premium">Classy Feast - the classiest feast for your kitty</a>\n\
\n\
<p>Cats eat cat food, which you can buy at any pet store. If you want to feed your cat with something home-made, make sure there\\\'s meat in there, like chicken. The meat should be very tender, and there should absolutely not be any bones in there.</p>\n\
\n\
<em>Sponsored link: </em><a href="www.greenfoodco42.com/cat" class="premium">Green Kitty Kibble - all organic ingredients for your special pet</a>\n\
\n\
<p>In the wild, cats eat their prey live. This may include mice, birds, fish, or insects. Cats love catnip, but it doesn\\\'t really count as food.</p>\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.valuecatfood101.com" class="regular">Value Cat Food - more munching, less money</a><br />\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.catwarehouse247.com" class="regular">Buy cat food online at Cat Warehouse - 24/7 access to popular cat food brands</a>',
'.regular {\n\
  color: #8C8C8C;\n\
}\n\
.premium {\n\
  font-size: 1.1em;\n\
  color: #C400C4;\n\
}\n\
.premium:hover {\n\
  color: #DB00DB;\n\
  text-decoration: underline;\n\
}', 1); ?>

            <?php echo makeWhiteboard('css-basics_pseudoclasses-ex2',
                true, true, 20, 20, 
'<h3>What cats eat</h3>\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.classyfeast1234.com" class="premium">Classy Feast - the classiest feast for your kitty</a>\n\
\n\
<p>Cats eat cat food, which you can buy at any pet store. If you want to feed your cat with something home-made, make sure there\\\'s meat in there, like chicken. The meat should be very tender, and there should absolutely not be any bones in there.</p>\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.greenfoodco42.com/cat" class="premium">Green Kitty Kibble - all organic ingredients for your special pet</a>\n\
\n\
<p>In the wild, cats eat their prey live. This may include mice, birds, fish, or insects. Cats love catnip, but it doesn\\\'t really count as food.</p>\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.valuecatfood101.com" class="regular">Value Cat Food - more munching, less money</a><br />\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.catwarehouse247.com" class="regular">Buy cat food online at Cat Warehouse - 24/7 access to popular cat food brands</a>', '', 1); ?>

        <?php echo makeSolution(makeWhiteboard('css-basics_pseudoclasses-ex2sol',
                false, true, 20, 20, 
'<h3>What cats eat</h3>\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.classyfeast1234.com" class="premium">Classy Feast - the classiest feast for your kitty</a>\n\
\n\
<p>Cats eat cat food, which you can buy at any pet store. If you want to feed your cat with something home-made, make sure there\\\'s meat in there, like chicken. The meat should be very tender, and there should absolutely not be any bones in there.</p>\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.greenfoodco42.com/cat" class="premium">Green Kitty Kibble - all organic ingredients for your special pet</a>\n\
\n\
<p>In the wild, cats eat their prey live. This may include mice, birds, fish, or insects. Cats love catnip, but it doesn\\\'t really count as food.</p>\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.valuecatfood101.com" class="regular">Value Cat Food - more munching, less money</a><br />\n\
\n\
<em>Sponsored link: </em>\n\
<a href="www.catwarehouse247.com" class="regular">Buy cat food online at Cat Warehouse - 24/7 access to popular cat food brands</a>',
'.regular {\n\
  color: #8C8C8C;\n\
}\n\
.premium {\n\
  color: #C400C4;\n\
  font-size: 1.1em;\n\
}\n\
.premium:hover {\n\
  color: #DB00DB;\n\
  text-decoration: underline;\n\
}', 1)); ?>
            <p>Click "next page" to continue.</p>
        </div>
        
        <div class="page" id="page-6">
            <h2>More about selectors</h2>
            <p>CSS selectors give us flexibility to target broad or narrow sets
            of tags, even if the HTML gets complicated. We'll now look at more
            ways we can choose tags using CSS selectors.</p>
            
            <h3>Combining tags with classes</h3>
            <p>You can target classes that are associated with particular tags
            like in the example below. Let's say we want to underline things
            that are "awesome." However, we only want links to be underlined
            when we're hovering over it, even if it's an "awesome" link:</p>
            
            <?php echo makeWhiteboard('css-basics_selectors2-tagclass',
                true, true, 12, 12, 
'<p>Hello <a href="http://webdev101.net" class="awesome">Web Dev 101</a>! This is an <span class="awesome">awesome</span> word.</p>',
'.awesome {\n\
  text-decoration: underline;\n\
}\n\
\n\
a.awesome {\n\
  color: blue;\n\
  text-decoration: none;\n\
}\n\
\n\
a.awesome:hover {\n\
  text-decoration: underline;\n\
}', 1); ?>

            <p>As you can see, we can sometimes have contradictory rules in CSS.
            The first rule says that everything with the "awesome" class should
            be underlined. Since the link is "awesome," it should be underlined,
            too. However, the second rule says that all <span
            class="code">a</span> tags that are awesome should not be
            underlined.</p>
            
            <p>In CSS, when two rules contradict, the more specific one
            generally wins. We make use of this a lot. First, we set broad rules
            to establish a general style for our website. Then, we override
            them in certain specific places whenever we need to.</p>
            
            <h3>Descendant selectors</h3>
            <p>When we <em>nest</em> tags inside each other, we are creating a
            hierarchy of tags. Consider this:</p>
            <pre class="code">&lt;div id="a"&gt;
  &lt;div id="b"&gt;
    Hello &lt;strong&gt;world&lt;/strong&gt;!
  &lt;/div&gt;
  &lt;div id="c"&gt;
    &lt;strong&gt;Goodbye cruel planet!&lt;/strong&gt;
  &lt;/div&gt;
&lt;/div&gt;</pre>

            <p>In the example above, the <strong>a</strong> div is the "parent"
            of <strong>b</strong> and <strong>c</strong>. Conversely, 
            <strong>b</strong> and <strong>c</strong> are called the "children"
            of <strong>a</strong>. We can also say that the <strong>b</strong>
            and <strong>c</strong> divs are
            "siblings."</p>
            
            <p>If you put a selector next to another selector, separated by a
            space, you are making a <span class="term">descendant
            selector</span>. A descendant can be a child of the first selector,
            or it could be a child of one of the children of the selector, and
            so on.</p>
            
            <p>The example below illustrates the use of a descendant selector.
            </p>
            
            <?php echo makeWhiteboard('css-basics_selectors2-descendant',
                true, true, 11, 11, 
'<div id="a">\n\
  <div id="b">\n\
    Hello <strong>world</strong>!\n\
  </div>\n\
  <div id="c">\n\
    <strong>Goodbye cruel planet!</strong>\n\
  </div>\n\
</div>',
'#a strong {\n\
  text-decoration: underline;\n\
}\n\
\n\
#b strong {\n\
  color: blue;\n\
}\n\
\n\
#c strong {\n\
  font-style: italic;\n\
}', 1); ?>

            <p>In the example above, the first rule searches for all <span
            class="code">strong</span> elements that are descendants of the
            <strong>a</strong> div. Since both <span class="code">strong</span>
            elements are descendants of <strong>a</strong>, they both get
            underlined.</p>
            
            <p>The next two rules define more specific rules that apply only to
            <span class="code">strong</span> elements that are descendants of
            the <strong>b</strong> or <strong>c</strong> divs, respectively.</p>
            
            <p>Try adding a <span class="code">text-decoration: none;</span>
            rule to one of the last two rules. You'll see that since they are
            more specific than the first rule, they override it.</p>
            
            <h3>Child selectors</h3>
            <p>A slightly more specific variant of a descendant selector is a
            <span class="term">child selector</span>. This targets only the
            direct children of the first part of the selector, but not the
            children's children or anything like that. To make a child selector,
            you separate the selectors with the <span class="code">&gt;</span> character.</p>
            
            <p>The example below shows that child selectors are more specific
            than descendant selectors. All the headings in the "a" div are in
            a serif font, unless it's a direct child of the "a" div:</p>
            <?php echo makeWhiteboard('css-basics_selectors2-child',
                true, true, 10, 10, 
'<div class="a">\n\
  <h3>This heading is a child of "a."</h3>\n\
  <div class="b">\n\
    Everything in the gray box is a grandchild of "a."\n\
    <h3>Grandchild heading 1</h3>\n\
    <h3>Grandchild heading 2</h3>\n\
  </div>\n\
</div>',
'.a h3 {\n\
  font-family: Serif;\n\
}\n\
.a > h3 {\n\
  font-family: Sans-serif;\n\
}\n\
\n\
.b {\n\
  background-color: #E3E3E3;\n\
}', 1); ?>

            <h3>Adjacent selectors</h3>
            <p>An adjacent selector is used to target an element that is
            immediately after one of its siblings. This is good for targeting
            every element except the first, when you have a bunch of sibling
            elements next to each other. Most commonly, it's used to adjust
            the spacing of elements. To make an adjacent selector, separate the
            selectors with a <span class="code">+</span> character:</p>
            
            <?php echo makeWhiteboard('css-basics_selectors2-adjacent',
                true, true, 10, 10, 
'<ol>\n\
  <li>This is the first element.</li>\n\
  <li>This is the second element, and it\\\'s immediately adjacent to the first element.</li>\n\
  <li>This is the third element, and it\\\'s immediately adjacent to the second element.</li>\n\
  <li>This is the fourth element, and it\\\'s immediately adjacent to the third element.</li>\n\
</ol>',
'li {\n\
  font-family: Sans-serif;\n\
}\n\
\n\
li + li {\n\
  font-style: italic;\n\
}', 1); ?>

            <p>We'll see a more practical use of adjacent selectors when we
            start laying out navigation for our websites.</p>
            
            <h3>Exercise: Picky customer</h3>
            <p>You are making a website for a very picky customer, who wants to
            have different styles all over his page. He gives you a long list
            of specifications. Meet all his demands, by only modifying CSS:</p>
            
            <ol>
                <li>All of the text should be in a sans-serif font, unless
                otherwise specified.</li>
                <li>The main title at the top should be centered and colored
                dark blue (use #00008B).</li>
                <li>All the prices should be bolded, unless otherwise 
                specified.</li>
                <li>If a listing is on sale, its price should be firebrick red
                (use #B22222).</li>
                <li>All the text in the books section should be centered.</li>
                <li>All the text in the aquarium section should be
                left-aligned.</li>
                <li>All the text in the special items section should be
                right-aligned.</li>
                <li>All the item titles in the books section should be in a 
                serif font, and italicized.</li>
                <li>All the item titles in the special items section should be
                underlined.</li>
                <li>All the item descriptions in the special items section
                should be in a serif font.</li>
                <li>All the prices in the special items section should not be
                bolded, and should be italicized.</li>
                <li>All links in the special items section should be in navy
                blue (use #000080), and should not be underlined.</li>
                <li>When you hover over a link in the special items section,
                it should get underlined.</li>
            </ol>
            
            <p>It's a long list, but each bullet point should map directly to
            one or two CSS rules. You may want to use the <a
            href="/whiteboard">full-page whiteboard</a> for this exercise.</p>
            <?php echo makeWhiteboard('css-basics_selectors2-ex1',
                true, true, 25, 25, 
'<h1>George Bluefin\\\'s big garage sale</h1>\n\
\n\
<div id="books" class="section">\n\
  <h2>Books</h2>\n\
  <div class="listing">\n\
    <h3>Twenty Thousand Leagues Under the Sea</h3>\n\
    <p class="description">The classic tale of nautical adventure by Jules Verne. A real whale of a book! Excellent condition. <span class="pricetag">$6.99</span>.</p>\n\
  </div>\n\
\n\
  <div class="listing sale">\n\
    <h3>Pirates of the Caribbean Coloring Book</h3>\n\
    <p class="description">Sale! Got it as a gift, never opened. <span class="pricetag">$5.99</span>.</p>\n\
  </div>\n\
</div>\n\
\n\
<div id="aquarium" class="section">\n\
  <h2>Aquarium stuff</h2>\n\
  <div class="listing sale">\n\
    <h3>Glass aquarium</h3>\n\
    <p class="description">Sale! 10 gallons, good condition. Comes with a cover with a built-in light, a thermometer, a net, and a filter system. Doesn\\\'t leak! <span class="pricetag">$60</span>.</p>\n\
  </div>\n\
\n\
  <div class="listing">\n\
    <h3>Pebbles</h3>\n\
    <p class="description">200 large pebbles. Colors are a mixture of gray, tan, marble. Perfect for a 10 gallon aquarium. <span class="pricetag">$15</span>.</p>\n\
  </div>\n\
</div>\n\
\n\
<div id="special" class="section">\n\
  <h2>Special items</h2>\n\
  <div class="listing">\n\
    <h3>Trilobite fossil</h3>\n\
    <p class="description">Really old! But cool looking. Not recommended for entomophobics. <span class="pricetag">Price is negotiable. <a href="mailto:gbluefin@webdev101.net">Contact me</a> if interested.</span></p>\n\
  </div>\n\
\n\
  <div class="listing">\n\
    <h3>Sleek IV sailing yacht</h3>\n\
    <p class="description">The sleekest yacht in the sea. Located in San Diego, CA. <span class="pricetag">Price is negotiable. <a href="mailto:gbluefin@webdev101.net">Contact me</a> if interested.</span></p>\n\
  </div>\n\
</div>',
'body {\n\
  font-family: Sans-serif;\n\
}', 1); ?>

            <?php echo makeSolution(makeWhiteboard(
                'css-basics_selectors2-ex1sol', false, true, 25, 25, 
'<h1>George Bluefin\\\'s big garage sale</h1>\n\
\n\
<div id="books" class="section">\n\
  <h2>Books</h2>\n\
  <div class="listing">\n\
    <h3>Twenty Thousand Leagues Under the Sea</h3>\n\
    <p class="description">The classic tale of nautical adventure by Jules Verne. A real whale of a book! Excellent condition. <span class="pricetag">$6.99</span>.</p>\n\
  </div>\n\
\n\
  <div class="listing sale">\n\
    <h3>Pirates of the Caribbean Coloring Book</h3>\n\
    <p class="description">Sale! Got it as a gift, never opened. <span class="pricetag">$5.99</span>.</p>\n\
  </div>\n\
</div>\n\
\n\
<div id="aquarium" class="section">\n\
  <h2>Aquarium stuff</h2>\n\
  <div class="listing sale">\n\
    <h3>Glass aquarium</h3>\n\
    <p class="description">Sale! 10 gallons, good condition. Comes with a cover with a built-in light, a thermometer, a net, and a filter system. Doesn\\\'t leak! <span class="pricetag">$60</span>.</p>\n\
  </div>\n\
\n\
  <div class="listing">\n\
    <h3>Pebbles</h3>\n\
    <p class="description">200 large pebbles. Colors are a mixture of gray, tan, marble. Perfect for a 10 gallon aquarium. <span class="pricetag">$15</span>.</p>\n\
  </div>\n\
</div>\n\
\n\
<div id="special" class="section">\n\
  <h2>Special items</h2>\n\
  <div class="listing">\n\
    <h3>Trilobite fossil</h3>\n\
    <p class="description">Really old! But cool looking. Not recommended for entomophobics. <span class="pricetag">Price is negotiable. <a href="mailto:gbluefin@webdev101.net">Contact me</a> if interested.</span></p>\n\
  </div>\n\
\n\
  <div class="listing">\n\
    <h3>Sleek IV sailing yacht</h3>\n\
    <p class="description">The sleekest yacht in the sea. Located in San Diego, CA. <span class="pricetag">Price is negotiable. <a href="mailto:gbluefin@webdev101.net">Contact me</a> if interested.</span></p>\n\
  </div>\n\
</div>',
'body {\n\
  font-family: Sans-serif;\n\
}\n\
\n\
h1 {\n\
  text-align: center;\n\
  color: #00008B;\n\
}\n\
\n\
.pricetag {\n\
  font-weight: bold;\n\
}\n\
\n\
.sale .pricetag {\n\
  color: #B22222;\n\
}\n\
\n\
#books {\n\
  background-color: #BCD;\n\
  text-align: center;\n\
}\n\
\n\
#books h3 {\n\
  font-family: Serif;\n\
  font-style: italic;\n\
}\n\
\n\
#aquarium {\n\
  background-color: #DEF;\n\
}\n\
\n\
#special {\n\
  background-color: #CDE;\n\
  text-align: right;\n\
}\n\
\n\
#special .pricetag {\n\
  font-weight: normal;\n\
  font-style: italic;\n\
}\n\
\n\
#special .description {\n\
  font-family: serif;\n\
}\n\
\n\
#special h3 {\n\
  text-decoration: underline;\n\
}\n\
\n\
#special a {\n\
  color: #000080;\n\
  text-decoration: none;\n\
}\n\
\n\
#special a:hover {\n\
  text-decoration: underline;\n\
}', 1)); ?>
            <p>If you got through that, congratulations! Click "next page" to
            move on.</p>
        </div>
        
        <div class="page" id="page-7">
            <h2>Comments</h2>
            <p>Just as you can put comments in HTML code, you can put comments
            in CSS code. Here's what they look like:</p>
            <?php echo makeWhiteboard('css-basics_comments',
                true, true, 8, 8, 
'<span class="red">Why isn\\\'t this sentence white on red?</span>',
'.red {\n\
  /* The customer decided white on red was too harsh on the eyes. */\n\
  /*\n\
  color: white;\n\
  background-color: red;\n\
  */\n\
}', 0); ?>
            <p>Try uncommenting the CSS code to see if you agree. As you can
            see, you just surround whatever you want to comment out with <span
            class="code">/*</span> on the left and <span
            class="code">*/</span> on the right.</p>
            
            <p>Click "next page" to finish up this tutorial.</p>
        </div>
        
        <div class="page" id="page-8">
            <h2>Challenge exercises: CSS golf</h2>
            <p>As a review of all the content we covered in this tutorial, we
            have for you: CSS golf. The rules of CSS golf are this: you have to
            follow the instructions to change the styling of some HTML. You can
            only modify CSS code, and you have to do it in the given number of
            non-whitespace characters.</p>
            
            <p>It's possible to get under par, but that's not really the point
            of the activity. Try not to look at the solutions as you try, and good luck!</p>
            
            <h3>Hex colors</h3>
            <p>Make the word "world" blue (use #0077BB).</p>
            
            <?php echo makeGolfScoreboard('css-basics_golf_hex-colors', 18); ?>
            
            <?php echo makeWhiteboard('css-basics_golf_hex-colors',
                true, true, 3, 3, 
'<span class="hello">Hello</span> <span class="test">world</span>!',
'', 1); ?>

            <?php echo makeSolution(
            '<p>Remember that you can represent colors with repeated digits like #0077BB as just #07B.</p>'.
            makeWhiteboard('css-basics_golf_hex-colors_sol',
                false, true, 3, 3, 
'<span class="hello">Hello</span> <span class="test">world</span>!',
'.test {\n\
  color: #07B;\n\
}', 1)); ?>

            <h3>Text styles</h3>
            <p>Apply the styles described.</p>
            
            <?php echo makeGolfScoreboard('css-basics_golf_text-styles', 89); ?>
            
            <?php echo makeWhiteboard('css-basics_golf_text-styles',
                true, true, 11, 11, 
'<span id="test1" class="bold italic">Bold</span><br />\n\
<span id="test2" class="bold italic underline">Bold, italic and underline</span>',
'', 1); ?>

            <?php echo makeSolution(
            '<p>If you wrote separate styles for <strong>#test1</strong> and
            <strong>#test2</strong>, you would come close at 94 characters.
            However, it\'s usually better to target classes in your
            CSS as opposed to IDs&mdash;you\'ll get more reuse that way.</p>'.
            makeWhiteboard('css-basics_golf_text-styles_sol',
                false, true, 11, 11, 
'<span id="test1" class="bold italic">Bold</span><br />\n\
<span id="test2" class="bold italic underline">Bold, italic and underline</span>',
'.bold {\n\
  font-weight: bold;\n\
}\n\
\n\
.italic {\n\
  font-style: italic;\n\
}\n\
\n\
.underline {\n\
  text-decoration: underline;\n\
}', 1)); ?>

            <h3>Text styles 2</h3>
            <p>Make the word "coffee" be 32px big, and colored brown (use
            #855538).</p>
            
            <?php echo makeGolfScoreboard('css-basics_golf_text-styles2', 37); ?>
            
            <?php echo makeWhiteboard('css-basics_golf_text-styles2',
                true, true, 4, 4, 
'I am <span class="waiting">waiting</span> at the counter for the man to pour the <span class="coffee">coffee</span>.',
'', 1); ?>

            <?php echo makeSolution(
            '<p>Remember that <span class="code">1em = 16px</span>, so <span
            class="code">2em = 32px</span>. Also remember that <span
            class="code">em</span> is conventionally used when dealing with font
            sizes, anyway.</p>'.
            makeWhiteboard('css-basics_golf_text-styles2_sol',
                false, true, 4, 4, 
'I am <span class="waiting">waiting</span> at the counter for the man to pour the <span class="coffee">coffee</span>.',
'.coffee {\n\
  color: #855538;\n\
  font-size: 2em;\n\
}', 1)); ?>

            <h3>Hover effects</h3>
            <p>Style the links as follows:</p>
            <ul>
                <li>Pandora: colored gray (use the name "gray") and not underlined
                to start with. When hovered over, becomes underlined and colored
                blue (use #45A6B5).
                </li>
                <li>Last.fm: colored blue (use the name "blue") and
                underlined to start with. When hovered over, stays underlined
                and turns red (use #DB0037).</li>
                <li>Grooveshark: colored blue (use the name "blue") and not
                underlined to start with. When hovered over, becomes underlined 
                and colored orange (use #EBB12A).</li>
            </ul>
            
            <?php echo makeGolfScoreboard('css-basics_golf_pseudo-classes', 207); ?>
            
            <?php echo makeWhiteboard('css-basics_golf_pseudo-classes',
                true, true, 25, 25, 
'<p>You can stream music for free from sites like\n<a href="http://pandora.com" id="link1">Pandora</a>,\n<a href="http://last.fm" id="link2">Last.fm</a>, and\n<a href="http://grooveshark.com" id="link3">Grooveshark</a>.</p>',
'', 1); ?>

            <?php echo makeSolution(
            '<p>We want to aggregate the properties that most elements share
            using the fewest selectors possible. Since most links are blue and
            not underlined to start with, we combine those under the 
            <span class="code">a</span> tag. They all are underlined when
            hovered over, so we put them all into the <span
            class="code">hover</span> pseudo-class.</p>
            <p>There\'s no avoiding the fact that each link becomes a different
            color when hovered over, so we just have to add that in. We also
            have to add in the exceptions to the starting style: Pandora is gray
            and Last.fm is underlined.</p>'.
            makeWhiteboard('css-basics_golf_pseudo-classes_sol',
                false, true, 21, 21, 
'<p>You can stream music for free from sites like <a href="http://pandora.com" id="link1">Pandora</a>, <a href="http://last.fm" id="link2">Last.fm</a>, and <a href="http://grooveshark.com" id="link3">Grooveshark</a>.</p>',
'a {\n\
  color: blue;\n\
  text-decoration: none;\n\
}\n\
a:hover {\n\
  text-decoration: underline;\n\
}\n\
\n\
#link1 {\n\
  color: gray;\n\
}\n\
#link1:hover {\n\
  color: #45A6B5;\n\
}\n\
\n\
#link2 {\n\
  text-decoration: underline;\n\
}\n\
#link2:hover {\n\
  color: #DB0037;\n\
}\n\
\n\
#link3:hover {\n\
  color: #EBB12A;\n\
}', 1)); ?>
        
            <h3>Selectors</h3>
            <p>Replicate this. A careful choice of selectors will keep you on
            par.</p>
            
            <?php echo makeWhiteboard('css-basics_golf_selectors_goal',
                false, false, 18, 18, 
'<div class="a">\n\
  <h3 id="line1">Line 1</h3>\n\
  <div class="b">\n\
      <h3 id="line2a">Line 2a</h3>\n\
      <div class="c">\n\
        <h3 id="line3a">Line 3a</h3>\n\
      </div>\n\
      <div class="c">\n\
        <h3 id="line3b">Line 3b</h3>\n\
      </div>\n\
  </div>\n\
  <div class="b">\n\
      <h3 id="line2b">Line 2b</h3>\n\
      <div class="c">\n\
        <h3 id="line3c">Line 3c</h3>\n\
      </div>\n\
      <div class="c">\n\
        <h3 id="line3d">Line 3d</h3>\n\
      </div>\n\
  </div>\n\
</div>',
'.b {\n\
  text-align: center;\n\
}\n\
\n\
.c {\n\
  text-align: right;\n\
}\n\
\n\
.b > h3 {\n\
  font-style: italic;\n\
}\n\
\n\
.b + .b h3 {\n\
  text-decoration: underline;\n\
}', 1) ?>
            
            <?php echo makeGolfScoreboard('css-basics_golf_selectors', 103); ?>
            
            <?php echo makeWhiteboard('css-basics_golf_selectors',
                true, true, 21, 21, 
'<div class="a">\n\
  <h3 id="line1">Line 1</h3>\n\
  <div class="b">\n\
      <h3 id="line2a">Line 2a</h3>\n\
      <div class="c">\n\
        <h3 id="line3a">Line 3a</h3>\n\
      </div>\n\
      <div class="c">\n\
        <h3 id="line3b">Line 3b</h3>\n\
      </div>\n\
  </div>\n\
  <div class="b">\n\
      <h3 id="line2b">Line 2b</h3>\n\
      <div class="c">\n\
        <h3 id="line3c">Line 3c</h3>\n\
      </div>\n\
      <div class="c">\n\
        <h3 id="line3d">Line 3d</h3>\n\
      </div>\n\
  </div>\n\
</div>',
'', 1); ?>

            <?php echo makeSolution(
            '<p>Sorry, we\'re just trying to be tricky here. In this exercise,
            we make use of the child and adjacent selectors. You use the child
            selectors to make sure that only the <span class="code">h3</span>s
            directly under class <span class="code">b</span> divs are
            italicized. Then you use the adjacent selectors to select only the
            bottom <span class="code">b</span> div and underline the <span
            class="code">h3</span>s under it.
            </p>'.
            makeWhiteboard('css-basics_golf_selectors_sol',
                false, true, 21, 21, 
'<div class="a">\n\
  <h3 id="line1">Line 1</h3>\n\
  <div class="b">\n\
      <h3 id="line2a">Line 2a</h3>\n\
      <div class="c">\n\
        <h3 id="line3a">Line 3a</h3>\n\
      </div>\n\
      <div class="c">\n\
        <h3 id="line3b">Line 3b</h3>\n\
      </div>\n\
  </div>\n\
  <div class="b">\n\
      <h3 id="line2b">Line 2b</h3>\n\
      <div class="c">\n\
        <h3 id="line3c">Line 3c</h3>\n\
      </div>\n\
      <div class="c">\n\
        <h3 id="line3d">Line 3d</h3>\n\
      </div>\n\
  </div>\n\
</div>',
'.b {\n\
  text-align: center;\n\
}\n\
\n\
.c {\n\
  text-align: right;\n\
}\n\
\n\
.b > h3 {\n\
  font-style: italic;\n\
}\n\
\n\
.b + .b h3 {\n\
  text-decoration: underline;\n\
}', 1)); ?>
            
            <p>That ends this tutorial. Don't worry if you didn't get all the
            challenge exercises. The best practice to follow is to write CSS
            that is simple and <em>easily understood</em>, rather than packed
            down in as few characters as possible.</p>
            
            <p>From here, you can choose to learn more HTML tags in our HTML
            track, or explore more CSS in our CSS track. It doesn't matter what
            order you do the tutorials, as long as you do the tutorials within
            each track in order.</p>
            
            <h3>Tutorial survey</h3>
            <p>You can help us improve our tutorials by answering one question
            for us:</p>
            <iframe src="http://spreadsheets.google.com/embeddedform?formkey=dHRPV0ZhaEl0Q3hET2c5ZHd4dWhKN0E6MA" width="760" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>