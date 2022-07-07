<!DOCTYPE html>

<title>My App</title>

<link rel="stylesheet" href="/css/customers.css">

<body>
    <div class = "customers-view">
        <button id="back-button">
            <a href="/">Go back</a>
        </button> 
        <div class="customer-name">
            <h3> Name: </h3> 
            {{$customer->name}}
        </div>
        <div class="customer-email">
            <h3> Email: </h3> 
            {{$customer->email}}
        </div>
        <div class="customer-address">
            <h3> Address: </h3> 
            {{$customer->address}}
        </div>
        <div class="customer-group">
            <h3> Group: </h3> 
            {{$customer->groups->service}}
        </div>
    </div>
</body>