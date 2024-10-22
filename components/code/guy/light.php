<pre><code class="language-css">.about {
    .notif_container {
        .notif {
            background-color: #ffffff99;
            border: 0.25px $grey-100 solid;
        }
    }
    .about_content {
        background-color: $white;
        box-shadow: 0px 0px 12px 1px #9191914D;
    }
}

.pricing {
    .cards_container {
        .card {
            background-color: $white;
            box-shadow: 0px 0px 12px 1px #9191914D;
            span {
                color: $grey-700;
            }
            .card_title {
                ion-icon {
                    color: $grey-800;
                }
            }
            button {
                background-color: $grey-100;
                border: $grey-500 solid 1px;
                color: $grey-900;
            }
        }
        > div:nth-child(3) {
            border: $orange-200 2px solid;
            box-shadow: 0px 0px 12px 1px #ff59004d;
            button {
                background-color: $orange-200;
                color: $white;
                border: $orange-100 solid 1px;
            }
        }
    }
}</code></pre>