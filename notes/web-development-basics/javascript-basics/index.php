

<?php
$title = 'Javascript tutorial';
$pagePath = '/tutorials/javascript-basics';

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
        loadTutorial(9);
    });
    --></script>
    <?php echo makeAnalytics(); ?>
    
    <!-- SyntaxHighlighter code starts -->
    <link rel="stylesheet" type="text/css" href="/css/shCore.css" />
    <link rel="stylesheet" type="text/css" href="/css/shThemeDefault.css" />
    
    <script src="/js/shCore.js"></script>
    <script src="/js/shBrushJScript.js"></script>
    <!-- SyntaxHighlighter code ends -->
</head>
<body>
    
<?php echo makeHeader(null, $pagePath); ?>    

<?php
$pages = array(
    'Introduction',
    'Variables and Data Types',
    'Objects',
    'Operators',
    'Conditionals',
    'Functions and Methods',
    'Taking Input',
    'Looping',
    'Putting It Together: Password-Protecting a Page'
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
            <h2>Introduction</h2>
            <p>
                Javascript is a <span class="term">scripting language</span> designed to allow people to interact 
                with web pages in interesting ways. It's interpreted directly by your browser, so you don't need 
                any special software to get started. 
            </p>
            <p>
                Before we get to looking at the details, we need to get a few things out of the way.
                Including a Javascript file in a webpage is pretty easy&#151;just add a line that looks like this 
                to your the <code>head</code> tag of your HTML document:
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
&lt;!-- The extension for a Javascript is .js --&gt;
&lt;script src="myJsFile.js"&gt;&lt;/script&gt;
                </pre>
            </div>
            
            <p>
                The next thing to note is that, like HTML and css, Javascript ignores whitespace between valid 
                statements. To leave a comment in your code, use one of the following formats:
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
/* A mult-line comment looks like this. Everything between the slash-star and 
   star-slash is ignored. */

// A line comment looks like this.
// Everything between the // and the end of the line is ignored.
                </pre>
            </div>
            
            <p>
                We'll be using a construct called <code>alert</code> to see the values we're working with. It's 
                actually a <span class="term">function</span>, but for now 
                all you need to know is that whatever you put between the parentheses will be shown to you in a 
                dialog box.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
alert('Sample');    // Shows a dialog box with text: Sample
                </pre>
            </div>
        
        <p>
            That's all we need to get started. If you want to follow along, download and unzip our <a href="/downloads/js-tutorial.zip">project files</a>. Otherwise, let's take a look at some code.
        </p>
        </div>
        <div class="page" id="page-2">
            <h2>Variables and Data Types</h2>
            <p>
                Just like in algebra, a Javascript <span class="term">variable</span> binds a value to a name by which 
                it can be accessed. Why do we want that? Because expressions that only work 
                on constants are boring, and because we'll often need to work with values 
                that we don't know ahead of time&#151;things like user input, results of 
                calculations, and so on.
            </p>
            <p>
                To define a variable, write a line like the following:
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var some_name = something;
                </pre>
            </div>
            
            <p>
                ...where <code>some_name</code> is the variable's name and <code>something</code> is its value. Values can
                be of any type covered below and names must start with a letter, <code>_</code>, or <code>$</code> and 
                contain only letters, numbers, and <code>_</code>. They're case-sensitive too, so a <code>Poodle</code> is not a 
                <code>poodle</code> is not a <code>POODLE</code>.
            </p>
            <p>
                The <span class="code term">var</span> keyword just tells Javascript that you're declaring a variable. If 
                you want to declare more than one, you can connect your declarations with 
                commas:
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var age = 21, year = 2011;
                </pre>
            </div>
            
            <p>
                Now let's define some.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var location = "CSE Basement",
    room = 270,
    workshop = 'Cooking with George Bluefin',
    optimalTemperature = 350.00,
    isGeorgeATuna = true,
    
    // And some more examples. We'll declare these but won't give them values.
    
    $dollars,
    o_0,
    one23,
    __;
                </pre>
            </div>
            
            <p>
                Note that some values look different than others; that's because they have 
                diffent types. <code>"CSE Basement"</code> is surrounded by double quotes because it's
                a string of characters (called a <span class="code term">String</span>), <code>room</code> is a <span class="code term">Number</span>, <code>workshop</code> is also 
                a <span class="code term">String</span> (but in single quotes), <code>optimalTemperature</code> is a floating-point 
                number (still a <span class="code term">Number</span>), and <code>isGeorgeATuna</code> is a <span class="code term">Boolean</span>&#151;a value which can 
                either be <code>true</code> or <code>false</code>.
            </p>
            <p>
                There's also a structure called an <span class="term">array</span>, a single variable which contains 
                a list of values instead of just one. An array's type is actually <code>Object</code>, 
                but we'll get into what that means later.
            </p>
            <p>
                Arrays are declared as follows:
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var some_name = [value1, value2, value3, ... , valueN];
                </pre>
            </div>
            
            <p>
                The values can be any combination of types you want, so feel free to mix and 
                match. Let's take a look at some examples:
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var aFewTypes    = ['String', 'Number', 'Boolean', 'Object'],
    typeExamples = ['123',     123,      false,    aFewTypes],
    emptyArray   = [];
                </pre>
            </div>
            
            <p>
                To access or update the Nth element of an array, use the bracket notation shown below. 
                Note that in computer science it's traditional to start counting from 0, not 
                1, so the Nth element will actually be found at index N - 1.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var typeOf123   = aFewTypes[0], // 'String', the 1st (zero-th) element of aFewTypes
    typeOfFalse = aFewTypes[2]; // false, the 3rd element of aFewTypes
    
typeExamples[2] = true;         // Sets the third element to true    
typeExamples[0] = 'abc';        // Now typeExamples is ['abc', 123, true, aFewTypes]
emptyArray[0] = 'Not empty!';   // Adds an element to emptyArray
emptyArray[1] = 'Full!';        // emptyArray is ['Not empty!', 'Full!']
                </pre>
            </div>
            
        </div>
        <div class="page" id="page-3">
            <h2>Objects</h2>
            <p>
                Javascript is sometimes called an <span class="term">object-oriented</span> language, which means that 
                many of its features are designed around the concept of <span class="term">objects</span>. So what 
                are objects? They're Javascript's way of describing a piece of code in terms of things we're used to 
                seeing in everyday life: literally, objects we interact with. Like objects in the outside world, 
                objects in Javascript are defined by their <span class="term">properties</span> (things that are 
                true about them) and their behaviors&#151things they can do. In Javascript, as in most other object-
                oriented languages, these behaviors are called <span class="term">methods</span>.
            </p>
            <p>
                Writing code in terms of objects helps us organize it into logical pieces and think about problems 
                in a more intuitive way. For example, the <code>array</code> object we saw earlier has a property 
                which stores the number of elements it contains. Instead of having to know how the array stores its 
                elements and counting them up every time, we simply access its <code>length</code> property as 
                <code>array_name.length</code> whenever it's needed and trust that the array object can keep track 
                of its own size.
            </p>
            <p>
                In general, properties are <span class="term">accessed</span> as <code>object_name.property_name</code> 
                and methods are <span class="term">called</span> as <code>object_name.method_name()</code>. We'll be 
                using both in our wrap-up project, so let's take a look at some examples.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var ingredients = ['Salt', 'Pepper'],
    howMany = ingredients.length;
    
alert(ingredients.length);                   // Shows 2
ingredients[ingredients.length] = 'Tuna';   // Clever way to add to an array.
alert(ingredients.length);                   // Shows 3
alert(howMany);                              // Shows 2

alert(document.location)                     // Shows the current URL
                </pre>
            </div>
            
            <p>
                The <code>document</code> object represents the current HTML page and contains many of the other 
                objects we'll be working with. It may not be obvious yet, but almost everything you do in Javascript 
                will involve objects (and the document object) in some way.
            </p>
        </div>
        <div class="page" id="page-4">
            <h2>Operators</h2>
            <p>
                We've just seen how Javascript describes pieces of data; now we'll see how we
                can work with them and why we need all those different types.
            </p>
            <p>
                Operators take one, two, or three operands, perform some operation with them,
                and return the result to the code which used them. Their effects are pretty
                self-explanatory, so we'll just give you a listing:
            </p>
            
<table width="100%" style="border:2px solid #ccc; margin-bottom:10px;">
    <tr>
    <th align="left">Operator</th><th align="left">Usage</th><th align="left">Effect</th>
    </tr>
    <tr>
        <td colspan="3">Mathematical</td>
    </tr>
    <tr>
        <td>+</td>
        <td>a + b</td>
        <td>If a and b are numbers, adds a and  b;<br />
            If a or b is a string, treats a AND b as strings 
            and appends b to a</td>
    <tr>
        <td>-</td>
        <td>a - b</td>
        <td>Subtracts b from a</td>
    </tr>
    <tr>
        <td>*</td>
        <td>a * b</td>
        <td>Multiplies a and b</td>
    </tr>
    <tr>
        <td>/</td>
        <td>a / b</td>
        <td>ivides a by b. If b is zero, disaster strikes.</td>
    </tr>
    <tr>
        <td colspan="3">Assignment</td>
    </tr>
    <tr>
        <td>=</td>
        <td>e = v</td>
        <td>Evaluates the expression v and assigns it to e</td>
    </tr>
    <tr>
        <td colspan="3">Comparison</td>
    </tr>
    <tr>
        <td>===</td>
        <td>a === b</td>
        <td>Evaluates to true if a is equal to b, false if not</td>
    </tr>
    <tr>
        <td>!==</td>
        <td>a !== b</td>
        <td>Evaluates to false if a is equal to b, true if not</td>
    </tr>
    <tr>
        <td>></td>
        <td>a > b</td>
        <td>True if a is greater than b</td>
    </tr>
    <tr>
        <td>>=</td>
        <td>a >=b</td>
        <td>True if a is greater than or equal to b</td>
    </tr>
    <tr>
        <td><</td>
        <td>a < b</td>
        <td>True if a is less than b</td>
    </tr>
    <tr>
        <td><=</td>
        <td>a <= b</td>
        <td>True if a is less than or equal to b</td>
    </tr>
</table>

            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var a  = 123,
    t  = 2,
    f  = 4,
    s  = 6,
    z  = 0,
    
    sum, 
    product, 
    difference, 
    quotient, 
    equal,
    uhoh;
    
sum        =    t + f + z;     // 6
product    =    f * z;         // 0
difference =    t - f;         // -2
quotient   =    f / t;         // 2
uhoh       =    a + f;         // 123 + "4" = "1234"

/**
 * Parentheses are used to change the order of operations. They aren't necessary
 * here, but they make it more obvious what's happening.
 */
equal      = (t + f) == 6;              // true

/**
 * It's ok to change the value of a variable.
 *
 * (2 !== 4) is true, 
 * (4 > 2) is true, and 
 * (true === true) is true
 */
equal      = (t !== f) === (f > t);     // true
                </pre>
            </div>
            
        </div>
        <div class="page" id="page-5">
            <h2>Conditionals</h2>
            <p>
                <span class="term">Conditional</span> statements are the bread and butter of programming&#151;without them we couldn't write 
                code that reacts to user input or changing conditions, and they're the reason we have all those 
                Boolean operators covered in the last section. In english, a conditional says: "If this condition is 
                true, do the following; otherwise, do something else." The equivalent Javascript, shown below, is 
                pretty straight-forward:
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
/**
 * General form:
 *
 * if (this_condition_is_true) {
 *     // Execute the statements between the curly braces
 * }
 */
 
if (george.isTasty === true) {
    george.invitedToDinner = true;
}
                </pre>
            </div>
            
            <p>
                That's pretty useful, but sometimes we also want to do something specific if the condition 
                <em>isn't</em> true. The following code, for example, lets us avoid dividing by zero.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
// Assume a and b are both Numbers

var result;

if (b !== 0) {
    // Since the denominator isn't zero, divide normally
    result = a / b;
}
else {
    // The denominator is zero, so just say the result is zero instead of dividing
    result = 0;
}
                </pre>
            </div>
            
            <p>
                The code inside the <code>else</code> <span class="term">block</span> (the code inside the 
                curly braces after <code>else</code>) is only executed if <code>b !== 0</code> is <code>false</code>.
                To cover all the possibilities, <code>if</code> and <code>else</code> blocks can 
                contain other <code>if</code> and <code>else</code> blocks.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var ingredients = [];

if (george.isTasty === true) {
    // Make sure George is invited before putting him on the menu
    if (george.invited === false) {
        george.invited = true;
        sendInvitation(george);     // A function call, covered in the next section
    }
    
    ingredients[ingredients.length] = george;
}
else {
    george.invited = false;
}
                </pre>
            </div>
        </div>
        <div class="page" id="page-6">
            <h2>Functions and Methods</h2>
            <p>
                Nobody wants to write the same piece of code over and over again. Once it works in one place, we 
                should be able to pack it up and re-use it in another without having to copy and paste it every time.
                That's where <span class="term">functions</span> come in.
            </p>
            <p>
                A function is just a block of code, accessible by its name, which can accept values to work with and
                return a result to the code which called it. Imagine we have a script that needs to do a lot of 
                division, and to make sure the division is safe it needs to run the zero-denominator check we saw 
                in the previous section. Instead of pasting that <code>if</code> block everwhere we need to divide 
                two values, we can wrap it up in a function and call the function instead.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
function divide(a, b) {
    var result;
    
    if (b !== 0) {
        result = a / b;
    }
    else {
        result = 0;
    }
    
    return result;
}

var number    = divide(12, 3) + 1,  // 4 + 1
    blackhole = divide(12, 0);      // 0
                </pre>
            </div>
            
            <p>
                So what's going on above?
                <ul>
                    <li>
                        The <code>function</code> keyword tells Javascript that we're about to 
                        define a function.
                    </li>
                    <li>
                        The text immediately after <code>function</code> is the function's name, which follows 
                        the same naming rules as a variable.
                    </li>
                    <li>
                        The parentheses contain a comma-separated list of <span class="term">arguments</span> the 
                        function accepts. In this case, they're two values which will be available as variables 
                        named <code>a</code> and <code>b</code> inside the function body.
                    </li>
                    <li>
                        The code between the curly braces is the function's <span class="term">body</span>, the 
                        code which runs when the function is called. It can contain any valid Javascript&#151;even 
                        another function, but we won't worry about that now.
                    </li>
                    <li>
                        The value of the expression after the <code>return</code> statement will be the 
                        function's output. When we say the function returns a value, you can imagine that value 
                        replacing the function <span class="term">call</span>, <code>divide(12, 3)</code>, 
                        which created it.
                    </li>
                    <li>
                        A variable named <code>number</code> gets filled with the output of a 
                        <span class="term">call</span> to <code>divide</code> which <span class="term">passed</span>
                        the values <code>12</code> and <code>3</code>. In this case the output is <code>4</code>, so 
                        line 14 becomes <code>4 + 1</code> and <code>quotient</code> is assigned the value 
                        <code>5</code>.
                    </li>
                </ul>
            </p>
            <p>
                Don't get confused by the similarity between a function definition and a function call. The rule to 
                remember is: If it has curly braces, you're declaring a named function that takes parameters; if it
                doesn't, you're calling a function and passing it the values inside the parentheses.
            </p>
            <p>
                You can also create functions that don't take any parameters&#151;just leave the space between the 
                parentheses blank in both the definition and your calls.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
function getNice5() {
    // Always return 5
    return 5;
}

var high = getNice5();  // 5
                </pre>
            </div>
            
            <h3>Function Scope</h3>
            <p>
                Functions also have a feature called <span class="term">scope</span>, which means any variable 
                declared with <code>var</code> inside a function is visible only to the code inside that function. 
                Whenever a variable is accessed, Javascript first tries to find it in the scope of the function 
                using it, then in the next-smallest scope, and so on.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var tens = 10, hundreds = 100, thousands = 1000;
    
/**
 * As mentioned before, functions can contain other functions.
 */
function outer() {
    var tens = 20, hundreds = 200;

    function inner() {
        var tens = 30;
        
        // Inner: 30, 200, 1000
        alert('Inner: ' + tens + ', ' + hundreds + ', ' + thousands);
    }
    
    // Outer: 20, 200, 1000
    alert('Outer: ' + tens + ', ' + hundreds + ', ' + thousands);
    inner();
}

// Outside both: 10, 100, 1000
alert('Outside both: ' + tens + ', ' + hundreds + ', ' + thousands);
outer();
                </pre>
            </div>
            
            <h3>Methods</h3>
            <p>
                Methods and functions are almost the same thing; the only difference is that a method is explicitly tied 
                to some object while a function is not. The <code>replace</code> method of a <code>String</code>
                object, for example, knows the value of the string it's attached to and works specifically on that 
                value.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
/**
 * str.replace(replace_this, with_this) returns a copy of str with
 * every instance of replace_this replaced by with_this
 *
 * Passing the empty string "" as the second argument deletes
 * every occurrence of the first parameter.
 */
var title    = "Cooking with George Bluefin",
    actually = workshop.replace("with", "");
    
alert(actually);     // Shows "Cooking George Bluefin"
alert(title);        // Shows "Cooking with George Bluefin"
                </pre>
            </div>
        </div>
        
        <div class="page" id="page-7">
            <h2>Taking Input</h2>
            <p>
                Javascript has many different ways to get input from the user, but the one we'll use today 
                is a function called <code>prompt</code>. It looks like this:
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var name = prompt("What's your name?", "Anonymous");
                </pre>
            </div>
            
            <p>
                If you run that code in your browser, you should see a box pop up and ask you for your name. The 
                first argument we passed is the question the box asks and the second is the answer that's filled in 
                by default&#151;<code>Anonymous</code>, in case they don't feel like sharing.
            </p>
            <p>
                The function returns whatever the user typed as a string, so assigning the result of 
                <code>prompt</code> to a variable saves the input for us to use later.
        </div>
        
        <div class="page" id="page-8">
            <h2>Looping</h2>
            <p>
                Sometimes we'll want to execute a block of code repeatedly, either until some condition becomes 
                true or until we've run the block as many times as we needed to. For that, Javascript provides a 
                construct called a <span class="term">loop</span>.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
/**
 * General form:
 *
 * while (this_statement_is_true) {
 *     // Run the code in here
 * }
 */

// Only George is allowed past this prompt
var allowed = false;
while (allowed === false) {
    if (prompt("What's your name? Is it George?") == "George") {
        allowed = true;
    }
}
                </pre>
            </div>
            
            <p>
                Let's take a look at what's going on.
                <ul>
                    <li>
                        First, <code>allowed</code> is set to <code>false</code>. As you get more practice 
                        writing loops, it should become clear why we put the statements in this order.
                    </li>
                    <li>
                        Next, execution reaches the Boolean statement inside the parentheses. Since 
                        <code>allowed</code> is <code>false</code> the first time through, the statement evaluates 
                        to <code>true</code> and the loop's body is executed.
                    </li>
                    <li>
                        If the user types <code>George</code>, <code>allowed</code> will be set to 
                        <code>true</code>. If not, it stays false.
                    </li>
                    <li>
                        After all the statements in the loop's block have been executed, execution returns to the 
                        Boolean expression and checks it again. If it's still true, the loop body runs again; 
                        if not, the loop ends and we continue from the next statement after the body.
                    </li>
                </ul>
            </p>
            <p>
                Notice that since the loop doesn't end until the user types <code>George</code>, we're keeping 
                the script from doing anything else until it gets the right answer.
            </p>
            
            <h3>Loops and Arrays</h3>
            <p>
                One of the most common uses of loop constructs is iterating through the elements of 
                an array one by one. There are a lot of reasons we might want to do this, but let's say for the 
                sake of example that we'd like to count up the number of people named <code>George</code> on our 
                guest list. Here's one possible approach:
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
var guests  = ['George', 'George', 'George', 'Tuna Fan', 'Justin', 'Bulat'],
    loop    = 0,
    georges = 0;

while (loop < guests.length) {
    if (guests[loop] === 'George') {
        georges++;      // Shorthand for: georges = georges + 1
    }
    
    loop++;
}

                </pre>
            </div>
        </div>
        
        <div class="page" id="page-9">
            <h2>Putting It Together: Password-Protecting a Page</h2>
            <p>
                Now it's time to put all this to use. As an exercise, we're going to write a short script which 
                lets us password-protect a page on our website. In general Javascript shouldn't be used to do this, 
                partly because you can't store passwords in your code since anyone with a browser can look at it, 
                but the method we'll use is actually pretty secure&#151;we just can't say it's very practical.
            </p>
            <p>
                We'll introduce a couple of ideas in the code box below and drop a few more hints at the ends of 
                this page, but this exercise will be mostly between you, your browser, and whatever Google-fu you can 
                muster.
            </p>
            
            <div class="syntaxHighlight">
                <pre class="brush: js">
/**
 * Want to point the browser to a different page? 
 * Set document.location.href to the URL you want.
 */
document.location.href = 'http://google.com';   // Goes to google.com

/**
 * It's possible to execute a javascript function in response to an event.
 * This code will bring up a message when the link is clicked.
 */
<a href="#" onClick="alert('Clicked');return false;">Click me</a>
                </pre>
            </div>
            
            <p>
                <strong>Hint:</strong> You'll probably want to use prompts, <code>+</code> to join strings, and 
                avoid any logic that requires you to check against a stored password. If you want to limit the 
                number of tries they're allowed, try using a loop to make it fancy.
            </p>
        </div>
        
        <!--
        <div class="page" id="page-6">
            <h2>Page title 6</h2>
            <p><span class="code">Code span</span></p>
            <p><span class="term">Term span</span></p>
            <p><span class="code term">Code term span</span></p>
            
            <h3>Tutorial survey</h3>
            <p>You can help us improve our tutorials by answering one question for us:</p>
            <iframe src="https://spreadsheets.google.com/embeddedform?formkey=dEoyU3Y5d2ZySy0xcEJZT2ZnTzBTb2c6MA" width="760" height="600" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div>
        -->
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
    <script type="text/javascript">
        SyntaxHighlighter.all();
    </script>
</html>