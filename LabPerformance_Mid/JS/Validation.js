console.log("Connected");

let unitPrice = 1000;
let days = 30;

function getQuantity() 
{
    let quantity = document.getElementById("quantity").value;

    if(quantity === "" || quantity < 0)
    {
        quantity = 0;
        document.getElementById("quantity").value = quantity;
        alert("Please enter a valid quantity (non-negative number).");
    }

    return quantity;
}

function calculateTotal(quantity) 
{
    let total = unitPrice * quantity * days;
    return total;
}

function displayTotal(total)
{
    document.getElementById("totalPrice").value = total;
}

function checkCoupon(total)
{
    if(total > 1000)
    {
        alert("You are eligible for a gift coupon.");
    }
}

function collect_data()
{
    let quantity = getQuantity();

    let total = calculateTotal(quantity);

    displayTotal(total);

    checkCoupon(total); 
}