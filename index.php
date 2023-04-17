<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplications</title>
</head>
<body>
    <script>
        function displayMultiplicationTable(num) {
            const table = document.createElement("table");        
            for (let i = 1; i <= 10; i++) {
                let product = num * i;
                let row = table.insertRow();
                row.innerHTML = `<td>${num} x ${i}</td><td>=</td><td>${product}</td>`;
            }
                        
            document.body.appendChild(table);
        }

        n = parseInt(window.prompt("Enter a number : "))
        displayMultiplicationTable(n)
    </script>
</body>
</html>