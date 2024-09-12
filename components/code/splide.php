<pre><code><span class="code-comment">// when the document content is fully loaded...</span>
<span class="code-blue">document</span>.<span class="code-blue">addEventListener</span>(<span class="code-green">'DOMContentLoaded'</span>, <span class="code-blue">function</span> () {

    <span class="code-comment">// initialize a new Splide instance for the element with ID "#carousel4"</span>
    <span class="code-blue">new</span> <span class="code-blue">Splide</span>(<span class="code-green">'#carousel4'</span>, {
        <span class="code-comment">// sets the slide transition type to fade</span>
        <span class="code-blue">type</span>: <span class="code-green">"fade"</span>,
        <span class="code-comment">// plays slideshow automatically</span>
        <span class="code-blue">autoplay</span>: <span class="code-green">true</span>,
        <span class="code-comment">// pauses the autoplay when the user hovers over the carousel</span>
        <span class="code-blue">pauseOnHover</span>: <span class="code-green">true</span>,
        <span class="code-comment">// sets the time interval between slide transitions to 3000ms (3 seconds)</span>
        <span class="code-blue">interval</span>: <span class="code-green">3000</span>,
        <span class="code-comment">// sets the speed of the slide transition to 1000ms (1 second)</span>
        <span class="code-blue">speed</span>: <span class="code-green">1000</span>,
        <span class="code-comment">// allows the carousel to loop back to the first slide after the last one</span>
        <span class="code-blue">rewind</span>: <span class="code-green">true</span>,
        <span class="code-comment">// sets the speed of the rewind transition to 1000ms (1 second)</span>
        <span class="code-blue">rewindSpeed</span>: <span class="code-green">1000</span>,
        <span class="code-comment">// hides the carousel navigation arrows</span>
        <span class="code-blue">arrows</span>: <span class="code-green">false</span>,
        <span class="code-comment">// sets the pagination direction to top-to-bottom (ttb)</span>
        <span class="code-blue">paginationDirection</span>: <span class="code-green">'ttb'</span>,
    }).<span class="code-blue">mount</span>();
    
});
</code></pre>