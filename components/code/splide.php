<pre><code class="language-javascript">// when the document content is fully loaded...
document.addEventListener('DOMContentLoaded', function () {

    // initialize a new Splide instance for the element with ID "#carousel4"
    new Splide('#carousel4', {
        // sets the slide transition type to fade
        type: "fade",
        // plays slideshow automatically
        autoplay: true,
        // pauses the autoplay when the user hovers over the carousel
        pauseOnHover: true,
        // sets the time interval between slide transitions to 3000ms (3 seconds)
        interval: 3000,
        // sets the speed of the slide transition to 1000ms (1 second)
        speed: 1000,
        // allows the carousel to loop back to the first slide after the last one
        rewind: true,
        // sets the speed of the rewind transition to 1000ms (1 second)
        rewindSpeed: 1000,
        // hides the carousel navigation arrows
        arrows: false,
        // sets the pagination direction to top-to-bottom (ttb)
        paginationDirection: 'ttb',
    }).mount();
    
});
</code></pre>