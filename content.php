
<div class="container'">
    <p class="T2">xkcd Password Generator.</p>

    <p class="T3">Current password.</p>

    <p>Password is:</p>

    <p class="T3">Generate new password.</p>

    <form> method="POST" action="/index.php">

        <!-- <label name="">Number of words?</label>
        <input type="text" id="wcount2" value="wcount2" /><br/> -->
        <div class='field'>
            <label for='wcount'>Number of Words?</label>
            <select id='wcount' name='wcount'>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option selected='selected' value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                <option value='9'>9</option>
            </select>
        </div>

        <!-- <label name="">Include a number?</label>
        <input type="checkbox" id="number" value="number" /><br/> -->
        <div class='field'>
            <label for='ncount'>Include Numbers?</label>
            <select id='ncount' name='ncount'>
                <option selected='selected' value='0'>0</option>
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
        </div>

        <!-- <label name="">Include a special symbol?</label>
        <input type="checkbox" id="symbol" value="symbol" /><br/> -->
        <div class='field'>
            <label for='scount'>Include Special Symbols?</label>
            <select id='scount' name='scount'>
                <option selected='selected' value='0'>0</option>
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
        </div>


        <label name="uppercase">Uppercase first letter of each word?</label>
        <input type="checkbox" id="uppercase" value="uppercase" <?php echo ($uppercase) ? 'checked="checked"' : '' ; ?> /><br/>


        <input type="submit" name="submit" value="submit" />


    </form>

</div>