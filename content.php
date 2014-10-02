<div class="container'">

    <form method="POST" action="index.php">

    <h1>xkcd Password Generator</h1>

    <div class="wbdr">
        <p><a href="http://xkcd.com" target="_blank">XKCD </a> is "A webcomic of Romance, Sarcasm, Math, and Language" that popularized the idea that a set of random words makes for a much more secure password than a string of random letters (upper/lower case), numbers, and symbols.  Use this password generator to create a <a href="http://xkcd.com/936/" target="_blank">xkcd type password.</a></p>
        <a href="http://xkcd.com/936/" target="_blank">
            <img class="comic" src="http://imgs.xkcd.com/comics/password_strength.png" >
        </a>
    </div>

    <div class="wbdr">
        <h3>New Password</h3>  
        <h2><?php echo ($npwd) ? $npwd : "" ; ?></h2>  
    </div>

    <div class="wbdr">
        <h4>Generate new password</h4>

        <!-- <label name="">Number of words?</label>
        <input type="text" id="wcount2" value="wcount2" /><br/> 
        <div class="field">-->
        <label for="wcount">Number of Words?</label>
        <select id="wcount" name="wcount">
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4" selected="selected">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>

        </select><br/>
        <!-- </div>-->

        <label name="ncount">Include a number?</label>
        <input type="checkbox" name="ncount" value="ncount" <?php echo ($ncount) ? "checked='checked'" : "" ; ?> /><br/> 
        <!-- <div class='field'>
            <label for='ncount'>Include Numbers?</label>
            <select id='ncount' name='ncount'>
                <option value='0' selected='selected' >0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
            </select>
        </div>-->

        <label name="scount">Include a special symbol?</label>
        <input type="checkbox" name="scount" value="scount" <?php echo ($scount) ? "checked='checked'" : "" ; ?> /><br/>
        <!-- <div class='field'>
            <label for='scount'>Include Special Symbols?</label>
            <select id='scount' name='scount'>
                <option value='0' selected='selected' >0</option>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
            </select>
        </div>-->

        <label name="uppercase">Uppercase first letter of each word?</label>
        <input type="checkbox" name="uppercase" value="uppercase" <?php echo ($uppercase) ? "checked='checked'" : "" ; ?> /><br/><br/>

        <input type="submit" name="submit" value="Generate Password" />
    </div>

    </form>

</div>