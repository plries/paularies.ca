<pre><code class="language-scss">nav {
    display: flex;
    align-items: center;
    flex-direction: row;
    width: 100%;
    justify-content: space-between;
    a {
        font-family: $serif;
        font-size: 2.8rem;
        transition: color 0.25s ease;
    }
    a::after {
        display: block;
        content: '';
        position: absolute;
        left: 0;
        height: 0.4rem;
        width: 0.4rem;
        border-radius: 0.4rem;
        margin-top: 0.2rem;
        transform: translateX(calc(var(--markerLeft) + var(--markerWidth)  / 2 - 0.2rem));
        transition: transform ease 0.25s;
        will-change: width;
        -webkit-animation: dotAppear ease 0.5s;
                animation: dotAppear ease 0.5s;
    }
    a:hover {
        color: $orange-200 !important;
    }
}</code></pre>