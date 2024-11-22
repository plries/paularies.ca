<pre><code class="language-javascript">// this is an array that holds the ingredients for each step
// we can use this to display ALL selected ingredients
// and to pass the selected ingredients to the next step
const [selectedIngredients, setSelectedIngredients] = useState({
    // ingredients for Base step
    base: [],
    // ingredients for Fruits step
    fruits: [],
    // ingredients for Toppings step
    toppings: [],
});

// this function updates the ingredients per step
const updateIngredients = (step, item) => {

setSelectedIngredients(prevState => {
    // creates a variable that holds the ingredients for the current step
    const currentIngredients = prevState[step];
    // creates a variable that holds the updated ingredients
    // we use this variable to apply changes to the ingredient list
    let updatedIngredients;
    
    // if the item is already in the order
    if (currentIngredients.includes(item)) {
        // create a variable that filters out the item from the order
        updatedIngredients = currentIngredients.filter(ingredient => ingredient !== item);
        } else {
            // if the amount of ingredients is less than 3,
            if (currentIngredients.length < 3) {
                // add the item to the order
                updatedIngredients = [...currentIngredients, item];
            } else {
                // if the amount of ingredients is more than 3
                // set the updated ingredients to the current ingredients
                updatedIngredients = currentIngredients;
            }
        }

        return {
            // ... -> spread operator
            // copies the previous state
            ...prevState,
            // and adds the updated state with the new ingredients
            [step]: updatedIngredients
        };
    });
};</code></pre>