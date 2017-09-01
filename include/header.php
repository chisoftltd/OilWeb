<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<header>
    <div>
        <div id="logo">
            <a href="/index.php"><img src="/images/OilWebLogo.png" alt="Company logo"/></a>
        </div>

        <form class="navbar-form navbar-right">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

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