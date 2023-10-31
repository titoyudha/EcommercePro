<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;

        }

        .font {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 50px;
            padding-bottom: 50px;
        }

        .font_size {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .text_color {
            color: black;
            padding-bottom: 20px;
        }

        label {
            display: flexbox;
            text-align: center;
            align-content: center;
            line-height: 150%;
            width: 200px;
            font-size: .85em;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }

        .div_design {
            padding-bottom: 10px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="div_design">
                    <h1 class="font">Add Product</h1>
                </div>
                <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="div_design">
                        <label>Product Title :</label>
                        <input class="product_title" type="text" name="title" placeholder="Write a title"
                            required="">
                    </div>

                    <div class="div_design">
                        <label>Product Description :</label>
                        <input class="text_color" type="text" name="title" placeholder="Write a Description"
                            required>
                    </div>

                    <div class="div_design">
                        <label>Product Price :</label>
                        <input class="text_color" type="number" name="price" placeholder="Write a Product Price"
                            required>
                    </div>

                    <div class="div_design">
                        <label>Product Quantity :</label>
                        <input class="text_color" type="number" name="quantity" placeholder="Write a Product Quantity"
                            min="0" required>
                    </div>

                    <div class="div_design">
                        <label>Product Description :</label>
                        <input class="text_color" type="text" name="title" placeholder="Write a Description"
                            required>
                    </div>

                    <div class="div_design">
                        <label>Product Category :</label>
                        <select class="text_color" name="category" required>
                            <option value="" selected="">Add Category Here</option>
                            <option value="">Shirt</option>
                        </select>
                    </div>

                    <div class="div_design">
                        <label>Product Image Here :</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="div_design">
                        <input type="submit" value="Add Product" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
        <!-- container-scroller -->
        @include('admin.script')

    </div>
</body>

</html>
