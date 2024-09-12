<pre><code><span class="code-comment">// creates a variable called slideUp</span>
<span class="code-comment">// assigns following options</span>
<span class="code-blue">const</span> slideUp = {
    <span class="code-comment">// sets element's distance from original position to 125% when revealed</span>
    <span class="code-blue">distance</span>: <span class="code-green">"125%"</span>,
    <span class="code-comment">// sets where element to originate from the bottom when revealed</span>
    <span class="code-blue">origin</span>: <span class="code-green">"bottom"</span>,
    <span class="code-comment">// sets opacity to 0 prior to being revealed</span>
    <span class="code-blue">opacity</span>: <span class="code-green">0</span>,
    <span class="code-comment">// sets animation duration to 1000ms</span>
    <span class="code-blue">duration</span>: <span class="code-green">1000</span>,
    <span class="code-comment">// sets time between each animation to 600ms</span>
    <span class="code-blue">interval</span>: <span class="code-green">600</span>
    };
    
    <span class="code-comment">// when an element with class ".show" enters the viewport, apply the slideUp animation</span>
    <span class="code-blue">ScrollReveal</span>().<span class="code-blue">reveal</span>(<span class="code-green">".show"</span>, slideUp);</code></pre>