<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="{{ asset('css/petugas.css') }}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('images/LOGO.png') }}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Petugas</span>
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
                        <a href="/petugas/home">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li id="nav-product-item" class="nav-link">
                        <a href="/petugas/product">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Product Item</span>
                        </a>
                    </li>


                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Product Item</div>

        <div class="button-create">
            <button id="show-form-btn">Add Employee</button>
        </div>

        <div id="employee-form" class="employee-form">
            <h2>Add Employee</h2>
            <form>
                <label for="file">Image</label>
                <input type="file" id="email" name="email" required>

                <label for="product_name">Product Name</label>
                <input type="text" id="username" name="username" required>

                <label for="product_name">Price</label>
                <input type="number" id="username" name="username" required>

                <label for="product_name">Stock</label>
                <input type="number" id="username" name="username" required>

                <div class="inline-fields">
                    <label for="category">Category</label>
                    <select id="category" name="category" required>
                        <option value="Burger">Burger</option>
                        <option value="Pizza">Pizza</option>
                        <option value="Ice Cream">Ice Cream</option>
                        <option value="Drink">Drink</option>
                        <option value="Other">Other</option>
                    </select>

                    <div class="button-form">
                        <button type="submit">Submit</button>
                        <button type="button" id="close-form-btn">Cancel</button>
                    </div>
                </div>

            </form>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>image</td>
                        <td>Burger Cheese</td>
                        <td>Rp. 40.000</td>
                        <td>100</td>
                        <td>Burger</td>
                        <td>
                            <button>Delete</button>
                            <button>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>image</td>
                        <td>Ice Cream Oreo</td>
                        <td>Rp. 12.000</td>
                        <td>50</td>
                        <td>Ice Cream</td>
                        <td>
                            <button>Delete</button>
                            <button>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>image</td>
                        <td>Onion Ring</td>
                        <td>Rp. 10.000</td>
                        <td>10</td>
                        <td>Other</td>
                        <td>
                            <button>Delete</button>
                            <button>Edit</button>
                        </td>
                </tbody>
            </table>
        </div>
    </section>

    <script src="{{ asset('js/sidebarPetugas.js') }}"></script>

</body>

</html>
