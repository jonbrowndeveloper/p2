# Project 2
+ By: Jonathon Brown
+ Production URL: <http://p2.jonbrowndeveloper.me>

## Outside resources
used [Twitter Bootstrap 2.3.2](http://getbootstrap.com/2.3.2/)

also went through the [PHP Documentation](http://php.net/manual/en) for things like [array slicing](http://php.net/manual/en/function.array-slice.php) and [non case-sensitive string compare](http://php.net/manual/en/function.strcasecmp.php)

I checked out a few Stack Overflow posts. [This one](https://stackoverflow.com/questions/1811100/how-to-declare-a-two-dimensional-array-most-easily-in-php) was particularly helpful for setting up multidimensional arrays. You can see I used the syntax using brackets from the second response. I found this to be easier to read albeit utilizing the seemingly less popular php syntax. 

Also, [this one](https://stackoverflow.com/questions/4022289/sort-multi-dimensional-array-by-specific-key) was very helpful for finding out how to sort multidimensional arrays and lead me to the PHP documentation regarding [usort](http://php.net/usort) and how to set it up. 

## Code style divergences
- I use tabs, however, PHPStorm simply turns them into spaces. Which is nice. 
- Each file in my project should be correctly formatted using the ctrl + alt + l function. 

## Notes for instructor

I may have bit off a more than I could chew (within a reasonable time frame) with the scope I chose for this project. I didn't struggle with the php or putting the forms together, what took me so long was the logic. As I got closer to the deadline, I fell victim to my own scope creep. I wanted to do a 'word cloud' of some kind and I figured the logic would be fairly simple. While it is, it just took quite a long time to figure it out on my own. So, if you feel any pity on me for that in terms of my being tardy with the submission of this project, I would appreciate it. 

Other than my own failings to prevent scope creep, I found the project quite enjoyable. 

A few things
- the logic for the font size could be much more elegant. The application should be able to take in more than 500 words as some algorithm that takes in the word count should be able to spit out font sizes that more appropriately fit the page.
- HTML decided to deprecate the font size property. I wanted to use another 'textarea' for the output just like the input, however, HTML does not support different font sizes within the same paragraph of text within a textarea. So I left it as plain text and used the span property. 
- Real world use of this application would involve copying and pasting text from some paragraph anywhere on the web which would inevitably include punctuation. A feature adding the ability to remove any special characters from a pasted in section of text would be really handy. However, I figured a feature like this was out of the scope of this project. 