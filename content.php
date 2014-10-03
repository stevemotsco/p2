<div class="container'">

    <form method="POST" action="index.php">

    <h1>xkcd Password Generator</h1>

    <div class="wbdr">
        <p><a href="http://xkcd.com" target="_blank">xkcd </a> is "A webcomic of Romance, Sarcasm, Math, and Language" that popularized the idea that a set of random words makes for a much more secure password than a string of random letters (upper/lower case), numbers, and symbols.  Use this password generator to create a <a href="http://xkcd.com/936/" target="_blank">xkcd type password.</a></p>
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

        <!-- get number of words user wants in password -->
        <label for="wcount">Number of Words?</label>
        <select id="wcount" name="wcount" >
            <option <?php echo ($wcount) == 2 ? 'selected="selected"' : ''; ?> value="2">2</option>
            <option <?php echo ($wcount) == 3 ? 'selected="selected"' : ''; ?> value="3">3</option>
            <option <?php echo ($wcount) == 4 ? 'selected="selected"' : ''; ?> value="4">4</option>
            <option <?php echo ($wcount) == 5 ? 'selected="selected"' : ''; ?> value="5">5</option>
            <option <?php echo ($wcount) == 6 ? 'selected="selected"' : ''; ?> value="6">6</option>
            <option <?php echo ($wcount) == 7 ? 'selected="selected"' : ''; ?> value="7">7</option>
            <option <?php echo ($wcount) == 8 ? 'selected="selected"' : ''; ?> value="8">8</option>
            <option <?php echo ($wcount) == 9 ? 'selected="selected"' : ''; ?> value="9">9</option>
        </select><br/>
    
        <!-- get number of numbers user wants in password -->
        <label for='ncount'>Include Numbers?</label>
        <select id='ncount' name='ncount'>
            <option <?php echo ($ncount) == 0 ? 'selected="selected"' : ''; ?> value="0">0</option>
            <option <?php echo ($ncount) == 1 ? 'selected="selected"' : ''; ?> value='1'>1</option>
            <option <?php echo ($ncount) == 2 ? 'selected="selected"' : ''; ?> value='2'>2</option>
            <option <?php echo ($ncount) == 3 ? 'selected="selected"' : ''; ?> value='3'>3</option>
            <option <?php echo ($ncount) == 4 ? 'selected="selected"' : ''; ?> value='4'>4</option>
            <option <?php echo ($ncount) == 5 ? 'selected="selected"' : ''; ?> value='5'>5</option>
            <option <?php echo ($ncount) == 6 ? 'selected="selected"' : ''; ?> value='6'>6</option>
            <option <?php echo ($ncount) == 7 ? 'selected="selected"' : ''; ?> value='7'>7</option>
            <option <?php echo ($ncount) == 8 ? 'selected="selected"' : ''; ?> value='8'>8</option>
            <option <?php echo ($ncount) == 9 ? 'selected="selected"' : ''; ?> value='9'>9</option>
        </select><br/>

        <!-- get number of symbols user wants in password -->
        <label for='scount'>Include Special Symbols?</label>
        <select id='scount' name='scount'>
            <option <?php echo ($scount) == 0 ? 'selected="selected"' : ''; ?> value="0">0</option>
            <option <?php echo ($scount) == 1 ? 'selected="selected"' : ''; ?> value='1'>1</option>
            <option <?php echo ($scount) == 2 ? 'selected="selected"' : ''; ?> value='2'>2</option>
            <option <?php echo ($scount) == 3 ? 'selected="selected"' : ''; ?> value='3'>3</option>
            <option <?php echo ($scount) == 4 ? 'selected="selected"' : ''; ?> value='4'>4</option>
            <option <?php echo ($scount) == 5 ? 'selected="selected"' : ''; ?> value='5'>5</option>
            <option <?php echo ($scount) == 6 ? 'selected="selected"' : ''; ?> value='6'>6</option>
            <option <?php echo ($scount) == 7 ? 'selected="selected"' : ''; ?> value='7'>7</option>
            <option <?php echo ($scount) == 8 ? 'selected="selected"' : ''; ?> value='8'>8</option>
            <option <?php echo ($scount) == 9 ? 'selected="selected"' : ''; ?> value='9'>9</option>
        </select><br/>
 
        <label name="uppercase">Uppercase first letter of each word?</label>
        <input type="checkbox" name="uppercase" value="uppercase" <?php echo ($uppercase) ? "checked='checked'" : "" ; ?> /><br/><br/>

        <input type="submit" name="submit" value="Generate Password" />
    </div>

    </form>

</div>