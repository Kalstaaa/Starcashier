<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="{{ asset('../images/LOGO.png') }}">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    {{-- Bootstrap --}}

</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('images/LOGO.png') }}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Admin</span>
                    <span class="profession">StarCashier</span>
                </div>
            </div>

        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">

                    <li id="nav-home" class="nav-link">
                        <a href="/admin/home">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li id="nav-product-item" class="nav-link">
                        <a href="/admin/employe">
                            <i class='bx bxs-id-card icon'></i>
                            <span class="text nav-text">Employe</span>
                        </a>
                    </li>

                    <li id="nav-product-item" class="nav-link">
                        <a href="/admin/employe">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">Profil</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                style="background: none; border: none; color: inherit; cursor: pointer; padding: 0; font: inherit; display: flex; align-items: center; text-decoration: none;">
                                <i class='bx bx-log-out icon'></i>
                                <span class="text nav-text">Logout</span>
                            </button>
                        </form>
                    </a>
                </li>
            </div>


        </div>

    </nav>

    <section class="home">
        <div class="text">Employe</div>

        <div class="button-create">
            <button id="show-form-btn">Add Employee</button>
        </div>

        <div id="employee-form" class="employee-form">
            <h2>Add Employee</h2>
            <form>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Submit</button>
                <button type="button" id="close-form-btn">Cancel</button>
            </form>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>example1@example.com</td>
                        <td>user1</td>
                        <td>
                            <button>Delete</button>
                            <button>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>example2@example.com</td>
                        <td>user2</td>
                        <td>
                            <button>Delete</button>
                            <button>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>example3@example.com</td>
                        <td>user3</td>
                        <td>
                            <button>Delete</button>
                            <button>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>example3@example.com</td>
                        <td>user3</td>
                        <td>
                            <button>Delete</button>
                            <button>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>example3@example.com</td>
                        <td>user3</td>
                        <td>
                            <button>Delete</button>
                            <button>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>example3@example.com</td>
                        <td>user3</td>
                        <td>
                            <button>Delete</button>
                            <button>Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>

    <script src="{{ asset('js/sidebarAdmin.js') }}"></script>

</body>

</html>
