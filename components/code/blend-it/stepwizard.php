<pre><code>import React, { useState } from "react";
import StepWizard from "react-step-wizard";

// import each step from './steps';
import Base from "./steps/Base";
import Fruits from "./steps/Fruits";
import Toppings from "./steps/Toppings";
import Complete from "./steps/Complete";

function Builder() {
    return (
        &lt;StepWizard isHashEnabled={true}&gt;
            {/* Step 1 */}
            &lt;Base
                hashKey={"base"}
                // runs the updateIngredients function when an item is selected
                // tells the function that we're on the "base" step, and passes the selected item
                updateIngredients={(item) =&gt; updateIngredients("base", item)} 
                // used to display the ingredients and RGb in the current step
                selectedIngredients={selectedIngredients.base}
                // used to display all ingredients in the order
                // flattens the array as all the ingredients are nested in their own steps
                allIngredients={Object.values(selectedIngredients).flat()}
                // used to color the smoothie base
                baseRGBs={baseRGBs}
            /&gt;
            {/* Step 2 */}
            &lt;Fruits
                hashKey={"fruits"}
                updateIngredients={(item) =&gt; updateIngredients("fruits", item)}
                selectedIngredients={selectedIngredients.fruits} 
                allIngredients={Object.values(selectedIngredients).flat()}
                baseRGBs={baseRGBs}
            /&gt;
            {/* Step 3 */}
            &lt;Toppings
                hashKey={"toppings"}
                updateIngredients={(item) =&gt; updateIngredients("toppings", item)} 
                selectedIngredients={selectedIngredients.toppings} 
                allIngredients={Object.values(selectedIngredients).flat()}
                baseRGBs={baseRGBs}
            /&gt;
            {/* Complete */}
            &lt;Complete 
                hashKey={"complete"}
                allIngredients={Object.values(selectedIngredients).flat()}
            /&gt;
        &lt;/StepWizard&gt;
    );
}

export default Builder;</code></pre>
