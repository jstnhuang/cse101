<?php
$title = 'The CSS box model';
$pagePath = '/tutorials/box-model';

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
        loadTutorial(5);
    });
    --></script>
    <?php echo makeAnalytics(); ?>
</head>
<body>
    
<?php echo makeHeader(null, $pagePath); ?>    

<?php
$pages = array(
    'A simple div',
    'Borders',
    'Margin',
    'Padding',
    'Odds and ends'
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
            <h2>A simple div</h2>
            <p>As we explained in an earlier tutorial, a div is like an
            invisible box that we can target with CSS. In the example below,
            we change the background color of the div surrounding the two
            paragraphs:</p>
            <?php echo makeWhiteboard('box-model_simple-bgcolor',
                true, true, 4, 4,
'<div class="simple">\n\
  <p>Hello world!</p>\n\
  <p>Welcome to the world of divs!</p>\n\
</div>',
'.simple {\n\
  background-color: #cde;\n\
}', 1); ?>

            <p>Divs are <span class="term">block-level</span> elements, while
            spans are their <span class="term">inline</span> equivalents. The
            default width of block-level elements is "as wide as possible," (it
            expands to fill up all the horizontal space available)
			while their default height is "as tall as necessary" (it covers the
            two paragraphs, but doesn't go any farther down).</p>
            
            <p>We can set the height and width of a div explicitly using the
            <span class="code term">height</span> and <span
            class="code term">width</span> properties:</p>
            <?php echo makeWhiteboard('box-model_simple-widthpx',
                true, true, 4, 4,
'<div class="simple">\n\
  <p>Hello world!</p>\n\
  <p>Welcome to the world of divs!</p>\n\
</div>',
'.simple {\n\
  background-color: #cde;\n\
  width: 300px;\n\
}', 1); ?>

            <p>You can give <span class="code">height</span> and <span
            class="code">width</span> values in pixels, em, and percentage. We
            saw the first two with the <span class="code">font-size</span>
            property. Percentage is a little different. If you set a div's width
            to, say, <strong><span class="code">50%</span></strong>, then it'll
            be half as wide as the element that contains it (its <span
            class="term">parent</span> element. Or, if it doesn't have a parent,
            it'll be half of the size of the browser window.</p>
            
            <p>Change the width of the <span class="code">halfPercentage</span>
            class below from 100% to 50%:</p>
            <?php echo makeWhiteboard('box-model_simple-widthper',
                true, true, 12, 12,
'<div class="simple">\n\
  <p>Hello world! (300px)</p>\n\
  <div class="halfPx">\n\
    <p>Welcome to the world of divs! (150px)</p>\n\
  </div>\n\
  <div class="halfPercentage">\n\
    <p>Half-sized div</p>\n\
  </div>\n\
</div>',
'.simple {\n\
  background-color: #cde;\n\
  width: 300px;\n\
}\n\
.halfPx {\n\
  background-color: #cfc;\n\
  width: 150px;\n\
}\n\
.halfPercentage {\n\
  background-color: #ffc;\n\
  width: 100%;\n\
}', 1); ?>

            <p>The parent of the <span class="code">halfPercentage</span> div is
            the <span class="code">simple</span> div. Since the <span
            class="code">simple</span> div is 300px wide, 50% of that is 150px.
            Try changing the width of the <span class="code">simple</span> div
            to something like 200px and see what happens.</p>

            <h3>Exercise</h3>
            <p>Replicate the example below by setting the width of each bar to
            half the width of the bar above it (feel free to round).</p>
            <?php echo makeWhiteboard('box-model_simple-exgoal',
                false, false, 18, 18,
'<h2>Test results</h2>\n\
<div class="bar bar1">\n\
  A\n\
</div>\n\
<div class="bar bar2">\n\
  B\n\
</div>\n\
<div class="bar bar3">\n\
  C\n\
</div>\n\
<div class="bar bar4">\n\
  D\n\
</div>\n\
<div class="bar bar5">\n\
  E\n\
</div>\n\
<div class="bar bar6">\n\
  F\n\
</div>\n\
<div class="bar bar7">\n\
  G\n\
</div>\n\
<div class="bar bar8">\n\
  H\n\
</div>',
'.bar {\n\
  height: 30px;\n\
}\n\
.bar1 {\n\
  background-color: #678;\n\
  width: 100%;\n\
}\n\
.bar2 {\n\
  background-color: #789;\n\
  width: 50%;\n\
}\n\
.bar3 {\n\
  background-color: #89A;\n\
  width: 25%;\n\
}\n\
.bar4 {\n\
  background-color: #9AB;\n\
  width: 12.5%;\n\
}\n\
.bar5 {\n\
  background-color: #ABC;\n\
  width: 6.25%;\n\
}\n\
.bar6 {\n\
  background-color: #BCD;\n\
  width: 3.125%;\n\
}\n\
.bar7 {\n\
  background-color: #CDE;\n\
  width: 1.6%;\n\
}\n\
.bar8 {\n\
  background-color: #DEF;\n\
  width: 0.8%;\n\
}', 0); ?>

            <?php echo makeWhiteboard('box-model_simple-ex',
                true, true, 20, 20,
'<h2>Test results</h2>\n\
<div class="bar bar1">\n\
  A\n\
</div>\n\
<div class="bar bar2">\n\
  B\n\
</div>\n\
<div class="bar bar3">\n\
  C\n\
</div>\n\
<div class="bar bar4">\n\
  D\n\
</div>\n\
<div class="bar bar5">\n\
  E\n\
</div>\n\
<div class="bar bar6">\n\
  F\n\
</div>\n\
<div class="bar bar7">\n\
  G\n\
</div>\n\
<div class="bar bar8">\n\
  H\n\
</div>',
'.bar {\n\
  height: 30px;\n\
}\n\
.bar1 {\n\
  background-color: #678;\n\
  \n\
}\n\
.bar2 {\n\
  background-color: #789;\n\
  \n\
}\n\
.bar3 {\n\
  background-color: #89A;\n\
  \n\
}\n\
.bar4 {\n\
  background-color: #9AB;\n\
  \n\
}\n\
.bar5 {\n\
  background-color: #ABC;\n\
  \n\
}\n\
.bar6 {\n\
  background-color: #BCD;\n\
  \n\
}\n\
.bar7 {\n\
  background-color: #CDE;\n\
  \n\
}\n\
.bar8 {\n\
  background-color: #DEF;\n\
  \n\
}', 1); ?>

            <?php echo makeSolution(
            '<p>Using percentages would have been best here, but you could have
            made a similar-looking result using pixels.</p>'.
            makeWhiteboard('box-model_simple-exsol',
                false, true, 20, 20,
'<h2>Test results</h2>\n\
<div class="bar bar1">\n\
  A\n\
</div>\n\
<div class="bar bar2">\n\
  B\n\
</div>\n\
<div class="bar bar3">\n\
  C\n\
</div>\n\
<div class="bar bar4">\n\
  D\n\
</div>\n\
<div class="bar bar5">\n\
  E\n\
</div>\n\
<div class="bar bar6">\n\
  F\n\
</div>\n\
<div class="bar bar7">\n\
  G\n\
</div>\n\
<div class="bar bar8">\n\
  H\n\
</div>',
'.bar {\n\
  height: 30px;\n\
}\n\
.bar1 {\n\
  background-color: #678;\n\
  width: 100%;\n\
}\n\
.bar2 {\n\
  background-color: #789;\n\
  width: 50%;\n\
}\n\
.bar3 {\n\
  background-color: #89A;\n\
  width: 25%;\n\
}\n\
.bar4 {\n\
  background-color: #9AB;\n\
  width: 12.5%;\n\
}\n\
.bar5 {\n\
  background-color: #ABC;\n\
  width: 6.25%;\n\
}\n\
.bar6 {\n\
  background-color: #BCD;\n\
  width: 3.125%;\n\
}\n\
.bar7 {\n\
  background-color: #CDE;\n\
  width: 1.6%;\n\
}\n\
.bar8 {\n\
  background-color: #DEF;\n\
  width: 0.8%;\n\
}', 1)); ?>

            <p>Click "next page" to move on.</p>
        </div>
        
        <div class="page" id="page-2">
            <h2>Borders</h2>
            <p>Try adding a border around an element by adding in the <span
            class="code">border</span> property:</p>
            <p><pre class="code">border: 10px solid #158210;</pre></p>
            <?php echo makeWhiteboard('box-model_simple-borders',
                true, true, 8, 8, 
'<div>\n\
  Watermelon box!\n\
</div>',
'div {\n\
  background-color: #E01B4C;\n\
  height: 100px;\n\
  width: 100px;\n\
  \n\
}', 1); ?>

            <p><span class="code term">border</span> is actually a property that
            lets you combine three different properties together:</p>
            <dl>
                <dt><span class="code term">border-width</span></dt>
                <dd>Sets the width of the border, in pixels.</dd>
                <dt><span class="code term">border-style</span></dt>
                <dd>Determines how the border looks. There are a number of
                values for this property, which you can try below. They are:
                <ul>
                    <li><span class="code">none</span></li>
                    <li><span class="code">dotted</span></li>
                    <li><span class="code">dashed</span></li>
                    <li><span class="code">solid</span></li>
                    <li><span class="code">double</span></li>
                    <li><span class="code">groove</span></li>
                    <li><span class="code">ridge</span></li>
                    <li><span class="code">inset</span></li>
                    <li><span class="code">outset</span></li>
                </ul>
                </dd>
                <dt><span class="code term">border-color</span></dt>
                <dd>Sets the color of the border, in the same way that you can
                set the <span class="code">color</span> or <span
                class="code">background-color</span> property.</dd>
            </dl>
            
            <h3>Exercise</h3>
            <p>Try changing the borders for the boxes below:</p>
            <?php echo makeWhiteboard('box-model_border-styles',
                true, true, 20, 20, 
'<div id="box1">\n\
  Solid red border.\n\
</div>\n\
\n\
<div id="box2">\n\
  Dotted, blue, thin (1 px) border.\n\
</div>\n\
\n\
<div id="box3">\n\
  Grooved, green, thick (10 px) border.\n\
</div>',
'div {\n\
  margin: 5px; /* We will go over this shortly. */\n\
}\n\
\n\
#box1 {\n\
  border-style: ;\n\
  border-color: ;\n\
}\n\
\n\
#box2 {\n\
  border-style: ;\n\
  border-color: ;\n\
  border-width: ;\n\
}\n\
\n\
#box3 {\n\
  border-style: ;\n\
  border-color: ;\n\
  border-width: ;\n\
}', 1); ?>

            <?php echo makeSolution(makeWhiteboard('box-model_border-styles-sol',
                false, true, 20, 20, 
'<div id="box1">\n\
  Solid red border.\n\
</div>\n\
\n\
<div id="box2">\n\
  Dotted, blue, thin (1 px) border.\n\
</div>\n\
\n\
<div id="box3">\n\
  Grooved, green, thick (10 px) border.\n\
</div>',
'div {\n\
  margin: 5px; /* We will go over this shortly. */\n\
}\n\
\n\
#box1 {\n\
  border-style: solid;\n\
  border-color: red;\n\
}\n\
\n\
#box2 {\n\
  border-style: dotted;\n\
  border-color: blue;\n\
  border-width: 1px;\n\
}\n\
\n\
#box3 {\n\
  border-style: groove;\n\
  border-color: green;\n\
  border-width: 10px;\n\
}', 1)); ?>

            <p>You should also try changing the <span class="code">border-style</span>
            to some of the other values listed above.</p>
            
            <p>As you saw in the first example, the <span class="code">border</span>
            property allows you to set all three properties at once. You can also
            set the properties for just one of the four borders (top, left, right,
            bottom) at a time. To do this, change <span
            class="code">border</span> to <span class="code">border-top</span>,
            <span class="code">border-bottom</span>,
            <span class="code">border-left</span>, or
            <span class="code">border-right</span>. You can also set individual
            properties for individual sides using
            <span class="code">border-left-style</span>,
            <span class="code">border-bottom-color</span>, etc.
            
            <h3>Exercise: Frankenstein borders</h3>
            <p>Try to make this box. The border types, color, and widths are
            given below:
            <ul>
                <li>Top: Solid, #5C2, 3px.</li>
                <li>Right: Dashed, #9E2B38, 8px.</li>
                <li>Left: Double, blue, 4px.</li>
                <li>Bottom: Dotted, #333, 5px.</li>
            </ul></p>
            <?php echo makeWhiteboard('box-model_frankenborders-goal',
                false, false, 7, 7, 
'<div>\n\
  Frankenborder!\n\
</div>',
'div {\n\
  background-color: #ccc;\n\
  width: 100px;\n\
  height: 100px;\n\
  border-top: 3px solid #5C2;\n\
  border-right: 8px dashed #9E2B38;\n\
  border-bottom: 5px dotted #333;\n\
  border-left: 4px double blue;\n\
}', 1); ?>

            <?php echo makeWhiteboard('box-model_frankenborders-ex',
                true, true, 9, 9, 
'<div>\n\
  Frankenborder!\n\
</div>',
'div {\n\
  background-color: #ccc;\n\
  width: 100px;\n\
  height: 100px;\n\
  \n\
  \n\
  \n\
  \n\
}', 1); ?>

            <?php echo makeSolution(makeWhiteboard('box-model_frankenborders-sol',
                false, true, 9, 9, 
'<div>\n\
  Frankenborder!\n\
</div>',
'div {\n\
  background-color: #ccc;\n\
  width: 100px;\n\
  height: 100px;\n\
  border-top: 3px solid #5C2;\n\
  border-right: 8px dashed #9E2B38;\n\
  border-bottom: 5px dotted #333;\n\
  border-left: 4px double blue;\n\
}', 1)); ?>

        <p>Click "next page" to move on.</p>
        </div>
         
        <div class="page" id="page-3">
            <h2>Margin</h2>
            <p>You can put spacing around the outside of divs using the
            <span class="code term">margin</span> property. Try putting some
            space around the <span class="code">box2</span> by adding in this
            line of code below:
            <pre class="code">margin: 5px;</pre>
            <?php echo makeWhiteboard('box-model_margin-basic',
                true, true, 8, 8, 
'<div class="box1">\n\
  No margins.\n\
</div>\n\
\n\
<div class="box2">\n\
  Margins all around!\n\
</div>',
'div {\n\
  background-color: #ccc;\n\
  border: 1px solid #555;\n\
}\n\
\n\
.box2 {\n\
  \n\
}', 1); ?>

            <?php echo makeSolution(makeWhiteboard('box-model_margin-basic-sol',
                false, true, 8, 8, 
'<div class="box1">\n\
  No margins.\n\
</div>\n\
\n\
<div class="box2">\n\
  Margins all around!\n\
</div>',
'div {\n\
  background-color: #ccc;\n\
  border: 1px solid #555;\n\
}\n\
\n\
.box2 {\n\
  margin: 5px;\n\
}', 1)); ?>
            <p>As with borders, you can control the margin around each side of
            the box individually using <span class="code">margin-top</span>
            <span class="code">margin-bottom</span>, 
            <span class="code">margin-left</span>, and
            <span class="code">margin-right</span>.</p>
            
            <h3>Exercise</h3>
            <p>Replicate this by putting a 10px margin below <span
            class="code">box1</span> and a 5px margin to the left of <span
            class="code">box2</span>.</p>
            
            <?php echo makeWhiteboard('box-model_margin-goal',
                false, false, 4, 4, 
'<div class="box1">\n\
  10px margin on bottom.\n\
</div>\n\
\n\
<div class="box2">\n\
  5px margin to the left.\n\
</div>',
'div {\n\
  background-color: #ccf;\n\
  border: 1px solid #55f;\n\
}\n\
\n\
.box1 {\n\
  margin-bottom: 10px;\n\
}\n\
\n\
.box2 {\n\
  margin-left: 5px;\n\
}', 1); ?>

            
            <?php echo makeWhiteboard('box-model_margin-ex',
                true, true, 12, 12, 
'<div class="box1">\n\
  10px margin on bottom.\n\
</div>\n\
\n\
<div class="box2">\n\
  5px margin to the left.\n\
</div>',
'div {\n\
  background-color: #ccf;\n\
  border: 1px solid #55f;\n\
}\n\
\n\
.box1 {\n\
  \n\
}\n\
\n\
.box2 {\n\
  \n\
}', 1); ?>

            <?php echo makeSolution(makeWhiteboard('box-model_margin-sol',
                false, true, 12, 12, 
'<div class="box1">\n\
  10px margin on bottom.\n\
</div>\n\
\n\
<div class="box2">\n\
  5px margin to the left.\n\
</div>',
'div {\n\
  background-color: #ccf;\n\
  border: 1px solid #55f;\n\
}\n\
\n\
.box1 {\n\
  margin-bottom: 10px;\n\
}\n\
\n\
.box2 {\n\
  margin-left: 5px;\n\
}', 1)); ?>

            <p>That's all there is to it! Click "next page" to go on.</p>
        </div>
        
        <div class="page" id="page-4">
            <h2>Padding</h2>
            <p>In the last tutorial, we used <span class="code">margin</span> to
            put space around divs. You can also put space <em>within</em> divs
            by using <span class="code term">padding</span>. Try adding in the
            line below to see how padding works:</p>
            <pre class="code">padding: 10px;</pre>
            <?php echo makeWhiteboard('box-model_padding-basic',
                true, true, 8, 8, 
'<div class="box1">\n\
  No padding.\n\
</div>\n\
\n\
<div class="box2">\n\
  Padding all around!\n\
</div>',
'div {\n\
  background-color: #ccc;\n\
  border: 1px solid #555;\n\
}\n\
\n\
.box2 {\n\
  \n\
}', 1); ?>

            <?php echo makeSolution(makeWhiteboard('box-model_padding-basic-sol',
                false, true, 8, 8, 
'<div class="box1">\n\
  No padding.\n\
</div>\n\
\n\
<div class="box2">\n\
  Padding all around!\n\
</div>',
'div {\n\
  background-color: #ccc;\n\
  border: 1px solid #555;\n\
}\n\
\n\
.box2 {\n\
  padding: 10px;\n\
}', 1)); ?>
            <p>As with borders, you can control the padding around each side of
            the box individually using <span class="code">padding-top</span>
            <span class="code">padding-bottom</span>, 
            <span class="code">padding-left</span>, and
            <span class="code">padding-right</span>.</p>
            
            <h3>Exercise</h3>
            <p>Replicate this by putting a 10px padding on the top and bottom of <span
            class="code">box1</span> and a 5px padding on the left of <span
            class="code">box2</span>.</p>
            
            <?php echo makeWhiteboard('box-model_padding-goal',
                false, false, 4, 4, 
'<div class="box1">\n\
  10px padding on top and bottom.\n\
</div>\n\
\n\
<div class="box2">\n\
  20px padding to the left.\n\
</div>',
'div {\n\
  background-color: #ccf;\n\
  border: 1px solid #55f;\n\
  margin: 5px;\n\
}\n\
\n\
.box1 {\n\
  padding-top: 10px;\n\
  padding-bottom: 10px;\n\
}\n\
\n\
.box2 {\n\
  padding-left: 20px;\n\
}', 1); ?>

            
            <?php echo makeWhiteboard('box-model_padding-ex',
                true, true, 14, 14, 
'<div class="box1">\n\
  10px padding on top and bottom.\n\
</div>\n\
\n\
<div class="box2">\n\
  20px padding to the left.\n\
</div>',
'div {\n\
  background-color: #ccf;\n\
  border: 1px solid #55f;\n\
  margin: 5px;\n\
}\n\
\n\
.box1 {\n\
  \n\
  \n\
}\n\
\n\
.box2 {\n\
  \n\
}', 1); ?>

            <?php echo makeSolution(makeWhiteboard('box-model_padding-sol',
                false, true, 14, 14, 
'<div class="box1">\n\
  10px padding on top and bottom.\n\
</div>\n\
\n\
<div class="box2">\n\
  20px padding to the left.\n\
</div>',
'div {\n\
  background-color: #ccf;\n\
  border: 1px solid #55f;\n\
  margin: 5px;\n\
}\n\
\n\
.box1 {\n\
  padding-top: 10px;\n\
  padding-bottom: 10px;\n\
}\n\
\n\
.box2 {\n\
  padding-left: 20px;\n\
}', 1)); ?>
            <p>You've probably noticed that margin and padding are very similar.
            The only difference is that margin represents the space around an
            element, while padding represents the space inside an element.</p>
            
            <p>Click "next page" to continue.</p>
        </div>
        
        <div class="page" id="page-5">
            <h2>Odds and ends</h2>
            <p>The <span class="code">width</span>, <span class="code">height</span>,
            <span class="code">border</span>, <span class="code">margin</span>, and
            <span class="code">padding</span> are all properties that affect
            what's called the <span class="term">box model</span>. So far, we've
            only seen these properties be applied to <span class="code">div</span>s.
            However, we can also apply them to most other HTML elements.</p>
            
            <p>Try putting a 1-pixel red border around the word "most" in the
            sentence below. Also, put in a 3px padding.</p>
            
            <?php echo makeWhiteboard('box-model_odds-ends-elems',
                true, true, 4, 4, 
'You can apply borders, padding, and margin to <strong> most</strong> tags in HTML!',
'strong {\n\
  \n\
  \n\
}', 1); ?>

            <?php echo makeSolution(makeWhiteboard('box-model_odds-ends-elems-sol',
                false, true, 4, 4, 
'You can apply borders, padding, and margin to <strong> most</strong> tags in HTML!',
'strong {\n\
  border: 1px solid red;\n\
  padding: 3px;\n\
}', 1)); ?>

            <p>Once we start doing layout with CSS, it will often be helpful to
            know the exact dimensions of our elements. One thing that can get
            confusing is that the <span class="code term">height</span> and
            <span class="code term">width</span> properties that you give it
            don't count the padding, border, or margin size. Instead, those
            are all "outside" of the height and width you give it.</p>
            
            <p>For example, below we have a box of width 200px, with a 2px
            border, 4px padding, and 3px left margin. Then the total width of the
            box will be 200px + 2px + 2px + 4px + 4px + 3px = 215px (since
            there are borders and padding on both sides, we add them twice). You can see
            that the two boxes align on the right.</p>
            
            <?php echo makeWhiteboard('box-model_odds-ends-width',
                true, true, 15, 15, 
'<div id="box1">\n\
  200px width + other stuff\n\
</div>\n\
\n\
<div id="box2">\n\
  215px width\n\
</div>',
'div {\n\
  background-color: #ccc;\n\
  margin-bottom: 10px;\n\
}\n\
\n\
#box1 {\n\
  width: 200px;\n\
  border: 2px solid black;\n\
  padding: 4px;\n\
  margin-left: 3px;\n\
}\n\
\n\
#box2 {\n\
  width: 215px;\n\
}', 1); ?>
            
            <h3>Exercise</h3>
            <p>Can you find the width that the second box should be to make it
            align with the first box on the right? Set it as the width of
            <span class="code">box2</span></p>
            <?php echo makeWhiteboard('box-model_odds-ends-width-ex',
                true, true, 15, 15, 
'<div id="box1">\n\
  200px width + other stuff\n\
</div>\n\
\n\
<div id="box2">\n\
  What\\\'s my width?\n\
</div>',
'div {\n\
  background-color: #A4EDA4;\n\
  margin-bottom: 10px;\n\
}\n\
\n\
#box1 {\n\
  width: 200px;\n\
  border: 5px solid #366336;\n\
  padding: 2px;\n\
  margin-left: 10px;\n\
}\n\
\n\
#box2 {\n\
  \n\
}', 1); ?>

            <?php echo makeSolution('224px'); ?>
            
            <h3>Tutorial survey</h3>
            <p>You can help us improve our tutorials by answering one question for us:</p>
            <iframe src="https://spreadsheets0.google.com/embeddedform?formkey=dGNwWk1NdG9GSEdkWng2UDZHVWlMSGc6MA" width="760" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
        
        <div class="page" id="page-6">
            <h2>Review exercise</h2>
            <p>You can put whiteboards inside solution boxes, as well.</p>
            <?php echo makeSolution(makeWhiteboard('template-5-demo-sol',
                false, true, 4, 4,
'Hello world!<br />\n\
I\\\'ve got a problem: apostrophes are <strong>hard</strong> to add in.\n\
So are backslashes (\\\).',
'strong {\n\
  color: red;\n\
}', 0)); ?>
            
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>