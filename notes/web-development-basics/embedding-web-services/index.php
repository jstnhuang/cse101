<?php
$title = 'Embedding web services';
$pagePath = '/tutorials/embedding-code from web services';
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
        loadTutorial(7);
    });
    --></script>

    <?php echo makeAnalytics(); ?>
</head>
<body>

<?php echo makeHeader(null, $pagePath); ?>

<?php
$pages = array(
    'Embedding web services',
    'Google Maps',
    'Google Calendar',
    'Google Forms',
    'reCAPTCHA Mailhide',
    'Youtube videos',
    'Further reading',
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
        
            <h2>Embedding web services</h2>
            <p>Over all the previous tutorials, we've shown you how to design and
			layout a website. Now that we're at the last tutorial, you may be
			wondering how you can do stuff like collecting signups or creating user
			accounts. Unfortunately, some of those topics are more advanced, and
			beyond the scope of these tutorials.</p>
            <p>However, in this tutorial, we'll show you how to add stuff like maps, 
			calendars, and videos using already existing web services. This is
			meant to be a fun and easy tutorial--most of the code is just copying
			and pasting.</p>
            <h3>Getting started</h3>
            <p>Download the <a href="files/tutorial8.zip">Tutorial 8 files</a>.
			Unzip them so that you see the "Tutorial 8" folder.</p>
        </div>
        <div class="page" id="page-2">
            <h2>Google Maps</h2>
            <p>If you're making the website for an event or business, often you'll
			want to include a map to show where it's located. However, you can do
			better than just a standard driving map. With map services like Google
			Maps, Bing Maps, or Yahoo! Maps, you can also get driving directions from 
			any starting location, get public transit and walking directions, and 
			even see a street-side view!</p>
            <p>Let's do an example. Suppose you want to explain how to the San Diego
			Supercomputer Center from the Costa Verde apartments (a popular off-campus
			housing location for many UCSD students):</p>
            <ol>
				<li><p>Open up <a href="http://maps.google.com" target="_new">
                    Google Maps</a></p></li>
				<li><p>Copy "10100 John J Hopkins Dr, San Diego, CA" into the 
				search box, and hit Enter. (This is the address of the San Diego
				Supercomputer Center.)</p></li>
				<li><p>Under the address, click "Directions".</p></li>
				<li><p>SDSC is now the "B" location. Set the "A" location to be the
				Costa Verde apartments using this address: "Nobel Dr &amp; Regents Rd, San 
				Diego, CA", and click on "Get Directions"</p></li>
				<li><p>Click "Link" in the upper right hand corner of the map:</p>
				<img class="screenshot" src="images/8-maps-1.jpg" width="504" height="295" alt="Link in Google Maps" title="Link in Google Maps"></li>
				<li><p>Click the text below "Paste HTML to embed in website," and hit
				Ctrl+C to copy it.</p></li>
				<li><p>In the "Tutorial 8" folder, open up sdsc.html and paste the map
				code in. Your final result should look like this:</p>
				<img class="screenshot" src="images/8-maps-2.jpg" width="607" height="252" alt="Embedded Google Map" title="Embedded Google Map"></li>
				<li><p>Here's a cool thing you can do: drag the yellow stick figure onto
				the map right above the "B," like so:</p>
				<img class="screenshot" src="images/8-maps-3.jpg" width="387" height="275" alt="Google Street View" title="Google Street View">
				<p>Now follow the same steps above to copy in map to sdsc.html. Your
				result should look like this:</p>
				<img class="screenshot" src="images/8-maps-4.jpg" width="155" height="307" alt="SDSC maps" title="SDSC maps">
				</li>
			</ol>
        </div>
        <div class="page" id="page-3">
            <h2>Google Calendar</h2>
            <p>These next two sections will require you to have a <a href="https://www.google.com/accounts">Google Account</a>, which you get
			when you sign up for one of their services, like <a href="http://gmail.com">GMail</a>. If you don't have an account and don't
			want to make one, feel free to skip the next two sections.</p>
            <p>Now, we will show you how to use Google Calendar to manage events and
			display them on your webpage:</p>
            <ol>
				<li><p>Log into <a href="http://google.com/calendar">
				Google Calendar</a>.</p></li>
				<li><p>Create an event by clicking on "Create Event" at the upper 
				left.</p>
				<img class="screenshot" src="images/8-cal-1.jpg" width="502" height="296" alt="Create event" title="Create event">
				</li>
				<li><p>Enter some event information, and click "Save" at the bottom
				when you're done.</p></li>
				<li><p>Click on arrow next to your calendar, under "My Calendars." Then,
				click on "Calendar Settings"</p>
				<img class="screenshot" src="images/8-cal-2.jpg" width="587" height="409" alt="Calendar settings" title="Calendar settings"></li>
				<li><p>Scroll down until you see the section entitled, "Embed This 
				Calendar." You can copy the code you see there into calendar.html.
				Or, if you don't have an account, you can simply uncomment the calendar
				given there (which is for Build Your Own Website workshops).</p>
				<p>Your final result should look something like this:</p>
				<img class="screenshot" src="images/8-cal-3.jpg" width="348" height="287" alt="Google Calendar" title="Google Calendar">
				</li>
			</ol>
            <p>Note that you can switch between "Week," "Month," and "Agenda" views.
			You can also customize the appearance of the calendar by clicking on 
			"Customize the color, size, and other options" above where it gives you
			the code to copy and paste.</p>
        </div>
        <div class="page" id="page-4">
            <h2>Google Forms</h2>
            <p>Probably one of the most common things you'll want to do with your
			website is to collect some kind of form information. For example, you
			might want to conduct a survey, or gather sign-ups for a team. You can
			do this easily using another Google service called Docs. Let's try that
			now:</p>
            <ol>
				<li><p>Log into <a href="http://docs.google.com">Google Docs</a>.</p>
				</li>
				<li><p>In the upper left hand corner, click on "Create new," and then
				select "Form":</p>
				<img class="screenshot" src="images/8-forms-1.jpg" width="303" height="299" alt="Create new form" title="Create new form">
				</li>
				<li><p>You can now create a form with many different types of questions.
				Experiment around with what you can do!</p>
				<img class="screenshot" src="images/8-forms-2.jpg" width="424" height="321" alt="Example form" title="Example form">
				</li>
				<li><p>When you've added in everything you want, click "More Actions" at
				the top right, and click "Embed" to get the HTML code for the form.</p>
				<img class="screenshot" src="images/8-forms-3.jpg" width="600" height="118" alt="Summary of responses" title="Summary of responses">
				</li>
				<li><p>Open up form.html, and copy in the form code. If you don't have
				a Google account, you can just uncomment the form that's already
				there (the Build Your Own Website participant survey, which you should
				fill out when you're done!).</p></li>
				<li><p>Whenever someone fills out your form and hits "Submit," it'll
				appear as a spreadsheet in your Google Docs account. You can save
				the spreadsheet as a Microsoft Excel file, or view a summary of
				responses directly in the browser:</p>
				<img class="screenshot" src="images/8-forms-4.jpg" width="606" height="241" alt="Summary of responses" title="Summary of responses">
				</li>
			</ol>
        </div>
        <div class="page" id="page-5">
            <h2>reCAPTCHA Mailhide</h2>
            <p>In <a href="../html-basics/#page-6">HTML basics</a>, we 
			showed how to link to email addresses. However, one problem that arises
			when we do this is that spammers can use spiders that search the internet
			for email addresses to spam. One way we can protect our emails is to use
			reCAPTCHA Mailhide. What Mailhide does is that it requires you to
			type in the words you see in the picture in order to see the email
			address.</p>
            <p>You've seen this before on countless other websites. It's what's known
			as a <a href="http://en.wikipedia.org/wiki/Captcha">"CAPTCHA"</a>.
			What makes reCAPTCHA different from other CAPTCHAs is that a reCAPTCHA
			isn't just to stop spammers. The pictures of the words come from books
			that are being scanned. Normally, computers can read scanned text when
			it's clearly presented. But, when the computers run across a word they
			can't recognize, it's used in the reCAPTCHA for you to identify. So,
			every time you type in a word, you're helping to bring books into the
			digital future!</p>
            <p>Open up mailhide.html. It looks like George Bluefin has presented his
			email address completely unprotected. Let's fix this:</p>
            <ol>
				<li><p>Go to the <a href="http://mailhide.recaptcha.net/">Mailhide 
				website</a>, and enter "gbluefin@ucsd.edu" as the email to protect. Then
				click "Protect It!"</p></li>
				<li><p>Copy in all the code under "HTML Code," and paste it into
				mailhide.html where George's email is. Your result should look like:</p>
				<img class="screenshot" src="images/8-mailhide-1.jpg" width="700" height="206" alt="reCAPTCHA Mailhide" title="reCAPTCHA Mailhide">
				</li>
			</ol>
        </div>
        <div class="page" id="page-6">
            <h2>Youtube videos</h2>
            <p>Finally, we'll explore an easy way to put videos on your website. In
			the near future, just as there's an <span class="code">&lt;img&gt;</span>
			tag, there will be a <span class="code">&lt;video&gt;</span> tag.
			However, that's not totally official and standardized at this point in
			time, so we'll just show you how to add videos from <a href="http://youtube.com">Youtube</a> instead. Here's how:</p>
            <ol>
				<li><p>Go to the Youtube video that talks about <a href="http://www.youtube.com/watch?v=ldsRZcMxk2k">UCSD's E-Games</a>.
				</p></li>
				<li><p>Click on "Embed," under the video description. You can customize
				the size and color of the video as it'll appear on your page.</p>
				<img class="screenshot" src="images/8-youtube-1.jpg" width="626" height="300" alt="Youtube embed" title="Youtube embed">
				</li>
				<li><p>Open up video.html, and paste in the code you copied. You should
				get something that looks like this:</p>
				<img class="screenshot" src="images/8-youtube-2.jpg" width="380" height="300" alt="Youtube embed" title="Youtube embed">
				</li>
			</ol>
            <p>In general, you should look for embed links everywhere. You can find
			them on other mapping websites or other video websites, for example. You
			can find code to copy to put in countdowns, logos, or "Share this page"
			links for sites like Facebook and Myspace. With all these web services,
			you can add a lot of usefulness to your website, without having to learn
			the advanced programming that professionals put into making them!</p>
        </div>
        <div class="page" id="page-7">
            <h2>Further reading</h2>
            <p>With that, we've come to the end of our HTML tutorials. We also have <a href="..">more tutorials</a> on CSS and other miscellaneous topics on our site. If you liked these
			tutorials and would like to learn more about web development, there are
			tons of resources out there that can help you!</p>
            <p>One of the best web resources out there is <a href="http://w3schools.com">W3Schools</a>. It has tutorials for HTML, 
			CSS, JavaScript, and more. It also has "sandboxes" so that you can try
			code out and see instantly what the result would be.</p>
            <p>If you're looking for a book, you might want to consider <a href="http://www.amazon.com/HTML-XHTML-Definitive-Guide-6th/dp/0596527322/ref=sr_1_1?ie=UTF8&amp;s=books&amp;qid=1262049412&amp;sr=8-1">HTML &amp; XHTML: The Definitive Guide (6th Edition)</a>, by Chuck Musciano and Bill Kennedy.</p>
            <p>If you're wondering what topics to study other than just HTML and
			CSS, you'll definitely want to look at:</p>
            <ol>
				<li>Javascript</li>
				<li>HTML DOM</li>
				<li>AJAX</li>
				<li>jQuery</li>
				<li>PHP</li>
				<li>SQL</li>
			</ol>
            <p>Learning these skills, and, importantly, getting lots of practice
			building websites will put you on the road to being a true, professional
			web developer!</p>
            
            <h3>Survey</h3>
            <p>Please take the time to fill out our 
			survey, so that we know how we
			did. We'll use these results to improve our tutorials in the future.
			Thanks for reading and learning with us!</p>
            <iframe src="https://spreadsheets.google.com/spreadsheet/embeddedform?formkey=dDhnektMeXAwVDdrdUt3eVU4UklYZEE6MA" width="760" height="623" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
            
        </div>
    </div>
</div>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/php/footer.php');
?>

</body>
</html>