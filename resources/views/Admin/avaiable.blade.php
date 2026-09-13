<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avelune - Available Room</title>

    <style>
        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

            font-family: Arial, sans-serif;

        }

        body {

            background: #f4f4f4;

            color: #111;

        }

        /* ================= NAVBAR ================= */

        .navbar {

            height: 105px;

            background: #23483f;

            display: flex;

            align-items: center;

            padding: 0 40px;

            color: white;

        }

        .profile-circle {

            width: 47px;

            height: 47px;

            background: #eeeeee;

            border-radius: 50%;

            margin-right: 180px;

        }

        .nav-menu {

            display: flex;

            align-items: center;

            gap: 44px;

        }

        .nav-menu a {

            color: white;

            text-decoration: none;

            font-size: 17px;

            font-weight: 600;

            padding: 10px 0;

        }

        .nav-menu a.active {

            color: #dca04b;

            text-decoration: underline;

            text-underline-offset: 4px;

        }

        .logo {

            margin-left: auto;

            text-align: center;

            font-size: 20px;

            font-weight: bold;

            letter-spacing: 1px;

        }

        .logo::before {

            content: "⌃";

            display: block;

            font-size: 30px;

            line-height: 18px;

            font-weight: normal;

        }


        /* ================= MAIN ================= */

        .container {

            padding: 40px 5.5%;

        }

        .page-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 35px;

        }

        .page-title h1 {

            font-size: 28px;

            margin-bottom: 8px;

        }

        .page-title p {

            color: #777;

            font-size: 18px;

        }

        .new-booking {

            background: #23483f;

            color: white;

            border: none;

            border-radius: 6px;

            padding: 10px 15px;

            font-size: 15px;

            cursor: pointer;

        }

        .new-booking span {

            font-size: 22px;

            margin-right: 8px;

        }


        /* ================= CARD ================= */

        .booking-card {

            background: white;

            padding: 29px 25px 35px;

            border-radius: 4px;

            overflow-x: auto;

        }


        /* ================= FILTER ================= */

        .filters {

            display: flex;

            gap: 25px;

            margin-bottom: 21px;

        }

        .search-box {

            width: 260px;

            height: 35px;

            border: 1px solid #d5d5d5;

            border-radius: 6px;

            display: flex;

            align-items: center;

            padding: 0 12px;

        }

        .search-box input {

            border: none;

            outline: none;

            width: 100%;

            font-size: 14px;

        }

        .search-icon {

            font-size: 22px;

            color: #777;

        }

        .filter-button,

        .date-button {

            height: 35px;

            background: white;

            border: 1px solid #d5d5d5;

            border-radius: 6px;

            padding: 0 16px;

            font-size: 14px;

            cursor: pointer;

        }

        .filter-button {

            width: 105px;

        }

        .date-button {

            width: 250px;

            text-align: left;

            color: #888;

        }


        /* ================= TABLE ================= */

        table {

            width: 100%;

            border-collapse: collapse;

            min-width: 1100px;

        }

        thead {

            background: #f1f1f1;

        }

        th {

            height: 61px;

            text-align: left;

            padding: 0 20px;

            font-size: 13px;

            white-space: nowrap;

        }

        td {

            height: 74px;

            padding: 0 20px;

            font-size: 13px;

            white-space: nowrap;

        }


        /* ================= STATUS ================= */

        .status {

            display: inline-block;

            background: #fff9c9;

            color: #d5ad00;

            padding: 7px 17px;

            border-radius: 6px;

            font-size: 10px;

            font-weight: bold;

        }


        /* ================= ACTION ================= */

        .actions {

            display: flex;

            align-items: center;

            gap: 22px;

        }

        .action {

            border: none;

            background: transparent;

            font-size: 18px;

            cursor: pointer;

        }

        .delete {

            color: #ff6b6b;

        }


        /* ================= RESPONSIVE ================= */

        @media (max-width: 900px) {

            .navbar {

                padding: 0 20px;

            }

            .profile-circle {

                margin-right: 30px;

            }

            .nav-menu {

                gap: 18px;

            }

            .nav-menu a {

                font-size: 14px;

            }

            .container {

                padding: 30px 20px;

            }

        }
    </style>
</head>

