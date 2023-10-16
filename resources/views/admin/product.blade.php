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

                <div class="div_center">
                    <h1 class="font">Add Product</h1>
                    <label>Product Title</label>
                    <input class="product_title" type="text" name="title" placeholder="Write a title">
                </div>

                <div class="div_center">
                    <label>Product Description</label>
                    <input class="text_color" type="text" name="title" placeholder="Write a Description">
                </div>

                <div class="div_center">
                    <label>Product Price</label>
                    <input class="text_color" type="number" name="title"
                        placeholder="Write a Price>
                </div>

                <div class="div_center">
                    <label>Product Quantity<label>
                            <input class="text_color" type="number" min="0" name="title"
                                placeholder="Write a Quantity">
                </div>

                <div class="div_center">
                    <label>Product Description</label>
                    <input class="text_color" type="text" name="title" placeholder="Write a Description">
                </div>

                <div class="div_center">
                    <label>Product Category </label>
                    <input class="text_color" type="text" name="title" placeholder="Write a Category">
                </div>

                <div class="div_center">
                    <label>Product Discount </label>
                    <input class="text_color" type="text" name="title" placeholder="Write a Discount">
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        @include('admin.script')

    </div>
</body>

</html>
