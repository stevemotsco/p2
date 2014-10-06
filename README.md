##### Project2 created by Steve Motsco and initially posted to GitHub at 1130CDT, 30Sep14

##### Project URL:  http://p2.stevemotsco.me/

##### Demo URL:  http://screencast.com/t/HcCr0fQ7rq

##### To get a large selection of words to choose from I used the file "wordsEn.txt" located on the SIL website at: http://www-01.sil.org/linguistics/wordlists/english/

##### Did quite a bit of work from behind a firewall on Thursday, 02Oct14, so I did not push updates to GitHub near as much as I would have liked.  I did regularly save changes during the day in temp files on my local machine (psuedo- version control.) 

##### Without using javascript or jquery, I could not find an elegant way to get the dropdowns to save the selected value.  There is more php code on content.php than I would like.

##### While Reviewing my demo, I realized that the code was returning one more symbol than the user asked for.  Upon closer inspection of the logic.php file, I realized that when I went from using a checkbox and allowing the user to just get one symbol to using a dropdown to allow the to slect 2-9 symbols, I forgot to remove the code that dealt with symbols as if it was getting a true/false input from content.php.  Instead of erasing this code, I just commented it out (lines 66-71) so the TA could see it to make a determination if this is considered too big a correction to make after the deadline to turn in the application.

##### As mentioned above, the in the demo the application was returning one more symbol than the user asked for.  This has been corrected as noted above.  The demo can be found at: http://screencast.com/t/HcCr0fQ7rq