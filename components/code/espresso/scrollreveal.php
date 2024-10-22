<pre><code class="language-javascript">// creates a variable called slideUp
// assigns following options
const slideUp = {
    // sets element's distance from original position to 125% when revealed
    distance: "125%",
    // sets where element to originate from the bottom when revealed
    origin: "bottom",
    // sets opacity to 0 prior to being revealed
    opacity: 0,
    // sets animation duration to 1000ms
    duration: 1000,
    // sets time between each animation to 600ms
    interval: 600
    };
    
    // when an element with class ".show" enters the viewport, apply the slideUp animation
    ScrollReveal().reveal(".show", slideUp);
</code></pre>