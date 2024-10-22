<pre><code class="language-javascript">// when document loads...
$(document).ready(function(){

// apply these options to the element with ".my-background-video" class
$(".my-background-video").bgVideo({
    
    // continually plays
    pauseAfter: 0,
    // fades video in
    fadeIn: true,
    // removes pause/play functionality
    showPausePlay: false

    });
        
}); 
</code></pre>