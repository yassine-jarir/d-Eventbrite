<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
</head>
<body>

    <!-- Sidebar -->
    <div id="sidebar">
        <ul>
            <li><a href="#" class="nav-link" data-page="home">🏠 Home</a></li>
            <li><a href="#" class="nav-link" data-page="settings">⚙️ Settings</a></li>
            <li><a href="#" class="nav-link" data-page="profile">👤 Profile</a></li>
        </ul>
    </div>

    <!-- Content Section -->
    <div id="content">
        <h2>Welcome to the Dashboard</h2>
    </div>

    <script>
        $(document).ready(function() {
            $(".nav-link").click(function(e) {
                e.preventDefault();
                var page = $(this).data("page");

                $.ajax({
                    url: "/ajax/load_page",
                    type: "GET",
                    data: { page: page },
                    success: function(response) {
                        $("#content").html(response);
                    },
                    error: function() {
                        $("#content").html("<h3>Error loading page</h3>");
                    }
                });
            });
        });

    </script>

</body>
</html>

 