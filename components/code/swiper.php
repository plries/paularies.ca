<pre><code><span class="code-comment">// creates a variable called swiper</span>
<span class="code-comment">// assigns element with class ".swiper" to variable</span>
<span class="code-comment">// applies following options to variable</span>
<span class="code-blue">const</span> swiper = <span class="code-blue">new</span> <span class="code-blue">Swiper</span>(<span class="code-green">".swiper"</span>, {
<span class="code-comment">// sets the direction which slides move on the x axis</span>
<span class="code-blue">direction</span>: <span class="code-green">"horizontal"</span>,
<span class="code-comment">// allows the last slide to loop back to the first slide on swipe</span>
<span class="code-blue">loop</span>: <span class="code-green">true</span>,

<span class="code-comment">// applies the pagination functionality to the element with the class ".swiper-pagination"</span>
<span class="code-blue">pagination</span>: {
    <span class="code-blue">el</span>: <span class="code-green">".swiper-pagination"</span>,
},

<span class="code-comment">// applies the navigation functionality to the following elements</span>
<span class="code-blue">navigation</span>: {
    <span class="code-comment">// sets the nextEl functionality to the element with the class ".swiper-button-next"</span>
    <span class="code-blue">nextEl</span>: <span class="code-green">".swiper-button-next"</span>,
    <span class="code-comment">// sets the prevEl functionality to the element with the class ".swiper-button-prev"</span>
    <span class="code-blue">prevEl</span>: <span class="code-green">".swiper-button-prev"</span>,
},
});</code></pre>