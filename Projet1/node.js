const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const PORT = 3000;

// Middleware to parse JSON bodies
//app.use(bodyParser.json());

app.use(bodyParser.urlencoded({ extended: true }));

app.post('/submit', (req, res) => {
    const name = req.body.name;
    const qty = req.body.qty;
    const prix = req.body.prix;

    if (name && qty && prix) {
        const totalPrice = qty * prix;
        res.send(`
            <h1>Product Information</h1>
            <p>Name: ${name}</p>
            <p>Quantity: ${qty}</p>
            <p>Price: ${prix}</p>
            <p>Total Price: ${totalPrice}</p>
        `);
    } else {
        res.send('Missing information');
    }
});

//const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});

