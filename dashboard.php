<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: flex-start;
            padding: 20px;
        }
        .box {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: calc(30% - 20px); /* 30% width with margin */
            margin-bottom: 30px;
            margin-right: 20px; /* Spacing between boxes */
            transition: transform 0.3s ease-in-out;
        }
        .box:last-child {
            margin-right: 0; /* Remove margin-right for the last box */
        }
        h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #333;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .submit-btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }

   
    </style>
</head>
<body>
    <h1 style="text-align: center; color: #fff;">Dashboard</h1>
    <div class="container">
        <div class="box">
           
    <h2>Manufacturer</h2>
    <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.adi-mobilehealth.com%2Fwp-content%2Fuploads%2F2014%2F03%2FHealth-Delivery-Pic-pg-11.jpg&f=1&nofb=1&ipt=ff00ebbc3c68dfb4d669b84a15fdfd4592e1a45ad3bffdfbeedfd483049ac452&ipo=images" alt="Manufacturer Image" style="width: 100%; height: auto;">
    <form id="manufacturerForm">
        <input type="text" id="manufacturerInput" placeholder="Enter ID">
        <button type="submit" class="submit-btn">Submit</button>
    </form>
</div>
        <div class="box">
            <h2>Distributor</h2>
            <form id="distributorForm">
                <input type="text" id="distributorInput" placeholder="Enter ID">
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
         <div class="box">
            <h2>Transporter</h2>
            <form id="transporterForm">
                <input type="text" id="transporterInput" placeholder="Enter ID">
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
        <div class="box">
            <h2>Vendor</h2>
            <form id="vendorForm">
                <input type="text" id="vendorInput" placeholder="Enter ID">
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
        <div class="box">
            <h2>Wholesaler</h2>
            <form id="whForm">
                <input type="text" id="whInput" placeholder="Enter ID">
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
        <div class="box">
            <h2>Customer</h2>
            <form id="csForm">
                <input type="text" id="csInput" placeholder="Enter ID">
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
