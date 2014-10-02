<div class="container'">
    <h2>xkcd Password Generator</h2>

    <p>Current password</p>

    <p>Password is:</p>

    <p>Generate new password</p>

    <form method="POST" action="index.php">

        <!-- <label name="">Number of words?</label>
        <input type="text" id="wcount2" value="wcount2" /><br/> -->
        <div class="field">
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
            </select>
        </div>

        <label name="ncount">Include a number?</label>
        <input type="checkbox" name="ncount" value='ncount' /><br/> 
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
        <input type="checkbox" name="scount" value="scount" /><br/> 
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
        <input type="checkbox" name="uppercase" value="uppercase" <?php echo ($uppercase) ? 'checked="checked"' : '' ; ?> /><br/>


        <input type="submit" name="submit" value="submit" />


    </form>

</div>