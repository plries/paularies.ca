<pre><code><span class="code-comment">// sets elements with ".beans" class to transform: translateX(50%)</span>
<span class="code-blue">gsap</span>.<span class="code-blue">set</span>(<span class="code-green">".beans"</span>, {xPercent:<span class="code-green">-50</span>});

<span class="code-comment">// creates a timeline called rotate</span>
<span class="code-blue">var</span> rotate = <span class="code-blue">gsap</span>.<span class="code-blue">timeline</span>({
    <span class="code-comment">// when scrolling, scrub through the animation</span>
    <span class="code-comment">// allows for animation to play forward when scrolled down, or play backward when scrolled up</span>
    <span class="code-blue">scrollTrigger</span>:{
    <span class="code-blue">scrub</span>: <span class="code-green">5</span>
    }
});

<span class="code-comment">// sets end point of animation for elements with ".beans" class</span>
.<span class="code-blue">to</span>(<span class="code-green">".beans"</span>, {
    <span class="code-comment">// sets end state of animation to a 720deg rotation</span>
    <span class="code-comment">// allows for the elements to spin depending on scroll/scrub position</span>
    <span class="code-blue">rotation</span>: <span class="code-green">720</span>
});</code></pre>