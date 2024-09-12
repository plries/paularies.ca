<pre><code><span class="code-comment">// when document loads...</span>
$(<span class="code-blue">document</span>).<span class="code-blue">ready</span>(<span class="code-blue">function</span>(){

<span class="code-comment">// apply these options to the element with ".my-background-video" class</span>
$<span class="code-blue">(".my-background-video")</span>.<span class="code-blue">bgVideo</span>({
    
    <span class="code-comment">// continually plays</span>
    <span class="code-blue">pauseAfter</span>: <span class="code-green">0</span>,
    <span class="code-comment">// fades video in</span>
    <span class="code-blue">fadeIn</span>: <span class="code-green">true</span>,
    <span class="code-comment">// removes pause/play functionality</span>
    <span class="code-blue">showPausePlay</span>: <span class="code-green">false</span>

    });
        
}); 
</code></pre>