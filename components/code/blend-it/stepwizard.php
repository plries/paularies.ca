<pre><code class="language-javascript">import React, { useState } from "react";
import StepWizard from "react-step-wizard";

function Builder() {
    return (
        <StepWizard
            isHashEnabled={true}
        >
            {/* Step 1 */}
            <Base
                hashKey={"base"}
                // runs the updateIngredients function when an item is selected
                // tells the function that we're on the "base" step, and passes the selected item
                updateIngredients={(item) => updateIngredients("base", item)} 
                // used to display the ingredients and RGb in the current step
                selectedIngredients={selectedIngredients.base}
                // used to display all ingredients in the order
                // flattens the array as all the ingredients are nested in their own steps
                allIngredients={Object.values(selectedIngredients).flat()}
                // used to color the smoothie base
                baseRGBs={baseRGBs}
            />
            {/* Step 2 */}
            <Fruits
                hashKey={"fruits"}
                updateIngredients={(item) => updateIngredients("fruits", item)}
                selectedIngredients={selectedIngredients.fruits} 
                allIngredients={Object.values(selectedIngredients).flat()}
                baseRGBs={baseRGBs}
            />
            {/* Step 3 */}
            <Toppings
                hashKey={"toppings"}
                updateIngredients={(item) => updateIngredients("toppings", item)} 
                selectedIngredients={selectedIngredients.toppings} 
                allIngredients={Object.values(selectedIngredients).flat()}
                baseRGBs={baseRGBs}
            />
            {/* Complete */}
            <Complete 
                hashKey={"complete"}
                allIngredients={Object.values(selectedIngredients).flat()}
            />
        </StepWizard>
    );
};

export default Builder;</code></pre>