<!DOCTYPE html>
<html lang="en">
<head>
    @notifyCss

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Information</h2>
        <form action="{{route('customer_form.store')}}" method="post">
            @csrf
            <x-customer label="Name" name="name", type="text"/>
            <x-customer label="Email" name="email", type="email"/>
            <x-customer label="Address" name="address", type="text"/>
            <x-customer label="Country" name="country", type="text"/>
            <x-customer label="Number" name="number", type="number"/>

            

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
    <x-notify::notify />
    @notifyJs

</body>
</html>
