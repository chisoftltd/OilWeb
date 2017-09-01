<!DOCTYPE html>
<!--
Header information when user is signed on or logged in, with company logo
-->
<header>
    <div id="logo">
        <a href="/index.php" style="top: 10px"><img src="/images/OilWebLogo.png" alt="Company logo"/></a>
    </div>
    <!--<nav>
        <ul class="header-links">
            <li><a href="/index.php">Home</a></li>
            <li><a href="/menu/about.php">About Us</a></li>
            <li><a href="/menu/courses.php">Courses</a></li>
            <li><a href="/menu/assessment.php">Test Yourself</a></li>
            <li><a href="/menu/submission.php">Submission</a></li>
            <li><a href="/menu/contact.php">Contact Us</a></li>
            <li><a href="/menu/help.php">Help</a></li>
            <li><a href="/menu/login.php">LogOut</a></li>
            <li><a href="/menu/register.php">Register</a></li>
        </ul>
    </nav>-->
    <div style="float: right; margin-top: inherit"><p>For other languages:</p>

        <div id="other languages"></div>

        <script type="text/javascript">
            function otherlanguages() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                }, 'other languages');
            }
        </script>

        <script type="text/javascript"
                src="//translate.google.com/translate_a/element.js?cb=otherlanguages"></script>
    </div>
</header>