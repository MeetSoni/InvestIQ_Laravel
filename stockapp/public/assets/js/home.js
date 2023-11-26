
// Simulated stock data (replace with real data source)
const stocks = [
    { symbol: "AAPL", price: 150.25, change: 1.15 },
    { symbol: "GOOGL", price: 2725.50, change: -4.75 },
    { symbol: "MSFT", price: 290.75, change: 0.50 },
];

// Function to update stock data in the table
function updateStockData() {
    const stockTableBody = document.getElementById("stock-data");
    stockTableBody.innerHTML = "";

    stocks.forEach((stock) => {
        const row = document.createElement("tr");
        if(stock.change.toFixed(2) >= 0.1){
            row.innerHTML = `
            <td>${stock.symbol}</td>
            <td style="color:green">
            ${stock.price.toFixed(2)}                
            </td>
            <td style="color:green" id="changeprice">${stock.change.toFixed(2)}</td>
            <td><button name="newbuy" onclick="getprice(${stock.price.toFixed(2)})">Buy</button></td>
            <td><button>Sell</button></td>
        ` }

        else{
            row.innerHTML = `
            <td>${stock.symbol}</td>
            <td style="color:green">
            ${stock.price.toFixed(2)}                
            </td>
            <td style="color:red" id="changeprice">${stock.change.toFixed(2)}</td>
            <td><button name="newbuy" onclick="getprice(${stock.price.toFixed(2)})">Buy</button></td>
            <td><button>Sell</button></td>
        `
        }

       
        console.log(stock.price);
    
        stockTableBody.appendChild(row);
    });
}

function getprice(price){
        alert("your buying price is :" + price)
}

function colorchange(changeprice){
        console.log(changeprice);
        if(price){

        }
}
// Simulate data updates every 5 seconds (replace with real-time data source)
setInterval(() => {
    stocks.forEach((stock) => {
        // Simulate price change
        stock.price += Math.random() * 5 - 2.5;
        // Simulate change
        stock.change = Math.random() * 10 - 5;
    });
    updateStockData();
}, 5000); // Update every 5 seconds

// Initial data population
updateStockData();