<body>

    <!-- ================= NAVBAR ================= -->

    <nav class="navbar">

        <div class="profile-circle"></div>

        <div class="nav-menu">

            <a href="/admin/bookings">

                Bookings
            </a>

            <a href="/admin/available-room" class="active">

                Available Room
            </a>

            <a href="/admin/cancelled-room">

                Cancelled Room
            </a>

            <a href="/admin/booking-history">

                Booking History
            </a>

        </div>

        <div class="logo">

            AVELUNE
        </div>

    </nav>


    <!-- ================= MAIN CONTENT ================= -->

    <main class="container">

        <div class="page-header">

            <div class="page-title">
                <h1>Available Room</h1>
                <p>Manage all available hotel rooms</p>
            </div>

            <button class="new-booking">
                <span>＋</span> New room
            </button>

        </div>


        <!-- ================= ROOM CARD ================= -->

        <div class="booking-card">

            <!-- FILTER -->

            <div class="filters">

                <div class="search-box">
                    <input type="text" placeholder="search...">

                    <span class="search-icon">⌕</span>
                </div>


                <button class="filter-button">

                    ♧ Filter⌄
                </button>


                <button class="date-button">

                    ▣ &nbsp; Select date range...
                </button>

            </div>


            <!-- ================= TABLE ================= -->

            <table>

                <thead>

                    <tr>
                        <th>NO.</th>
                        <th>ROOM NUMBER</th>
                        <th>ROOM SUITE</th>
                        <th>GUEST CAPACITY</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>

                </thead>


                <tbody>

                    <tr>
                        <td>1</td>
                        <td>101</td>
                        <td>Willowmere Suite</td>
                        <td>2 people</td>

                        <td>
                            <span class="status">

                                Available
                            </span>
                        </td>

                        <td>
                            <div class="actions">
                                <button class="action">◉</button>
                                <button class="action">✎</button>
                                <button class="action delete">♜</button>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>2</td>
                        <td>102</td>
                        <td>Willowmere Suite</td>
                        <td>2 people</td>

                        <td>
                            <span class="status">

                                Available
                            </span>
                        </td>

                        <td>
                            <div class="actions">
                                <button class="action">◉</button>
                                <button class="action">✎</button>
                                <button class="action delete">♜</button>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>3</td>
                        <td>102</td>
                        <td>Willowmere Suite</td>
                        <td>2 people</td>

                        <td>
                            <span class="status">

                                Available
                            </span>
                        </td>

                        <td>
                            <div class="actions">
                                <button class="action">◉</button>
                                <button class="action">✎</button>
                                <button class="action delete">♜</button>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>4</td>
                        <td>102</td>
                        <td>Willowmere Suite</td>
                        <td>2 people</td>

                        <td>
                            <span class="status">

                                Available
                            </span>
                        </td>

                        <td>
                            <div class="actions">
                                <button class="action">◉</button>
                                <button class="action">✎</button>
                                <button class="action delete">♜</button>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>5</td>
                        <td>102</td>
                        <td>Willowmere Suite</td>
                        <td>2 people</td>

                        <td>
                            <span class="status">

                                Available
                            </span>
                        </td>

                        <td>
                            <div class="actions">
                                <button class="action">◉</button>
                                <button class="action">✎</button>
                                <button class="action delete">♜</button>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>6</td>
                        <td>102</td>
                        <td>Willowmere Suite</td>
                        <td>2 people</td>

                        <td>
                            <span class="status">

                                Available
                            </span>
                        </td>

                        <td>
                            <div class="actions">
                                <button class="action">◉</button>
                                <button class="action">✎</button>
                                <button class="action delete">♜</button>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>7</td>
                        <td>102</td>
                        <td>Willowmere Suite</td>
                        <td>2 people</td>

                        <td>
                            <span class="status">

                                Available
                            </span>
                        </td>

                        <td>
                            <div class="actions">
                                <button class="action">◉</button>
                                <button class="action">✎</button>
                                <button class="action delete">♜</button>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>8</td>
                        <td>102</td>
                        <td>Willowmere Suite</td>
                        <td>2 people</td>

                        <td>
                            <span class="status">

                                Available
                            </span>
                        </td>

                        <td>
                            <div class="actions">
                                <button class="action">◉</button>
                                <button class="action">✎</button>
                                <button class="action delete">♜</button>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>9</td>
                        <td>102</td>
                        <td>Willowmere Suite</td>
                        <td>2 people</td>

                        <td>
                            <span class="status">

                                Available
                            </span>
                        </td>

                        <td>
                            <div class="actions">
                                <button class="action">◉</button>
                                <button class="action">✎</button>
                                <button class="action delete">♜</button>
                            </div>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </main>

</body>

</html>