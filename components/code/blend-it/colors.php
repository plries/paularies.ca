<pre><code class="language-javascript">// this is a variable that holds the RGB colors
const [baseRGBs] = useState([]);

// selects the smoothie base element so it can be colored
const smoothieBase = document.querySelectorAll('.smoothie-base');

// if the baseRGBs array has 3 elements
if (baseRGBs.length === 3) {

    // calculate the average RGB color
    let Fruit1 = baseRGBs[0];
    let Fruit2 = baseRGBs[1];
    let Fruit3 = baseRGBs[2];

    // add all red values then divide by 3
    let Red = (Fruit1[0] + Fruit2[0] + Fruit3[0]) / 3; 
    // add all green values then divide by 3
    let Green = (Fruit1[1] + Fruit2[1] + Fruit3[1]) / 3;
    // add all blue values then divide by 3
    let Blue = (Fruit1[2] + Fruit2[2] + Fruit3[2]) / 3;

    // round the RGB values to whole numbers
    Red = Math.round(Red);
    Green = Math.round(Green);
    Blue = Math.round(Blue);

    // convert the RGB values to a string
    // this way, we can use it as a CSS color
    // rgb(Red, Green, Blue)
    let baseRGB = 'rgb(' + [Red, Green, Blue].toString() + ')';

    // color the smoothie base
    smoothieBase.forEach(item => {
        item.style.backgroundColor = baseRGB
        } 
    );

// if the baseRGBs array has 1 or 2 elements
} else if (baseRGBs.length > 1 && baseRGBs.length < 3) {

    // remove color from the smoothie base
    smoothieBase.forEach(item => {
        item.style.backgroundColor = 'unset'
        } 
    );

}</code></pre>