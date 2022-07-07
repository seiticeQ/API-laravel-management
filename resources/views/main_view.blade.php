<!DOCTYPE html>

<link rel = "stylesheet" href="/css/main_view.css">

<title>My App</title>

<body>
    <div class = "main-view">
        <h1>Customer Information</h1>
        <div class = "customer-list">
            @foreach ($customers as $customer)
                <a href="/customers/<?= $customer->id; ?>">
                    {{$customer->name}}
                </a>
            @endforeach
        </div>
    </div>
</body>