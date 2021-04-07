<template>
    <section class="dashboard">
        <div class="eshop-section section">
            <div class="container">
                <div class="row">
                    <div v-for="product in products" :key="product.id" class="col-md-3 col-sm-6">
                        <!-- Product -->
                        <div class="shop-item">
                            <!-- Product Image -->
                            <div class="shop-item-image">
                                <a href="page-product-details.html"><img v-bind:src="product.image" v-bind:alt="product.name"></a>
                            </div>
                            <!-- Product Title -->
                            <div class="title">
                                <h3><a href="page-product-details.html">{{product.name}}</a></h3>
                            </div>
                            <!-- Product Available Colors-->
                            <div class="colors">
                                <span class="color-white"></span>
                                <span class="color-black"></span>
                                <span class="color-blue"></span>
                                <span class="color-orange"></span>
                                <span class="color-green"></span>
                            </div>
                            <!-- Product Price-->
                            <div class="price">
                                {{product.price}}руб.
                            </div>
                            <!-- Add to Cart Button -->
                            <div class="actions">
                                <button type="button" class="btn btn-primary">Add to Cart</button>
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                </div>
                <div class="row justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "dashboard",
        components: {},
        data() {
            return {
                products: null
            };
        },
        mounted() {
            this.axios
                .get('/product')
                .then(response => (this.products = response.data));
        }
    };
</script>

<style>
    @import "../../assets/css/shop/main.css";
</style>