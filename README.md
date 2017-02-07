Assignment #1
This displays a page with my name, a picture, a little about me and a random quote.
The HTML is located in index.php
The metadata/header is the htmlhead.php include file.
PHP processing of the quotes/data is done in the quotesParse.php file in accordance with the PHP/HTML separation criteria.
The image is a jpeg image that was sized to 300px using Pixlr to reduce the size prior to load.

The random quote was generated via a csv formated excel spreadsheet file.
The quotes were entered into the Excel spreadsheet in 3 columns and then saved as a .csv.
Author, Quote, Additional Info (i.e. date)
Example Quote:
A little rudeness and disrespect can elevate a meaningless interaction to a battle of wills and add drama to an otherwise dull day.
- Bill Watterson, Calvin and Hobbes
The additional information is the "Calvin and Hobbes"

All quotes have an author and quote but not all have the additional information so the
PHP parses the file and sets up the 2 strings that are going to be displayed on page load.
The Quote is on a line followed by the author/additional info,  on the next line.
Note this works for multiple quotes from the same person.

The page takes between 0.11-.15 seconds to load for a file of 15 quotes.
Googlefonts were used which does impact the load time.  When I remove the googlefonts, the load time is reduce to 0.06-0.08 seconds.
I was concerned that the approach of reading a file of data would impact the load time so I did a test.
To compare, I wrote a separate PHP file with the quotes directly written into a 2D array and then let array_rand() select the array to display.
The page load for a similar number of quotes was 0.05-0.09 seconds.  So with this crude test, there wasn't any noticiable difference with my approach of reading a csv file.

This file can be changed and updated without changing the PHP code.  I consider that an
advantage as this can be expanded to become a tool that anyone can use to import quotes and display.
I didn't have time to weaponize this yet, but that's the type of thing I'm interested in doing.

Tested with Firefox, Chrome and Explorer although the measurements were done in Firefox only.
