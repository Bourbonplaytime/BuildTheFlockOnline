const button = document.getElementsByTagName('button')[0];
const input = document.getElementById('tipsHere');

button.addEventListener('click', () => {
  input.innerHTML = "<p>Twitter will suspend your acct for 'bot behavior' if you add too many people in a day. I'd suggest keeping it under 100 adds or 4 pages from Build The FLock.</p><p>If you are new to Build The Flock I suggest should you want to have everyone that you add the whole list upon introduction. This is time consuming but at this point you are done and in theory new people should add you as they are introduced, then all you have to do is follow them back and you can continue to grow as this community does. You will have to space this out as twitter suspends accts who add too many people in one day.</p>";
});
