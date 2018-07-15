const button = document.getElementsByTagName('button')[0];
const input = document.getElementById('tipsHere');

button.addEventListener('click', () => {
  input.innerHTML = "<p>The add pages full of Louisville fans on twitter can be found on the right side of the navbar at the top of the page.</p><p>Twitter will suspend your acct for 'bot behavior' if you add too many people in a day. I'd suggest keeping it under 100 adds or 4 pages per day from #btf.</p><p>If you are new to #btf I suggest that you add the whole list. This is time consuming but at that point you are done and new people should add you as they are introduced. All you have to do is follow them back and you can continue to grow as this community does. You will have to space this out as twitter suspends accts who add too many people in one day.</p>";
});
