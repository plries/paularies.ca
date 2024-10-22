<pre><code class="language-css">.faq {
    height: fit-content;
    > div {
        visibility: hidden;
        height: 100%;
        display: grid;
        place-items: center;
        width: 100%;
        > div {
            height: -webkit-fit-content;
            height: -moz-fit-content;
            height: fit-content;
            border-radius: 16px;
            overflow: hidden;
            .faq-item {
                max-height: 6.6rem;
                overflow: hidden;
                transition: max-height 0.5s ease;
                width: 100%;
                button {
                    text-align: left;
                    border: 0;
                    padding: 2rem;
                    width: 100%;
                    font-weight: 600;
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    ion-icon {
                        font-size: 2.4rem;
                        transition: transform 0.5s ease;
                        min-width: 2.4rem;
                    }
                }
                button:hover {
                    cursor: pointer;
                }
                .faq-content {
                    padding: 1.6rem;
                    border: 0;
                    border-top: unset;
                }
            }
            .expand {
                max-height: 20rem;
                button {
                    ion-icon {
                        transform: rotate(180deg);
                    }
                }
            }
        }
    }
}</code></pre>