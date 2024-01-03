<!-- resources/views/components/navbar.blade.php -->

<nav class="navbar">
    <ul class="nav-list">
        <li class="nav-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="nav-item"><a href="{{ url('/products') }}">Products</a></li>
    </ul>
</nav>

<style>
    .navbar {
        background-color: #333;
        padding: 10px;
        text-align: center; /* Center the navigation items */
    }

    .nav-list {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .nav-item {
        display: inline-block;
        margin-right: 20px;
    }

    .nav-item:last-child {
        margin-right: 0; /* Remove margin from the last item */
    }

    a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    a:hover {
        color: #ffc107;
    }
</style>
