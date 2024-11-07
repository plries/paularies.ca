<pre><code class="language-scss">.about {
    > img {
        filter: brightness(0.75);
    }
    .notif_container {
        .notif {
            background-color: #2c2c2c99;
            border: 0.25px $grey-800 solid;
        }
    }
    .about_content {
        background-color: $grey-800;
        box-shadow: 0px 0px 12px 1px #0000004D;
    }
}

.pricing {
    .cards_container {
        .card {
            background-color: $grey-700;
            box-shadow: 0px 0px 12px 1px #0000004D;
            span {
                color: $grey-200;
            }
            .card_title {
                ion-icon {
                    color: $grey-100;
                }
            }
            button {
                background-color: $grey-800;
                border: $grey-700 solid 1px;
                color: $white;
            }
        }
        > div:nth-child(3) {
            button {
                background-color: #b45a29;
                color: $white;
                border: #ca8762 solid 1px;
            }
        }
    }
}</code></pre>