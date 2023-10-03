<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style>
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
            font-family: 'Courier New', Courier, monospace;
        }

        .input_color {
            color: black;
        }
    </style>
</head>

<body>
    <div class="container-scroller"></div>
    @include('admin.sidebar')
    @include('admin.header')

    <div class="main-panel">
        <div class="content-wrapper">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                </div>
            @endif

            <div class="div_center">
                <h2 class="h2_font">Add Category</h2>
                <form action="{{ url('/add_category') }}" method="POST">

                    @csrf

                    <form>
                        <input type="text" name="name" placeholder="Write Category">
                        <input type="submit" class="btn btn-primary" name="category">
                    </form>

            </div>
            <table class="center">
                <tr>
                    <td>Category Name</td>
                    <td>Action</td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>
