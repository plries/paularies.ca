<pre><code><span class="code-comment">// when document loads...</span>
$(<span class="code-blue">document</span>).<span class="code-blue">ready</span>(<span class="code-blue">function</span>() {

    <span class="code-comment">// create a variable called "$cards"</span>
    <span class="code-comment">// element with ID "#cards" is assigned to variable</span>
    <span class="code-comment">// apply following options to the variable</span>
    <span class="code-blue">var</span> $cards = $(<span class="code-green">"#cards"</span>).<span class="code-blue">isotope</span>({
    <span class="code-comment">// defines the items in the collection</span>
    <span class="code-comment">// this allows for Isotope to properly organize the cards</span>
    <span class="code-blue">itemSelector</span>: <span class="code-green">".card"</span>,
    <span class="code-comment">// lays out cards in a vertical column</span>
    <span class="code-blue">layoutMode</span>: <span class="code-green">"vertical"</span>,
    <span class="code-blue">getSortData</span>: {
        <span class="code-comment">// sort cards by data-category defined in each card's attribute</span>
        <span class="code-blue">category</span>: <span class="code-green">"[data-category]"</span>,
        <span class="code-comment">// sort cards by ".name" class defined in each card's attribute</span>
        <span class="code-blue">name</span>: <span class="code-green">".name"</span>,
        <span class="code-blue">number</span>: <span class="code-green">".number"</span>
    }
    });

    <span class="code-comment">// when a button is clicked in the ".button-group" div...</span>
    $(<span class="code-green">".button-group"</span>).<span class="code-blue">on</span>(<span class="code-green">"click"</span>, <span class="code-green">"button"</span>, <span class="code-blue">function</span>() {
        <span class="code-comment">// creates a variable called filterValue</span>
        <span class="code-comment">// assigns the data-filter attribute to filterValue according to the button clicked</span>
        <span class="code-blue">var</span> filterValue = $(<span class="code-blue">this</span>).<span class="code-blue">attr</span>(<span class="code-green">"data-filter"</span>);
        <span class="code-comment">// filters the cards by the data-filter attribute</span>
        $cards.<span class="code-blue">isotope</span>({ <span class="code-blue">filter</span>: filterValue });
    });

    <span class="code-comment">// when a button is clicked in the ".sort-by-button-group" div...</span>
    $(<span class="code-green">".sort-by-button-group"</span>).<span class="code-blue">on</span>(<span class="code-green">"click"</span>, <span class="code-green">"button"</span>, <span class="code-blue">function</span>() {
        <span class="code-comment">// creates a variable called sortByValue</span>
        <span class="code-comment">// assigns the data-sort-by attribute to sortByValue according to the button clicked</span>
        <span class="code-blue">var</span> sortByValue = $(<span class="code-blue">this</span>).<span class="code-blue">attr</span>(<span class="code-green">"data-sort-by"</span>);
        <span class="code-comment">// filters the cards by the data-sort-by attribute</span>
        $cards.<span class="code-blue">isotope</span>({ <span class="code-blue">sortBy</span>: sortByValue });
    });
});</code></pre>